<?php
function findProductByName($arr, $name)
{
    foreach ($arr as $value) {
        if ($value['name'] == $name) {
            return $value;
        }
    }
    return null;
}

function findProductByCategory($arr, $id)
{
    $product = array();
    foreach ($arr as $value) {
        if ($value['id_cate'] == $id) {
            array_push($product, $value);
        }
    }
    echo '<pre>';
    var_dump($product);
    echo '<pre>';
}

function findProductByprice($arr, $price)
{
    $product = array();
    foreach ($arr as $value) {
        if ($value['price'] == $price) {
            array_push($product, $value);
        }
    }
    echo '<pre>';
    var_dump($product);
    echo '<pre>';
}

function sortByPrice($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - 1; $j++) {
            if ($arr[$j]['price'] < $arr[$j + 1]['price']) {
                $tmp = $arr[$j + 1]['price'];
                $arr[$j + 1]['price'] = $arr[$j]['price'];
                $arr[$j]['price'] = $tmp;
            }
        }
    }
    return $arr;
}
