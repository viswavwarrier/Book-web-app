<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1.0 initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-4 col-md-6 col-lg-4">
<form method="POST">
    <table class="table"><tr>
<td>BOOK NAME</td>
<td> <input class="form-control" name="bname" type="text" ></td></tr>
<tr>
<td>AUTHOR</td>
<td> <input class="form-control" name="author" type="text" ></td></tr>
<tr>
<td>PRICE</td>
<td> <input class="form-control" name="price" type="number" ></td></tr>
<tr> 
<td><button class="btn btn-success" name="btn">SUBMIT</button></td>
    </tr></table>
    </form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $b=$_POST["bname"];
    $a=$_POST["author"];
    $price=$_POST["price"];
    
$connection= new mysqli("localhost","root","","bookdemo");
$sql="INSERT INTO `books`(`title`, `author`, `price`) 
VALUES('$b','$a',$price)";

$result=$connection->query($sql);

 if($result===true)
{
    echo "<script>alert('succesfully inserted')</script>";
}
else{
    echo "<script>alert('error occured ')</script>";

}
}
?>