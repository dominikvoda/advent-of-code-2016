<?php
/**
 * Copyright (C) Dominik Voda - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Dominik Voda <d.voda94@gmail.com>
 *
 * Created by PhpStorm.
 * Date: 01.12.2016
 * Time: 13:56
 */

namespace AdventOfCode2016\Days\Day9;

use AdventOfCode2016\Days\AbstractPuzzle;

class Puzzle extends AbstractPuzzle
{
    public function getInputType()
    {
        return self::VARIABLE_INPUT;
    }

    public function resolve()
    {
        preg_match_all("/[^A-Z]+[A-Z]+/", $this->input, $markers);

        $total = 0;

        foreach ($markers[0] as $marker) {
            $total += $this->getMarkerSize($marker);
        }

        return $total;
    }

    public function getMarkerSize($marker)
    {
        preg_match_all("/\d+/", $marker, $numbers);
        preg_match('/[A-Z]+/', $marker, $characters);

        $string = $characters[0];
        $markerSize = strlen($string);
        $numbers = $numbers[0];

        if (count($numbers) === 4) {
            $string = '(' . $numbers[2] . 'x' . $numbers[3] . ')' . $string;
            $markerSize = strlen($string);
            $additional = (int)$numbers[0] * (int)$numbers[1];

            return $additional + $markerSize - $numbers[0];
        }

        if (count($numbers) === 2) {
            $additional = (int)$numbers[0] * (int)$numbers[1];

            return $additional + $markerSize - $numbers[0];
        }

        return $markerSize;
    }
}
