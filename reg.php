<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET"><table class="table"><tr>
        <td>name</td>
        <td><input name="name" class="form-control" type="text"></td>
    </tr><tr>
        <td>roll number</td>
        <td><input name="roll" class="form-control" type="text"></td>
    </tr><tr>
        <td>admission number</td>
        <td><input name="adm" class="form-control" type="text"></td>
    </tr><tr>
        <td>email id</td>
        <td><input name="email" class="form-control" type="text"></td>
    </tr><tr>
        <td>college</td>
        <td><input name="college" class="form-control" type="text"></td>
    </tr><tr>
        <td>parent name</td>
        <td><input name="pname" class="form-control" type="text"></td>
    </tr><tr>
        <td>parent mob</td>
        <td><input name="pmob" class="form-control" type="text"></td>
    </tr><tr>
        <td>email id pr</td>
        <td><input name="emailpr" class="form-control" type="text"></td>
    </tr><tr>
        <td>username</td>
        <td><input name="uname" class="form-control" type="text"></td>
    </tr><tr>
        <td>password</td>
        <td><input name="pass" class="form-control" type="text"></td>
    </tr><tr>
        <td>confirm password</td>
        <td><input name="cpass" class="form-control" type="text"></td>
    </tr><tr>
        <td></td>
        <td><button name="btn" class="btn btn-info">Register</button></td>
    </tr></table></form>
</body>
</html>
<?php
if(isset($_GET["btn"]))
{
    $n=$_GET["name"];
    $r=$_GET["roll"];
    $a=$_GET["adm"];
    $e=$_GET["email"];
        $c=$_GET["college"];
    $pn=$_GET["pname"];
    $pm=$_GET["pmob"];
    $epr=$_GET["emailpr"];
    $u=$_GET["uname"];
    $p=$_GET["pass"];
    $cp=$_GET["cpass"];


    $connection= new mysqli("localhost","root","","bookdemo");
$sql="INSERT INTO `student`( `admno`, `name`, `rollno`, `email`, `college`, `pname`, `pmob`, `emailparent`, `uname`, `pass`, `cpass`)
 VALUES  ('$n',$r,$a,$e,$c,$pn,$epr,$u,$p,$cp);


    echo $n;
    echo"<br>";
    echo $r;
    echo"<br>";
    echo $a;
    echo"<br>";
    echo $e;
    echo"<br>";
    echo $c;
    echo"<br>";
    echo $pn;
    echo"<br>";
    echo $epr;
    echo"<br>";
    echo $u;
    echo"<br>";
    echo $p;
    echo"<br>";
    echo $cp;

}
?>