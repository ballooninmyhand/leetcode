<?php
/**
 * Created by PhpStorm.
 * User: luoding
 * Date: 2020/4/10
 * Time: 10:32 AM
 */

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        $cp = abs($x);
        $reverse = 0;
        while ($cp > 0) {
            $reverse = $reverse * 10 + $cp % 10;
            $cp = ($cp - $cp % 10) / 10;
        }
        if ($x < 0) {
            $reverse = -$reverse;
        }

        if ($reverse > pow(2, 31) - 1 || $reverse < -pow(2, 31)) {
            return 0;
        }
        return $reverse;
    }
}

$x = 120;
echo (new Solution())->reverse($x);
