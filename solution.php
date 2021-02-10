<?php

/**
 * The solution function.
 *
 * @param array $input An array of non-negative ints
 *
 * @return int The answer
 */
function solution (array $input) : int {

    // Some variables for us to keep track of things.
    $left = NULL;
    $right = NULL;
    $water = 0;
    $middle = 0;
    $skipped = NULL;

    // Traverse the input array.
    foreach ($input as $height) {
        // Height has not been set on the left, set it.
        if ($left === NULL) {
            $left = $height;
            continue;
        }

        // Height has not been set on the right, set it.
        if ($right === NULL) {
            $right = $height;
            continue;
        }

        // The current height is higher than the right, so this is the new highest on the right hand side now.
        if ($height > $right) {

            $middle += $right;
            $right = $height;
            $skipped++;

            continue;
        } else {
            $middle += $height;
            $skipped++;
        }
    }

    $max_water_level = min($left, $right);
    $water = $max_water_level * $skipped - $middle;

    return $water;
}