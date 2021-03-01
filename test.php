<?php
// bai 4
function findProductByName($arr, $name)
{
    foreach ($arr as $value) {
        if ($value['name'] == $name) {
            return $value;
        }
    }
    return null;
}

// bai 5
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

// bai 6
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

// bai 11
function sortByPrice($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - 1; $j++) {
            if ($arr[$j]['price'] > $arr[$j + 1]['price']) {
                $tmp = $arr[$j + 1]['price'];
                $arr[$j + 1]['price'] = $arr[$j]['price'];
                $arr[$j]['price'] = $tmp;
            }
        }
    }
    return $arr;
}


// bai 12
function sortByName($arr)  {
    // Tổng số phần tử
    $sophantu = count($arr);
  
    // Lặp qua từng phần tử của mảng để sắp xếp
    for ($i = 0; $i < $sophantu; $i++)
    {
        // Lặp từ phần tử thứ $i, ví dụ $i = 6
        // thì sẽ lặp từ phần tử số 6 trở về 0 để kiểm tra
        $loop = $i;
  
        // Lưu lại giá trị của $mang[$i] để khỏi bị mất
        $current = $arr[$i];

        while($loop > 0 && (strlen($arr[$loop - 1]['name']) > strlen($current['name'])))
        {
            // Di dời các phần tử lên 1 bậc
            $arr[$loop] = $arr[$loop - 1];
            $loop -= 1;
        }
  
        // Gán giá trị $current vào vị trí tìm được
        $arr[$loop] = $current;
    }
  
    return $arr;
}