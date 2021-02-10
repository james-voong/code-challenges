<?php

use PHPUnit\Framework\TestCase;

final class TrappingRainwaterTest extends TestCase {

    public function testLeftHigher() : void {
        $input = [4, 0, 2];
        assertEquals(
            solution($input),
            2
        );
    }

    public function testRightHigher() : void {
        $input = [3, 0, 4];
        assertEquals(
            solution($input),
            3
        );
    }

    public function testLargeGap() : void {
        $input = [4, 0, 0, 4];
        assertEquals(
            solution($input),
            8
        );
    }

    public function testNonZeroMid() : void {
        $input = [4, 2, 1, 4];
        assertEquals(
            solution($input),
            5
        );
    }

}