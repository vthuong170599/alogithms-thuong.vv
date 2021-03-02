<?php
include 'test.php';
$product = [
    ['name' => 'CPU', 'price' => 750, 'id_cate' => 1, 'quantity' => 10],
    ['name' => 'RAM', 'price' => 50, 'id_cate' => 2, 'quantity' => 2],
    ['name' => 'HDD', 'price' => 70, 'id_cate' => 2, 'quantity' => 1],
    ['name' => 'Main', 'price' => 400, 'id_cate' => 1, 'quantity' => 3],
    ['name' => 'Keyboard', 'price' => 30, 'id_cate' => 4, 'quantity' => 8],
];
$category = [
    ['id' => 1, 'name' => 'Comuter'],
    ['id' => 2, 'name' => 'Memory'],
    ['id' => 3, 'name' => 'Card'],
    ['id' => 4, 'name' => 'Accessory'],
];

$menu = [
    ['id'=>1,'title'=>'thể thao','parent_id'=>0],
    ['id'=>2,'title'=>'Xã hội','parent_id'=>0],
    ['id'=>3,'title'=>'thể thao trong nước','parent_id'=>1],
    ['id'=>4,'title'=>'giao thông','parent_id'=>2],
    ['id'=>5,'title'=>'môi trường','parent_id'=>2],
    ['id'=>6,'title'=>'thể thao quốc tế','parent_id'=>1],
    ['id'=>7,'title'=>'môi trường đô thị','parent_id'=>5],
    ['id'=>8,'title'=>'giao thông ùn tắc','parent_id'=>4],
];
    // var_dump(findProductByName($arr,'sp3'));
    // var_dump(findProductByCategory($arr,2));
    // var_dump(findProductByprice($arr,'2000'));
    // findProductByprice($product,'70');
    // $arr = sortByName($product);
    // foreach($arr as $value){
    //     echo '<pre>';
    //     echo $value['name'];
    //     echo '<pre>';
    // }

    // $listProduct = mapProductByCategory($product,$category);
    // echo '<pre>';
    // var_dump($listProduct);
    // echo '<pre>'

    printMenu($menu,$parentID=0);
