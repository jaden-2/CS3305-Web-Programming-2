<?php
// Question 1

// A
function  calculateTotal($quantity, $price ): float
{
    $tax = 10e-2;
    return $quantity * $price * (1 + $tax);
}

// B
function formalProduct($name): string{
    $name = ucfirst(trim($name));
    if(strlen($name) > 50){
        return substr($name, 0, 50);
    }
    return $name;
}
// C
function calculateDiscount($price, $discount): float{
    return $price * (1 - $discount/100);
}


// Question 2
// A
$products = array("Galaxy S24"=> 1200, "Pixel 10"=> 1000, "Iphone 17"=> 1300, "Xiaomi 17"=> 1250);
echo "Inventory List \n";
echo "Product Name Price($) ";
echo "\n";
foreach($products as $key=>$value){
    echo "{$key} \t $ {$value} \n";
}
echo "\n";
echo "Sorted Inventory List \n";
echo "Product Name Price \n";
$sorted = $products;
ksort($sorted);
foreach($sorted as $key=>$value){
    echo "{$key} \t $ {$value} \n";
}

// B
$prods = array("Samsung Tv"=> array("category"=> "Electronics", "price"=> 10000),
    "HTC Television"=> array("category"=> "Electronics", "price"=> 20000),
    "Hi sense         "=> array("category"=> "Electronics", "price"=> 15000),
    "Basmati Rice  "=> array("category"=> "Electronics", "price"=> 150),
    "Gaming Chair  "=> array("category"=> "Furniture", "price"=> 1000),
    );
$discount = 10;
echo "\n";
echo "Seasonal sales is on, all electronics get a discount of {$discount}% \n";
echo "Here are the updated prices for Electronics \n";
echo "Product Name \tOld Price \tDiscounted Price \tCategory \n";
foreach($prods as $key=>$value){
    $initialPrice = $value["price"];
    if($value["category"] == "Electronics"){
        $value["price"] = $value["price"] * (1-$discount/100);
    }
    echo "{$key} \t\t$ {$initialPrice}\t\t$ {$value["price"]} \t\t{$value["category"]} \n";
}

// C
$vendorAInventory = ["HTC Television", "Gaming Chair", "Basmati Rice", "Century Fan"];
$vendorBInventory = ["Gaming chair", "Hi sense television", "Basmati Rice", "Lenovo laptop"];

$mergedList = array_unique(array_merge($vendorAInventory, $vendorBInventory));
echo "List of unique items from  suppliers\n\n";
foreach($mergedList as $key=>$value){
    $key++;
    echo "{$key} \t {$value} \n";
}

// Question 3

// A
$prods = array("Samsung Tv"=> array("category"=> "Electronics", "price"=> 10000, "description"=> "THe best _ television"),
    "HTC Television"=> array("category"=> "Electronics", "price"=> 20000, "description"=> "THE BEST Htc__ television"),
    "Hi sense         "=> array("category"=> "Electronics", "price"=> 15000, "description"=> "THE BEST_ HiSen__ television"),
    "Basmati Rice  "=> array("category"=> "Electronics", "price"=> 150, "description"=> "THE BEST Basmati Rice__ television_"),
    "Gaming Chair  "=> array("category"=> "Furniture", "price"=> 1000, "description"=> "THE BEST Gaming__ television"),
);

echo "\n";
echo "Product description \n";
foreach ($prods as $key=>$value){
    $value["description"] = str_replace("_", "", strtolower(trim($value["description"])));
    $title = trim($key);
    echo "{$title}: {$value["description"]} \n";
}

// B
function parseSentence($sentence, $keyword): void
{
    echo "\n";
    echo "Summary of sentence \n ";
    echo "Character Count: ".strlen($sentence)."\n ";
    echo "Word Count: ".str_word_count($sentence)."\n ";
    echo "Keyword: ";
    if(str_contains($sentence, $keyword)){
        echo "{$keyword} exists \n";
    }else{
        echo "{$keyword} does not exists \n";
    }
}

foreach($prods as $key=>$value){
    parseSentence($value['description'], "leather");
}

// C
function parseReview($review, $keyword): void{
    $substring = substr($review, 0, 20)."...";
    $position = strpos($review, $keyword);
    echo "\n";
    echo "Preview: {$substring}\n";
    if($position !== false){
        echo "The word 'excellent' starts are position: {$position}\n";
    }
    echo $review." Thank you for your feedback! \n ";
}
parseReview("Great product! Fast delivery and excellent service.", "excellent");