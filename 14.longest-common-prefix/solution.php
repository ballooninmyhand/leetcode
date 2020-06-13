<?php
/**
 * Created by PhpStorm.
 * User: luoding
 * Date: 2020/4/13
 * Time: 1:44 PM
 */

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        if (empty($strs) || !is_array($strs)) {
            return  '';
        }
        $prefix = $char = '';
        $length = strlen($strs[0]);
        for ($i = 0; $i < $length; $i++) {
            $char = $strs[0][$i];
            foreach ($strs as $str) {
                if ($str[$i] != $char) {
                    break 2;
                }
            }
            $prefix .= $char;
        }

        return $prefix;
    }
}

$strs = ["flower","dog","flight"];
echo (new Solution())->longestCommonPrefix($strs) . PHP_EOL;