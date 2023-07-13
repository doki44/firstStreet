<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php
    include_once "config/config.php";
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
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
    <title>Онлайн-чат</title>
</head>
<body>
    <section class="chat">
        <div class="chat__inner">
            <header class="header">
                <div class="container">
                    <div class="header__inner"> 
                        <div class="header__profile">
                            <a class="back-icon" href="users.php" >
                                <i class="fas fa-arrow-left"></i>
                            </a>
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
                    </div>
                </div>
            </header>

            <div class="chat-box">

            </div>

            <form class="typing-area" action="#" autocomplete="off">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input class="input-field" type="text" name="message" placeholder="Сообщение...">
                <button>
                    <i class="fab fa-telegram-plane"></i>
                </button>
            </form>

        </div>
    </section>
    <script src="js/chat.js"></script>
</body>
</html>