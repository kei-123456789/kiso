<?php
$name = null;

if (!isset($_GET["name"])) {
    $name = null;
} elseif (!is_string($_GET["name"])) {
    $name = false;
} else {
    $name = $_GET["name"];
}

var_dump($name);
die("debug");
