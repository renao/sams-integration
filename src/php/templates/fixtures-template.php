<table class="sams-fixtures">
    <th class="date"><?php esc_html_e('Starts', 'sams-integration'); ?></th>
    <th class="fixtureName"><?php esc_html_e('Fixture', 'sams-integration'); ?></th>
    <th class="venue"><?php esc_html_e('Venue', 'sams-integration'); ?></th>
    <tbody>
	
<?php foreach ($sams_integration_fixtures->fixturesEntries as $fixture) { ?>
        <tr>
            <td class="date">
                <?php echo esc_html($fixture->date); ?>
                <br>
                <?php echo esc_html($fixture->startTime); ?> Uhr
            </td>
            <td class="fixture">
                <span class="fixture-name"> <?php echo esc_html($fixture->teamHome . " - " . $fixture->teamAway); ?></span>
                <span class="fixture-result"><?php if ($fixture->hasResult()) { echo esc_html(" (" . $fixture->score . ")"); }; ?></span>
            </td>
            <td class="venue"><?php echo esc_html($fixture->venue); ?></td>
        </tr>
<?php };?>
    </tbody>
</table>