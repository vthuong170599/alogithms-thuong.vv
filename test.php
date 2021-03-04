<?php
// bai 4
function findProductByName($productList, $name)
{
    foreach ($productList as $product) {
        if ($product['name'] == $name) {
            return $product;
        }
    }
    return null;
}

// bai 5
function findProductByCategory($productList, $categoryID)
{
    $productArr = array();
    foreach ($productList as $product) {
        if ($product['id_cate'] == $categoryID) {
            array_push($productArr, $product);
        }
    }
    echo '<pre>';
    var_dump($productArr);
    echo '<pre>';
}

// bai 6
function findProductByprice($productList, $price)
{
    $productArr = array();
    foreach ($productList as $product) {
        if ($product['price'] == $price) {
            array_push($productArr, $product);
        }
    }
    echo '<pre>';
    var_dump($productArr);
    echo '<pre>';
}

// bai 11
function sortByPrice($productList)
{
    for ($i = 0; $i < count($productList); $i++) {
        for ($j = 0; $j < count($productList) - 1; $j++) {
            if ($productList[$j]['price'] > $productList[$j + 1]['price']) {
                $tmp = $productList[$j + 1]['price'];
                $productList[$j + 1]['price'] = $productList[$j]['price'];
                $productList[$j]['price'] = $tmp;
            }
        }
    }
    return $productList;
}


// bai 12
function sortByName($productList)
{
    // product lenght
    $num = count($productList);

    // loop array
    for ($i = 0; $i < $num; $i++) {
        // loop i from 0 to count(productList)
        $loop = $i;

        // save productList[i] into the variable current
        $current = $productList[$i];

        while ($loop > 0 && (strlen($productList[$loop - 1]['name']) > strlen($current['name']))) {
            // Di dời các phần tử lên 1 bậc
            $productList[$loop] = $productList[$loop - 1];
            $loop -= 1;
        }

        // assigned value into the current
        $productList[$loop] = $current;
    }

    return $productList;
}

// get category by id
function getCategoryNameById($listCategory, $categoryID)
{
    foreach ($listCategory as $category) {
        if ($category['id'] === $categoryID) {
            return $category['name'];
        }
    }
    return false;
}

// bai 13
function sortByCategoryName($listProduct, $listCategory)
{
    $amountProducts = count($listProduct);

    for ($i = 0; $i < $amountProducts; $i++) {
        $valueToInsert = $listProduct[$i];
        $holePosition = $i;
        while ($holePosition > 0 && strcmp(getCategoryNameById($listCategory, $listProduct[$holePosition - 1]['id_cate']), getCategoryNameById($listCategory, $valueToInsert['id_cate'])) > 0) {
            $listProduct[$holePosition] = $listProduct[$holePosition - 1];
            $holePosition--;
        }

        $listProduct[$holePosition] = $valueToInsert;
    }

    return $listProduct;
}

// bai 15
function minByPrice($productList)
{
    // productList length
    $length = count($productList);
    // assigned minPrice into the element 0  of the productList
    $minPrice = $productList[0]['price'];
    $productMin = array();
    for ($i = 0; $i < $length; $i++) {
        // compare minPrice for all elements in the array
        if ($productList[$i]['price'] < $minPrice) {
            // save minPrice into the element i of the array if it encounters any smaller word
            // $minPrice = $productList[$i]['price'];
            $product = $productList[$i];
        }
    }
    return $productMin;
}

// bai 16
function maxByPrice($productList)
{
    // productList length
    $length = count($productList);
    // assigned maxPrice into the element 0  of the productList
    $maxPrice = $productList[0]['price'];
    $productMax = array();
    // compare maxPrice for all elements in the array
    for ($i = 0; $i < $length; $i++) {
        if ($productList[$i]['price'] > $maxPrice) {
            // save maxPrice into the element i of the array if it encounters any bigger word
            // $maxPrice = $productList[$i]['price'];
            $productMax = $productList[$i];
        }
    }
    return $productMax;
}

// Bai 14
function mapProductByCategory($listProduct, $listCategory)
{
    foreach ($listProduct as &$product) {
        // add categoryName to array listproduct
        $product['categoryName'] = getCategoryNameById($listCategory, $product['id_cate']);
    }
    return $listProduct;
}

//Bai 21:
//basic
function calSalary($salary, $year)
{
    for ($i = 1; $i < $year; $i++) {
        // count money before $year
        $salary = ($salary * 1.1);
    }
    return $salary;
}

//recursion
function calSalaryRecursion($salary, $year)
{
    if ($year == 1) {
        return $salary;
    } else {
        // call fuction calsalary until year = 1
        return calSalary($salary * 1.1, $year - 1);
    }
}

// Bai 22
function callMonth($money, $rate)
{
    $startMoney = $money;
    // count the number of months to find
    $count = 0;
    $interest = $money;
    while($interest < $money*2){
        $count++;
        $interest = $interest + ($interest * $rate);
    }
    return $count;
}

function calMoney($money, $rate,$month)
{
    if($month == 0 ) return $money;
    return calMoney($money, $rate, $month - 1) + calMoney($money, $rate, $month - 1) * ($rate/100);

}
function calMonth1($money, $rate)
{
    $month = 0;
    while (calMoney($money, $rate, $month) < $money * 2)
    {
        $month++;
        print_r(calMoney($money,$rate,$month).'<br>');
    }
    return $month;
}

// Bai 23
function printMenu($menus, $parentID = 0)
{
    foreach ($menus as $key => $menu) {
        if ($menu['parent_id'] == $parentID) {
            // print menu to the screen
            echo str_repeat('- -', $menu['parent_id']) . $menu['title']  . '<br>';
            // call back fucntion printMenu
            printMenu($menus, $menu['id']);
        }
    }
}
