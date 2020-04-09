<?php
/**
 * Created by PhpStorm.
 * User: luoding
 * Date: 2020/4/9
 * Time: 10:26 AM
 */

class Solution
{
    function findTarget($root, $k) {
        $found = [];
        return $this->find($root, $k, $found);
    }


    function find($root, $k, &$found)
    {
        if (empty($root)) {
            return false;
        }
        if (isset($found[$k - $root->val])) {
            return true;
        }
        $found[$root->val] = true;
        return $this->find($root->left, $k, $found) || $this->find($root->right, $k, $found);
    }
}

//$root = (object)[
//    'val' => 5,
//    'left' => (object)[
//        'val' => 3,
//        'left' => (object)[
//            'val' => 2,
//            'left' => null,
//            'right' => null,
//        ],
//        'right' => (object)[
//            'val' => 4,
//            'left' => null,
//            'right' => null,
//        ]
//    ],
//    'right' => (object)[
//        'val' => 6,
//        'left' => null,
//        'right' => (object)[
//            'val' => 7,
//            'left' => null,
//            'right' => null,
//        ]
//    ]
//];
$root = (object)[
    'val' => 2,
    'left' => (object)[
        'val' => 1,
        'left' => null,
        'right' => null,
    ],
    'right' => (object)[
        'val' => 3,
        'left' => null,
        'right' => null
    ]
];
$k = 4;
$result = (new Solution())->findTarget($root, $k);
var_dump($result);
