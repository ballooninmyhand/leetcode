<?php
/**
 * Created by PhpStorm.
 * User: luoding
 * Date: 2020/4/9
 * Time: 1:34 AM
 */

class Solution
{
    /**
     * 双指针查找，时间复杂度 O(n)，空间复杂度 O(1)
     *
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target)
    {
        $left = 0;
        $right = count($numbers) - 1;
        while ($left < $right) {
            if ($numbers[$left] + $numbers[$right] == $target) {
//                echo "$numbers[$left] + $numbers[$right] = $target; " . 'return' . PHP_EOL;
                return [$left + 1, $right + 1];
            } elseif ($numbers[$left] + $numbers[$right] > $target) {
//                echo "$numbers[$left] + $numbers[$right] > $target; " . '$right--' . PHP_EOL;
                $right--;
            } else {
//                echo "$numbers[$left] + $numbers[$right] < $target; " . '$left++' . PHP_EOL;
                $left++;
            }
        }
    }
}

class Solution2
{
    /**
     * 双指针 + 二分查找 T(n) = O(logN)
     * @param $numbers
     * @param $target
     * @return array
     */
    function twoSum($numbers, $target)
    {
        $index = 0;
        $right = count($numbers) - 1;
        for (; $index <= $right; $index++) {
            $anotherNum = $target - $numbers[$index];
            if ($numbers[$right] < $anotherNum) {
//                echo '$index = ' . $index . '; ';
//                echo '$anotherNum = ' . $anotherNum . '; ';
//                echo '$left = ' . ($left ?? 0) . '; ';
//                echo '$right = ' . $right . '; ';
//                echo "{$numbers[$right]} < $anotherNum" . PHP_EOL;
                continue;
            }
            $left = $index + 1;
            while ($left <= $right) {
//                echo '$index = ' . $index . '; ';
//                echo '$anotherNum = ' . $anotherNum . '; ';
//                echo '$left = ' . $left . '; ';
//                echo '$right = ' . $right . '; ';
                $mid = intval(($left + $right) / 2);
//                echo '$mid = ' . $mid . '; ';
                if ($numbers[$mid] == $anotherNum) {
//                    echo "{$numbers[$mid]} = $anotherNum" . PHP_EOL;
                    return [$index + 1, $mid + 1];
                } elseif ($numbers[$mid] < $anotherNum) {
//                    echo "{$numbers[$mid]} < $anotherNum" . PHP_EOL;
                    $left = $mid + 1;
                } else {
//                    echo "{$numbers[$mid]} > $anotherNum" . PHP_EOL;
                    $right = $mid - 1;
                }
            }
            echo PHP_EOL;
        }
    }
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 17, 18, 19, 20, 21, 22, 23, 24];
$target = 17;
$result = (new Solution2())->twoSum($numbers, $target);
var_dump($result);