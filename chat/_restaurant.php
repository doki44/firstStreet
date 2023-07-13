<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php
    include_once "config/config.php";
?>

<?php
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="top">
        <div class="container">
            <div class="top__inner">
                <p>Добро пожаловать, 
                    <span>
                        <?php echo $row['fname'] . " " . $row['lname']; ?>
                    </span>
                </p>
            </div>
        </div>
    </section>
</body>
</html>