<?php
/**
 * Copyright (C) Dominik Voda - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Dominik Voda <d.voda94@gmail.com>
 *
 * Created by PhpStorm.
 * Date: 11.08.2016
 * Time: 20:22
 */

require __DIR__ . "/vendor/autoload.php";

$application = new \Symfony\Component\Console\Application("Advent of Code 2016 console application");

$application->add(new \AdventOfCode2016\Puzzle());

$application->run();