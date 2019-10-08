<?php

namespace CalculatorViaClosure\Operations;

global $substraction;

$substraction = function (...$args) {
    if (count($args) === 1) {
        return $args[0];
    }

    $start = array_shift($args);

    return array_reduce($args, function ($acc, $v) {
        return $acc - $v;
    }, $start);
};
