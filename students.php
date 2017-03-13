<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 13/03/17
 * Time: 17:33
 */
$students = ["Emmanuel" => 42, "Thierry" => 51, "Pascal" => 45, "Eric" => 48, "Nicolas" => 19];

print '<p>Les prénoms et l\'âge des élèves (liste):</p>';

foreach ($students as $name => $age) {
    echo $name . ': ' . $age . '<br>';
}

$average_age = array_sum($students) / count($students);
echo '<p>La moyenne de l\'âge des élèves est ' . $average_age . ' ans.</p>';
