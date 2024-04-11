<?php
const QUERYDUMP_FILE_NAME = "grogWowMigration";
const QUERYDUMP_FILE_FORMAT = "sql";
const QUERYDUMP_FILE_PATH = QUERY_OUTPUT_PATH.'\\'.QUERYDUMP_FILE_NAME.'.'.QUERYDUMP_FILE_FORMAT;
unlink(QUERYDUMP_FILE_PATH);

const DIR_TO_LOAD = ['wowDB', 'mods'];

function loadPHPFromDirs($dirs){
    foreach($dirs as $dir){
        say("Loading File from: $dir", 1);
        loadPhpFromDir($dir);
    }
}

function loadPhpFromDir($dirPath){
    $files = glob($dirPath.'/*.php');
    foreach($files as $file){
        say("Loading: $file", 2);
        require_once $file;
    }
}

const EMPTY_STRING = "";
const NULLSTR = "";
const EMPTY_ARRAY = [];
const NULLARR = [];

/* Levels for `say()` output. */

const ERROR_ONLY = 0;
const STATUS_REPORTING = 1;
const VERBOSE_REPORTING = 2;
const DEBUG_DUMP = 3;

function say($dataToShow, int $messageReportingLevel = 1): void {
    if ($messageReportingLevel <= CONSOLE_REPORTING_LEVEL) {
        switch (true) {
            case is_object($dataToShow):
                echo "[OBJECT] ";
                print_r($dataToShow);
                break;
            case is_array($dataToShow):
                echo "[ARRAY] ";
                print_r($dataToShow);
                break;
            case is_bool($dataToShow):
                echo "[BOOL] " . ($dataToShow ? 'true' : 'false') . PHP_EOL;
                break;
            case is_string($dataToShow):
                echo "" . $dataToShow . PHP_EOL;    // don't show data type if string
                break;
            case is_int($dataToShow):
                echo "[INT] " . $dataToShow . PHP_EOL;
                break;
            case is_float($dataToShow):
                echo "[FLOAT] " . $dataToShow . PHP_EOL;
                break;
            default:
                echo "[Other] " . $dataToShow . PHP_EOL;
                break;
        }
    }
}



function executeQueryBatch($queries){
    foreach($queries as $key=>$query){
        say(" > ".$key);
        dbQuery($query);
    }
}

function dbQuery($query){

    if (DB_EXECUTION_MODE == "QUERYDUMP"){
        say("Query: ".$query,2);

        if (!file_exists(QUERY_OUTPUT_PATH)){
            say("querydump.sql does not exist, creating it.",2);
            $file = fopen(QUERYDUMP_FILE_PATH, "w");
            fclose($file);
        }

        say("trying to find Query Output File: ".QUERYDUMP_FILE_PATH,2);
        $file = fopen(QUERYDUMP_FILE_PATH, "a");
        say("writing to Query Output File ".QUERYDUMP_FILE_PATH,2);
        fwrite($file, "\n\n".$query."\n\n");
        fclose($file);



    }
    return true;
}

