<?php 


if(isset($_POST['num'])){


$conn = mysqli_connect("localhost","root","","test");

if($conn === false){

echo "cannot conect";

}



$num = $_POST['num'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$dob = $_POST['dob'];
$nation = $_POST['nation'];


$address = $_POST['address'];

$gender = $_POST['gender'];
$pic = $_POST['photo'];

$sql = "UPDATE passport SET  passnum='$num', fname='$fname', sname='$sname', dob='$dob', nation='$nation', address='$address', gender='$gender',  picture='$pic' WHERE passnum='$num'";


if ( $conn->query($sql)== TRUE  &&  $conn->affected_rows > 0 ) {

echo " <h4> Succesfully updated!</h4>";

}else{

echo  "<h2>Error:</h2>" . $sql  .  "<br>"  . "<h4>NO match found for passport number-" .  $num  .  $conn->error;

}


}

?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>update user</title>
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<style type="text/css">

.container{

background-color: greenyellow;
border: 2px solid green;
border-radius: 20px;
text-align: center;
}

table{

border:  2px solid black;
border-radius: 19px;
margin-left: 400px;
margin-top: 50px;
}

table, tr{

border: 1px solid black;
}

table, tr, td{

border: 2px solid black;
padding: 5px;
}

</style>
</head>
<body>

<div class="container">

<h1>UPdate Form.</h1>

<form action=""  method="post">

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
<td><input type="text" name="address"required ></td>

</tr>

<tr>
<td><label for="gender">Enter gender here:</label></td>
<td>Male: <input type="radio" name="gender" value="Male"> Female:<input type="radio" name="gender" value="female"> Other:<input type="radio" name="gender" value="other"></td>

</tr>


<tr>
<td>Upload Picture:</td>
<td><input type="file" name="photo" required></td>

</tr>

<tr>
<th  colspan="2"><button class="btn btn-primary"><input type="submit" name="submit" value = "Update"></a></button>

<a href="php4.php" role="button" class="btn btn-warning">GO back</a>

</tr>

</table>

<br>



</form>

</div>



</body>
</html><?php 


if(isset($_POST['num'])){


$conn = mysqli_connect("localhost","root","","test");

if($conn === false){

echo "cannot conect";

}



$num = $_POST['num'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$dob = $_POST['dob'];
$nation = $_POST['nation'];


$address = $_POST['address'];

$gender = $_POST['gender'];
$pic = $_POST['photo'];

$sql = "UPDATE passport SET  passnum='$num', fname='$fname', sname='$sname', dob='$dob', nation='$nation', address='$address', gender='$gender',  picture='$pic' WHERE passnum='$num'";


if ( $conn->query($sql)== TRUE  &&  $conn->affected_rows > 0 ) {

echo " <h4> Succesfully updated!</h4>";

}else{

echo  "<h2>Error:</h2>" . $sql  .  "<br>"  . "<h4>NO match found for passport number-" .  $num  .  $conn->error;

}


}

?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>update user</title>
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<style type="text/css">

.container{

background-color: greenyellow;
border: 2px solid green;
border-radius: 20px;
text-align: center;
}

table{

border:  2px solid black;
border-radius: 19px;
margin-left: 400px;
margin-top: 50px;
}

table, tr{

border: 1px solid black;
}

table, tr, td{

border: 2px solid black;
padding: 5px;
}

</style>
</head>
<body>

<div class="container">

<h1>UPdate Form.</h1>

<form action=""  method="post">

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
<td><input type="text" name="address"required ></td>

</tr>

<tr>
<td><label for="gender">Enter gender here:</label></td>
<td>Male: <input type="radio" name="gender" value="Male"> Female:<input type="radio" name="gender" value="female"> Other:<input type="radio" name="gender" value="other"></td>

</tr>


<tr>
<td>Upload Picture:</td>
<td><input type="file" name="photo" required></td>

</tr>

<tr>
<th  colspan="2"><button class="btn btn-primary"><input type="submit" name="submit" value = "Update"></a></button>

<a href="php4.php" role="button" class="btn btn-warning">GO back</a>

</tr>

</table>

<br>



</form>

</div>



</body>
</html>