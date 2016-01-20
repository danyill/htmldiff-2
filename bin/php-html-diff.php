#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';
use PhpHtmlDiff\Command;
use Symfony\Component\Console\Application;

$application = new Application( 'PhpHtmlDiff', '0.1-dev' );
$application->add( new Command\DiffCommand() );
$application->run();