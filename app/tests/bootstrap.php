<?php

/*
 * Test bootstrapper. This leaves out all stuff registering services and
 * related to request dispatching.
 */
global $CLOADER;

if(is_dir(__DIR__.'/../../../../../vendor/'))
{
    $CLOADER = require_once __DIR__.'/../../../../autoload.php';
}
else
{
    $CLOADER = require_once __DIR__.'/../../vendor/autoload.php';
}

require_once "upload-bootstrap.php";
define('TEST_ROOT', realpath(__DIR__."/../../"));
