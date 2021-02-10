<?php

use PHPUnit\Framework\TestCase;
require_once(dirname(__FILE__).'/../solution.php');

final class TrappingRainwaterTest extends TestCase {

    public function testLeftHigher() : void {
        $input = [4, 0, 2];
        $this->assertEquals(
            2,
            solution($input)
        );
    }

    public function testRightHigher() : void {
        $input = [3, 0, 4];
        $this->assertEquals(
            3,
            solution($input)
        );
    }

    public function testLargeGap() : void {
        $input = [4, 0, 0, 4];
        $this->assertEquals(
            8,
            solution($input)
        );
    }

    public function testNonZeroMid() : void {
        $input = [4, 2, 1, 4];
        $this->assertEquals(
            5,
            solution($input)
        );
    }

    public function testNoTrappedWater() : void {
        $input = [1, 2, 0, 0];
        $this->assertEquals(
            0,
            solution($input)
        );
    }

    public function testMultipleBodiesOfWater() : void {
        // This array contains 2 bodies of water:
        // (3, 0, 3) and (4, 2 ,5)
        $input = [3, 0, 3, 4, 2, 5];
        $this->assertEquals(
            5,
            solution($input)
        );
    }
}