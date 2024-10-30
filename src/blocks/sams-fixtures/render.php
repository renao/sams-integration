<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */


use SAMSPlugin\FixturesFetcher;

if (isset($attributes)
	&& isset($attributes['apiKey'])
	&& isset($attributes['associationUrl'])
	&& isset($attributes['matchSeriesId'])
	&& isset($attributes['teamId'])) {

	$fetcher = new FixturesFetcher();
	$fixtures = $fetcher->fetch(
		$attributes['associationUrl'],
		$attributes['apiKey'],
		$attributes['matchSeriesId'],
		$attributes['teamId']);
?>

<div <?php echo get_block_wrapper_attributes(); ?>>
<table class="sams-fixtures">
    <th class="date"><?php esc_html_e('Starts', 'sams-plugin'); ?></th>
    <th class="fixtureName"><?php esc_html_e('Fixture', 'sams-plugin'); ?></th>
    <th class="venue"><?php esc_html_e('Venue', 'sams-plugin'); ?></th>
    
	
	<?php foreach ($fixtures->fixturesEntries as $fixture) { ?>

	<tr>
    <td class="date">
		<?php echo $fixture->date; ?>
        <br>
		<?php echo $fixture->startTime; ?> Uhr
    </td>
    <td class="fixture">
		<span class="fixture-name"> <?php echo $fixture->teamHome . " - " . $fixture->teamAway ?></span>
		<span class="fixture-result"><?php if ($fixture->hasResult()) { echo " (" . $fixture->score . ")"; }; ?></span>
	</td>
    <td class="venue"><?php echo $fixture->venue; ?></td>
</tr>

<?php };?>
</table>

<?php
} else {
	// Display error message on invalid configuration
	esc_html_e('Error in SAMS Fixtures: Configuration missing or incomplete', 'sams-plugin');
}
	?>

</div>

