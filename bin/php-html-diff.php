#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';
use PhpHtmlDiff\Command;
use Symfony\Component\Console\Application;

$command     = new Command\DiffCommand();
$application = new Application('PhpHtmlDiff', '0.1-dev');
$application->add($command);
$application->run();