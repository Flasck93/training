<?php
function get_table($a, $b)
{
    echo '<table border="1" widhth="100%">';
    $tr = 1;
    while ($tr < $a + 1) {
        echo "<tr>";
        $td = 1;
        while ($td < $b + 1) {
            echo "<td>$td * $tr =" . $td * $tr . "</td>";
            $td++;
        }
        echo "</tr>";
        $tr++;
    }
    echo '</table>';
}