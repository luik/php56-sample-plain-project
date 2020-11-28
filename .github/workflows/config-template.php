<?php

//https://github.com/moodle/moodle/blob/master/.github/workflows/config-template.php

getenv('GITHUB_WORKFLOW') || die;

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'test_database';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'root';



