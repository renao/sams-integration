/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';

import { PanelBody, TextControl } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
// Kein direkter API-Client mehr nötig, alles läuft über den WordPress-Proxy
import { useEffect, useState } from 'react';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	// rankingConfig: { samsConfigId, matchSeriesId }
	const { rankingConfig = {} } = attributes;
	const { samsConfigId, matchSeriesId } = rankingConfig;

	const configs = useSelect(
		(select) => select('core').getEntityRecords('postType', 'sams_host_config', { per_page: 100 }),
		[]
	);

	const selectedConfig =
		configs && samsConfigId
			? configs.find((config) => config.id == samsConfigId)
			: null;

	// State für Testabruf
	const [testResult, setTestResult] = useState(null);
	const [testError, setTestError] = useState(null);
	const [isLoading, setIsLoading] = useState(false);

	useEffect(() => {
		// Testabruf nur wenn beide Werte gesetzt sind
		if (samsConfigId && matchSeriesId) {
			setIsLoading(true);
			setTestResult(null);
			setTestError(null);
			// Passe ggf. den REST-Base-Route an!
			const restBase = 'sams/v2';
			fetch(`/wp-json/${restBase}/associations?samsConfigId=${encodeURIComponent(samsConfigId)}&matchSeriesId=${encodeURIComponent(matchSeriesId)}`)
				.then(res => {
					if (!res.ok) throw new Error('HTTP ' + res.status);
					return res.json();
				})
				.then(data => {
					setTestResult(data);
					setIsLoading(false);
				})
				.catch(err => {
					setTestError(err.message || String(err));
					setIsLoading(false);
				});
		} else {
			setTestResult(null);
			setTestError(null);
		}
	}, [samsConfigId, matchSeriesId]);

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Settings', 'sams-integration')}>
					{!configs ? (
						<p>{__('Loading ...', 'sams-integration')}</p>
					) : (
						<select
							value={samsConfigId || ''}
							onChange={e => {
								setAttributes({
									rankingConfig: {
										...rankingConfig,
										samsConfigId: e.target.value,
									}
								});
							}}
						>
							<option value="">{__('Select SAMS Server', 'sams-integration')}</option>
							{configs.map(config => (
								<option key={config.id} value={config.id}>
									{config.title?.rendered || config.id}
								</option>
							))}
						</select>
					)}
					<TextControl
						label={__('MatchSeriesId', 'sams-integration')}
						value={matchSeriesId || ''}
						onChange={(value) => setAttributes({
							rankingConfig: {
								...rankingConfig,
								matchSeriesId: value,
							}
						})}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...useBlockProps()}>
				<p>
					SAMS Ranking Vorschau:<br />
					{__('Config:', 'sams-integration')} {selectedConfig ? (selectedConfig.title?.rendered || selectedConfig.id) : __('None selected', 'sams-integration')}<br />
					{__('MatchSeriesId:', 'sams-integration')} {matchSeriesId || __('None', 'sams-integration')}
				</p>
				<div style={{ background: '#f6f6f6', padding: '8px', borderRadius: '4px', fontSize: '90%' }}>
					<strong>Testabruf:</strong><br />
					{isLoading && <span>Lade Daten ...</span>}
					{testError && <span style={{ color: 'red' }}>Fehler: {testError}</span>}
					{testResult && (
						<pre style={{ maxHeight: 200, overflow: 'auto' }}>{JSON.stringify(testResult, null, 2)}</pre>
					)}
					{!isLoading && !testError && !testResult && <span>Bitte Konfiguration und MatchSeriesId wählen.</span>}
				</div>
			</div>
		</>
	);
}