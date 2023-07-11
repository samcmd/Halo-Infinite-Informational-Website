<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Sam Schultz">
        <meta name="description" content="An introductory guide to Halo Infinite from Xbox Game Studios.">

        <title>Halo Infinite Players Guide</title>

        <link rel = "stylesheet" href = "css/custom.css?version=<?php print time(); ?>" type = "text/css">

<!-- ****  include libraries  **** -->
<?php
include 'lib/constants.php';

print '<!-- make Database connections -->';
require_once(LIB_PATH . '/Database.php');
$thisDatabaseReader = new Database('smschult_reader', 'r', DATABASE_NAME);
$thisDatabaseWriter = new Database('smschult_writer', 'w', DATABASE_NAME);

print '</head>';
print'<body id="' . PATH_PARTS['filename'] . '">';
print '<!-- ***** START OF BODY **** -->';

print PHP_EOL;

include 'header.php';
print PHP_EOL;

include 'nav.php';
print PHP_EOL;

?>