<?php
include("dbconnection.php");

$con = dbconnection();


$updateQuery = 'UPDATE
`productlsit`
SET
`product_name` = "masum",
`product_discription` = "smething",
`product_unitprice` = "10",
`product_totalprice` = "100",
`product_quantity` = "1"
WHERE
`product_id` = 3';


$exe = mysqli_query($con, $updateQuery);

if ($exe) {
  echo "Update Successfully";
}else {
  echo "not updated";
}

 
?>