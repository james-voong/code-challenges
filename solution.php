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
            var_dump("Left is ".$left);
            continue;
        }

        // Height has not been set on the right, set it.
        if ($right === NULL) {
            $right = $height;
            var_dump("Right is ".$right);

            continue;
        }

        $middle += $right;

        // The current height is higher than the right, so this is the new highest on the right hand side now.
        if ($height > $right) {
            // We should keep track of the height of things in between.

            $right = $height;
            var_dump("Right is updated to ".$height);

            continue;
        } else {
            $skipped++;
        }
        
        // Keep track of the skipped height.

        // Need an exit condition.

        // $water = min($left, $right) - $middle;
    }

    $max_water_level = min($left, $right);
    $water = $max_water_level - $middle + $skipped * $max_water_level;

    return $water;
}