<?php

     include('db_connectpro1.php');
    // if( isset($_POST['submit'])){
    //     echo ($_POST['name']);
    //     echo htmlspecialchars($_POST['pwd']);
    //     echo htmlspecialchars($_POST['age']);
    // }
    if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);
    
    $sql="INSERT INTO pro1user(name,pwd,age) values('$name','$pwd',$age)";
    if(mysqli_query($conn,$sql)){
        header('Location: index.php');
    }else{
        echo 'query error';
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
</head>
    <body>
        <form action="pro1.php" method="POST">
        <label>name:</label>
        <input type="text" name="name"/>
        <label>password:</label>
        <input type="password" name="pwd"/>
        <label>age:</label>
        <input type="number" name="age"/>
        <input type="submit" name="submit" value="submit"/>
    </form>
</body>
    
</html>