<?php


$conn = mysqli_connect("localhost", "root", "", "test");

// Check connection
if($conn === false){

echo "connmection not possible";

}



if(isset($_POST['submit'])){

$passnum=  $_REQUEST['num'];
$fname = $_REQUEST['fname'];
$sname =  $_REQUEST['sname'];
$dob= $_REQUEST['dob'];
$nation= $_REQUEST['nation'];
$address = $_REQUEST['address'];
$gender = $_REQUEST['gender'];
$pic = $_REQUEST['photo'];

$message = " ";

//performing insertion to database..

$sql = "INSERT INTO passport  VALUES ('$passnum', '$fname','$sname','$dob','$nation','$address','$gender','$pic')";

if(mysqli_query($conn, $sql)){

echo"<h3>data succesfully inserted</h3> ";

echo'<a href="php4.php" class="button" title="goback">';


} else{

echo "<h4>ERROR: Hush! Sorry $sql. </h4>" 
. mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

}



?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PassPort Portal</title>
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">


<style type="text/css">

body{
background-color: black;
}

.container{

background-color: pink;
border: green;
border-radius: 10px;
}

.frame
{

background-color: white;
border-radius: 10px;
}

header{
text-align: center;

}
table{

border:  1px  black;
border-radius: 10px;
margin-left: 400px;
margin-top: 20px;
}

table, tr{

border: 1px black;
}

table, tr, td{

border: 1px solid black;
padding: 10px;
}
.butt{

margin-left: 450px;
padding: 10px;
}

</style>
</head>
<body>



<div class="container">
<div class="frame">

<form action="" method="post">

<header><h1>PASSPORT FORM</h1></header>
<hr>
<table>

<tr>
<td>Enter passport num:</td>
<td><input type="number" name="num" required></td>

</tr>

<tr>
<td>Enter first name:</td>
<td><input type="text" name="fname" required></td>

</tr>

<tr>
<td>Enter second name:</td>
<td><input type="text" name="sname" required></td>

</tr>

<tr>
<td>Enter date of birth:</td>
<td><input type="date" name="dob" required></td>

</tr>

<tr>
<td>Enter Nationality:</td>
<td><input type="text" name="nation" required></td>

</tr>

<tr>
<td>Enter address:</td>
<td><textarea name="address" ></textarea></td>

</tr>
<tr>
<td><label for="gender">Enter gender here:</label></td>
<td>Male: <input type="radio" name="gender" value="Male"> Female:<input type="radio" name="gender" value="female"> Other:<input type="radio" name="gender" value="other"></td>

</tr>

<tr>
<td>Upload Picture:</td>
<td><input type="file" name="photo"></td>

</tr>

<tr>
<th  colspan="2"><button class="btn btn-primary"><input type="submit" name="submit" value = "ADD"></a></button>






</tr>



</table>



</form>



<div class="butt">
<a href="delete.php"  role="button" class="btn btn-danger">Delete</a>
<a href="update.php"  role="button" class="btn btn-info">Update</a>
</div>
</div>
<hr>
<hr>
</div>

</body>
</html>