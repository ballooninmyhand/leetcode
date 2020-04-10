<?php
/**
 * Created by PhpStorm.
 * User: luoding
 * Date: 2020/4/10
 * Time: 10:49 AM
 */

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        if ($x < 0) {
            return false;
        }

        $cp = $x;
        $reverse = 0;
        while ($cp > 0) {
            $reverse = $reverse * 10 + $cp % 10;
            $cp = ($cp - $cp % 10) / 10;
        }

        return $reverse === $x;
    }
}

$x = 212;
var_dump((new Solution())->isPalindrome($x));
