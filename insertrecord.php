<?php
include("dbconnection.php");

$con = dbconnection();

function validation($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = validation($_POST['product_name']);
    $product_discription = validation($_POST['product_discription']);
    $product_unitprice = validation($_POST['product_unitprice']);
    $product_totalprice = validation($_POST['product_totalprice']);
    $product_quantity = validation($_POST['product_quantity']);

 
$insert = "INSERT INTO productlsit(`product_name`, `product_discription`, `product_unitprice`, `product_totalprice`, `product_quantity`) VALUES ($product_name,$product_discription,$product_unitprice,$product_totalprice,$product_quantity)";

$result = mysqli_query($con, $insert);

if ($result !== false) {
    echo "Data inserted Successfully";
}else {
    echo "Not Inserted";
}

}



?>