<?php
include("dbconnection.php");

$con = dbconnection();

$delQuery = '
DELETE
FROM
    `productlsit`
WHERE
`product_id` = 3
';

$exe = mysqli_query($con, $delQuery);

if ($exe) {
  echo "Deletet Success";
}else {
  echo "Failed to delete";
}

 
?>