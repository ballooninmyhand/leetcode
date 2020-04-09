<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        foreach ($nums as $key => $num) {
            unset($nums[$key]);
            $anotherNum = $target - $num;
            if ($key2 = array_keys($nums, $anotherNum)) {
                return [$key, $key2[0]];
            }
        }
    }
}

class Solution2
{
    /**
     * @param $nums
     * @param $target
     * @return array
     */
    function twoSum($nums, $target) {
        $count = count($nums);
        $found = [];

        for ($i = 0; $i < $count; $i++) {
            $anotherNum = $target - $nums[$i];
            if (array_key_exists($anotherNum, $found)) {
                return [$found[$anotherNum], $i];
            }
            $found[$nums[$i]] = $i;
        }
    }
}

$nums = [2, 11, 71, 15, 7];
$target = 9;
$result = (new Solution2())->twoSum($nums, $target);
var_dump($result);
