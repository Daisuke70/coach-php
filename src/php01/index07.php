<?php
$people = [
    ["Daisuke",24,"men"],
    ["Haruto",24,"men"],
    ["Kanata",21,"men"]
];

foreach ($people as $person ) {
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")" . "<br />";
}




