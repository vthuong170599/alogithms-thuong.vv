<?php
    include 'test.php';
    $product = [
        ['name'=>'CPU','price'=>'750','id_cate'=>1,'quantity'=>10],
        ['name'=>'RAM','price'=>'50','id_cate'=>2,'quantity'=>2],
        ['name'=>'HDD','price'=>'70','id_cate'=>2,'quantity'=>1],
        ['name'=>'Main','price'=>'400','id_cate'=>1,'quantity'=>3],
        ['name'=>'Keyboard','price'=>'30','id_cate'=>4,'quantity'=>8],
    ];
    // var_dump(findProductByName($arr,'sp3'));
    // var_dump(findProductByCategory($arr,2));
    // var_dump(findProductByprice($arr,'2000'));
    findProductByprice($product,'70');
?>