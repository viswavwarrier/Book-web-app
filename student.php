<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
<div class="container"><div class="row">

<div class="col col-12 col-sm-4  "></div>
<div class="col col-12 col-sm-4  "></div>
    <table class="table table-borderless"><tr>
        <td> name</td>
        <td><input class="form-control"  name="name" type="text"></td>
    </tr><tr>
        <td>Roll no</td>
        <td><input class="form-control"  name="roll" type="number"></td>
    </tr><tr>
        <td>College</td>
        <td><input class="form-control"  name="college" type="text"></td>
    </tr>
    <tr>
        <td></td>
       <td><button class="btn btn-danger" name="btn">submit</button></td>
    </tr></table>
    <div class="col col-12 col-sm-4  "></div>
</form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $n=$_POST["name"];
    $r=$_POST["roll"];
    $c=$_POST["college"];
   
   $connection=new mysqli("localhost","root","","bookdemo");
   $sql="INSERT INTO `student`(`name`, `rollno`, `college`)
   VALUES('$n','$r','$c')"; 

   $result=$connection->query($sql);
   if($result===true)
   {
       echo"<script>alert('Successfully inserted')</script>";
   }
   else
   {
    echo"<script>alert('Something went wrong')</script>";
   }
   
    
   
}
?>