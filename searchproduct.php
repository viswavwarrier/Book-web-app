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
        <td>Product Code</td>
        <td><input class="form-control"  name="pcode" type="number"></td>
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
     $productcode=$_POST['pcode'];
     $connection=new mysqli("localhost","root","","bookdemo");
     $sql="SELECT `id`, `productcode`, `productname`, `description`, `mfgdate`, `expdate`, `mfgname`, `mfgadress`, `email`, `phonenumber` FROM `product` WHERE `productcode`='$productcode'";
     $result=$connection->query($sql);

     if($result->num_rows>0)
     {
       while($row=$result->fetch_assoc())
       {
            $getproductname=$row['productname'];
    
           $getdescription=$row['description'];
           $getmfgdate=$row['mfgdate'];
           $expdate=$row['expdate'];
           $getmfgname=$row['mfgname'];
           $getmfgadress=$row['mfgadress'];
           $getemail=$row['email'];
           $getphone=$row['phonenumber'];
          echo" <table><tr>
              <td>product name</td>
              <td> $getproductname</td>
          </tr>
          <tr>
              <td>description</td>
              <td> $getdescription</td>
          </tr>
          <tr>
              <td>mfgdate</td>
              <td> $getmfgdate</td>
          </tr>
          <tr>
              <td>mfgname</td>
              <td> $getmfgname</td>
          </tr>
          <tr>
              <td>mfgadress</td>
              <td> $getmfgadress</td>
          </tr>
          <tr>
              <td>email</td>
              <td> $getemail</td>
          </tr>
          <tr>
              <td>phone number</td>
              <td> $getphone</td>
          </tr>
          </table>";
       }
     }
     else
     {
         echo"No book has found";
     }
}
?>