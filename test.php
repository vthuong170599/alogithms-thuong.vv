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
