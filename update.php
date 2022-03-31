<?php 
include("connexion.php");
if(isset($_POST["submit"])){

    $query = "UPDATE liste1 set date ='$_POST[date]',salaire = '$_POST[salaire]' WHERE username = '$_POST[username]'" ;
    mysqli_query($con,$query);
    echo "Recorder Updated=".mysqli_affected_rows($con);
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crud.css">

    <title>Update</title>
</head>
<body>
    <h1>La liste des employés est: </h1>
    <form action="update.php" method="POST" class="container">
    <label>usernme</label> </br>    
    <input type="text" name="username" placeholder="ton nom "></br>
    <label>date de naissance </label> </br>
    <input type="text" name="date" placeholder="jj/mm/yyyy"></br>
    <label> Salary: </label></br>
    <input type="number" name="salaire" placeholder="1200"></br>
    <input type="submit" name="submit" value="update" class="sub"></br>
<a href="insert.php" >Insert</a>
<a href="select.php" >Select</a>
<a href="delete.php" >Delete</a>
<a href="update.php" >Update</a>

</form>
</body>
</html>