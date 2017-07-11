<?php
require("db_connection.php");

$sql = "select timer from manage WHERE id =1";
$result = $connection->query($sql);
if ($result->num_rows > 0) 
{
  while($row = mysqli_fetch_array($result)) 
    {
     $data = $row["timer"];
     echo $data;
    }
} 
else 
{
    echo "0 results";
}
$connection->close();
?>