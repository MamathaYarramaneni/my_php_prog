<?php
 //echo 'hello,there';
 //include('lol.php');
 
 include('db_connectpro1.php');
 $sql='SELECT * FROM pro1user ORDER BY created_at'; 

 $result= mysqli_query($conn,$sql); 

 $users= mysqli_fetch_all($result, MYSQLI_ASSOC);

// print_r($users);
?>

<!DOCTYPE html>
<html>
    <head>
</head>
    <body>
        <h4>Pizzas!</h4>
        <?php include('content.php') ?>
        <div class="row">
            <?php  foreach($users as $user){ ?>
                <div class="col s6 md3">
                    <p> <?php echo ($user['id'])?></p>
                    <p> <?php echo ($user['name'])?></p>
                    <p> <?php echo ($user['age'])?></p>
                </div>
                <div>
                    <a href="#">more info</a>
                </div>
            <?php } ?>
        </div>
</body>
    
</html>