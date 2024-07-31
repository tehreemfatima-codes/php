<?php
include("config.php");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$sql = "INSERT INTO `mytable`( `name`, `email`) VALUES ('$name','$email')";
if($conn->query($sql)===TRUE){
    echo"new record created";
}else{
    echo"Error".$sql."<br>".$conn->error;
}}
$conn->close();
?>
<form method="post">
    <input type="text" placeholder="name" name="name"><br><br>
    <input type="text" placeholder="email" name="email"><br><br>
    <input type="submit"  name="submit"><br><br>
</form>