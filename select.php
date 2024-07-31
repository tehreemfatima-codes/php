<?php
include("config.php");
$sql="SELECT * FROM mytable";
$result=$conn->query($sql);
if($result->num_rows> 0){
    while($row=$result->fetch_assoc()){
    echo"Name:".$row["name"]."-Email:".$row["email"]. "<br>";
}
}
else{
    echo"failed";
}
$conn->close();
?>