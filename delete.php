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
        <td>Book name</td>
        <td><input class="form-control"  name="bname" type="text"></td>
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
     $bookname=$_POST['bname'];
     $connection=new mysqli("localhost","root","","bookdemo");
     $sql="SELECT `id`, `title`, `author`, `price` FROM `books` WHERE `title`='$bookname'";
     $result=$connection->query($sql);

     if($result->num_rows>0)
     {
       while($row=$result->fetch_assoc())
       {
        $getid=$row['id'];
        $getauthor=$row['author'];
            $getprice=$row['price'];
        
          echo" <form method="POST"><table class=table><tr>
          <table>
          <tr>
          <td>Id</td>
         <td> <input type='text' class='form-control' value='$getid'>
           </td>
      </tr>
          <tr>
              <td>Author</td>
              <td><input type='text' class='form-control' value='$getauthor'> </td>
          </tr>
          <tr>
              <td>Price</td>
             <td> <input type='text' class='form-control' value='$getprice'>
               </td>
          </tr>
          <tr><td>
          <button class='btn btn-danger'name='delbtn'>delete</button>
          </td></tr>
          </table>";
       }
     }
     else
     {
         echo"No book has found";
     }
}
if(isset($_POST['delbtn']))
{
$newId=$_POST['id'];
$connection=new mysqli("localhost","root","","bookdemo");
$sql="DELETE FROM books WHERE id=$newId";

$result=$connection->query(sql);
if($result===TRUE)
{
    echo "deleted successfully";
}
else 
{
    echo "deleted unsuccessfully";
}
}
?>