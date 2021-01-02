<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST"><table class="table"><tr>
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
if(isset($_POST["btn"]))
{
    $n=$_POST["name"];
    $r=$_POST["roll"];
    $a=$_POST["adm"];
    $e=$_POST["email"];
    $c=$_POST["college"];
    $pn=$_POST["pname"];
    $pm=$_POST["pmob"];
    $epr=$_POST["emailpr"];
    $u=$_POST["uname"];
    $p=$_POST["pass"];
    $cp=$_POST["cpass"];

   

}
?>
