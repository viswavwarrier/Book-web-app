<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container"><div class="row">

<div class="col col-12 col-sm-4  "></div>
<div class="col col-12 col-sm-4  "></div>
<form method="POST">
    <table class="table table-borderless"><tr>
        <td>Roll Number</td>
        <td><input class="form-control"  name="roll" type="number"></td>
    </tr><tr>
        <td></td>
       <td><button class="btn btn-success" name="btn">SEARCH</button></td>
    </tr></table>
    <div class="col col-12 col-sm-4  "></div>
</form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
     $rollno=$_POST['roll'];
     $connection=new mysqli("localhost","root","","bookdemo");
     $sql="SELECT `id`, `name`, `rollno`, `college` FROM `student` WHERE rollno=$rollno";
     $result=$connection->query($sql);

     if($result->num_rows>0)
     {
       while($row=$result->fetch_assoc())
       {
            $getroll=$row['rollno'];
    
           $getname=$row['name'];

           $getcollege=$row['college'];
          echo" <table><tr>
              <td>Roll Number</td>
              <td> $getroll</td>
          </tr>
          <tr>
              <td>name</td>
              <td> $getname</td>
          </tr>
          <tr>
          <td>college</td>
          <td> $getcollege</td>
      </tr></table>";
       }
     }
     else
     {
         echo"No student has found";
     }
}
?>