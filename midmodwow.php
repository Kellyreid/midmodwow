<?php
/*php internal*/ error_reporting(E_ERROR);
const CONSOLE_REPORTING_LEVEL = 1;
const DB_EXECUTION_MODE = "QUERYDUMP";

const PROJECT_PATH = 'E:\WowServer\GROGSERVER';
const QUERY_OUTPUT_PATH = PROJECT_PATH;
require_once '_lib\helpers.php';
require_once 'modConfig.php';


loadPHPFromDirs(DIR_TO_LOAD);   // loads dependencies
