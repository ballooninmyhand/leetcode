<?php
/**
 * Created by PhpStorm.
 * User: luoding
 * Date: 2020/4/11
 * Time: 2:31 PM
 */

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $map = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $i = 0;
        $num = 0;
        while ($i < strlen($s)) {
            if ($map[$s[$i]] < $map[$s[$i + 1]]) {
                $num += $map[$s[$i + 1]] - $map[$s[$i]];
                $i += 2;
            } else {
                $num += $map[$s[$i]];
                $i++;
            }
        }

        return $num;
    }
}

$s = 'MCMXCIV';
var_dump((new Solution())->romanToInt($s));