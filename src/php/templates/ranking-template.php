<table class="sams-ranking">
    <th class="rank"><?php esc_html_e('Rank', 'sams-integration'); ?></th>
    <th class="teamName"><?php esc_html_e('Team', 'sams-integration'); ?></th>
    <th class="games"><?php esc_html_e('Games', 'sams-integration'); ?></th>
    <th class="balls"><?php esc_html_e('Balls', 'sams-integration'); ?></th>
    <th class="sets"><?php esc_html_e('Sets', 'sams-integration'); ?></th>
    <th class="points"><?php esc_html_e('Points', 'sams-integration'); ?></th>
    <tbody>

<?php foreach ($sams_integration_ranking->rankingEntries as $entry) { ?>

        <tr>
            <td class="rank"><?php echo esc_html($entry->place); ?></td>
            <td class="teamName"><?php echo esc_html($entry->teamName); ?></td>
            <td class="games"><?php echo esc_html($entry->games); ?></td>
            <td class="balls"><?php echo esc_html($entry->ballsPro . ':' . $entry->ballsCon); ?></td>
            <td class="sets"><?php echo esc_html($entry->setsPro . ':' . $entry->setsCon); ?></td>
            <td class="points"><?php echo esc_html($entry->points); ?></td>
        </tr>

<?php };?>
    </tbody>
</table>