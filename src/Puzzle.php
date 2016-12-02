<?php
/**
 * Copyright (C) Dominik Voda - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Dominik Voda <d.voda94@gmail.com>
 *
 * Created by PhpStorm.
 * Date: 01.12.2016
 * Time: 14:12
 */

namespace AdventOfCode2016;


use AdventOfCode2016\Days\AbstractPuzzle;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Puzzle extends Command
{
    protected function configure()
    {
        $this->setName("puzzle:day");
        $this->addArgument("day");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $day = $input->getArgument("day");
        $puzzleClass = "AdventOfCode2016\\Days\\Day" . $day . "\\Puzzle";

        /** @var AbstractPuzzle $puzzle */
        $puzzle = new $puzzleClass();

        $output->writeln("Result: " . $puzzle->resolve());
    }

}