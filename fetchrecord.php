<?php
include("dbconnection.php");

$con = dbconnection();

$query="SELECT `product_id`, `product_name`, `product_discription`, `product_unitprice`, `product_totalprice`, `product_quantity` 
FROM `productlsit`";
$exe = mysqli_query($con, $query);

$arr=[];

while($row=$exe->fetch_assoc())
{
    $arr[]=$row;
}
// print(json_encode($arr));
print_r($arr);

 
?>