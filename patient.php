<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET">
    <table class="table"><tr>
        <td>Patient name</td>
        <td><input class="form-control"  name="pname" type="text"></td>
    </tr><tr>
        <td>Age</td>
        <td><input class="form-control"  name="age" type="text"></td>
    </tr><tr>
        <td>Date of Birth</td>
        <td><input class="form-control"  name="dob" type="date"></td>
    </tr><tr>
        <td>Email id</td>
        <td><input class="form-control"  name="eid" type="text"></td>
    </tr><tr>
        <td>Pincode</td>
        <td><input class="form-control"  name="pcode" type="number"></td>
    </tr><tr>
        <td>Username</td>
        <td><input class="form-control"  name="uname" type="text"></td>
    </tr><tr>
        <td>Password</td>
        <td><input class="form-control"  name="pass" type="password"></td>
    </tr>
    <tr>
        <td>Confirm password</td>
        <td><input class="form-control"  name="cpass" type="password"></td>
    </tr>
    <tr>
        <td></td>
       <td><button class="btn btn-danger" name="btn">Register</button></td>
    </tr></table>
</form>
</body>
</html>
<?php
if(isset($_GET["btn"]))
{
    $pn=$_GET["pname"];
    $a=$_GET["age"];
    $d=$_GET["dob"];
    $e=$_GET["eid"];
    $pc=$_GET["pcode"];
    $u=$_GET["uname"];
    $p=$_GET["pass"];
    $cp=$_GET["cpass"];
   
    
    echo"<table class='table'><tr>
        <td>pname</td>
        <td>$pn</td>
    </tr><tr>
        <td>age</td>
        <td>$a</td>
    </tr><tr>
        <td>dob</td>
        <td>$d</td>
    </tr><tr>
        <td>eid</td>
        <td>$e</td>
    </tr><tr>
        <td>pcode</td>
        <td>$pc</td>
    </tr><tr>
        <td>uname</td>
        <td>$u</td>
    </tr><tr>
        <td>pass</td>
        <td>$p</td>
    </tr><tr>
        <td>cpass</td>
        <td>$cp</td>
    </tr></table>";
}
?>
