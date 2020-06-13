<?php
/**
 * Created by PhpStorm.
 * User: luoding
 * Date: 2020/6/13
 * Time: 12:34 PM
 */

class Solution
{

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        if ($n <= 2) {
            return $n;
        }

        $pre = 1;
        $total = $cur = 2;
        for ($i = 3; $i <= $n; $i++) {
            $total = $cur + $pre;
            $pre = $cur;
            $cur = $total;
        }

        return $total;
    }
}

$n = 6;
echo (new Solution())->climbStairs($n);
