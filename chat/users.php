<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php

    include_once "config/config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);    
    }

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/pages_style.css">

    <title>Пользователи</title>
</head>
<body>
    <section class="user">
        <div class="user__inner">
            <header class="header">
                <div class="container">
                    <div class="header__inner">
                        <div class="header__profile">
                            <img class="header__img" src="config/images/<?php echo $row['img'] ?>" alt="">
                            <div class="details">
                                <span class="header__name">
                                    <?php
                                        echo $row['fname'] . " " . $row['lname'];
                                    ?>
                                </span>
                                <p class="header__status">
                                    <?php
                                        echo $row['status'];
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="header__btns">
                            <?php
                                if($row['user_type'] == 'courier'){
                                    echo '<a class="header__link" href="_courier.php">Курьер</a>';
                                }elseif($row['user_type'] == 'restaurant'){
                                    echo '<a class="header__link" href="_restaurant.php">Ресторан</a>';
                                }else{
                                    echo '<a class="header__link" href="_client.php">Клиент</a>';
                                }
                            ?>
                            <a class="header__logout" href="config/logout.php?logout_id=<?php echo $row['unique_id']?>">Выйти</a>
                        </div>  
                    </div>
                </div>
            </header>
            <section class="users">
                <div class="container">
                    <div class="users__inner">
                        <div class="search">
                            <span class="text">Выберите пользователя для начала общения</span>
                            <input type="text" placeholder="Введите имя для поиска...">
                            <button>
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="users-list">
                            
                        </div>
                                
                    </div>
                </div>
            </section>
        </div>        
    </section>    
    <script src="./js/users.js"></script>
</body>
</html>