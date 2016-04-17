<?php

$array = array(
    'Список Школ' => array(
        'Школа №1' => 9,
        'Школа №3' => 7
    ),
    'Остальные учреждения' => 3
);

/**
 * Рекурсивная функция
 * @staticvar integer $count
 * @staticvar integer $items
 * @param array $array
 * @param integer $level
 * @return array
 */

function sum($array, $level = 0) {

    static $count = 0;
    static $items = 0;

    if (is_array($array)) {
        $level++;
        foreach ($array as $element) {
            sum($element, $level);
        }
    } else {
        $count++;
        $items += $array;
    }
    
    return array('count' => $count, 'items' => $items);
}

$result = sum($array);

print_r($result);

