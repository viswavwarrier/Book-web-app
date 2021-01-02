<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1.0 initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET">
    <table class="table"><tr>
        <td>username</td>
        <td><input class="form-contol" name="uname" type= "text" ></td>
</tr>
<tr>
<td>password</td>
<td> <input class="form-control" name="pass" type="password" ></td></tr>
<tr> 
<td><button class="btn btn-success" name="btn">login</button></td>
    </tr></table>
    </form>
</body>
</html>
<?php
if(isset($_GET["btn"]))
{
    $u=$_GET["uname"];
    $p=$_GET["pass"];
echo" <table class='table'>
<tr><td>uname</td><td> $u</td></tr>

<tr><td>pass</td> <td> $p </td> </tr>
</table>";
}
?>
