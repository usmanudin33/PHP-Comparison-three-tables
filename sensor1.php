<?php 

include 'conf.php';


//query to get data from the table
$query = sprintf("SELECT n1.waktu, n1.suhu AS suhu_node1, n2.suhu AS suhu_node2, n3.suhu AS suhu_node3
FROM node1 n1
INNER JOIN node2 n2 ON n1.waktu = n2.waktu
INNER JOIN node3 n3 ON n1.waktu = n3.waktu LIMIT 10");

//execute query
$result = $conn->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$conn->close();

//now print the data
print json_encode($data);

?>