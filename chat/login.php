<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/auth_style.css">

    <title>Войти</title>
</head>
<body>
    <div class="auth login">
        <div class="container">
            <div class="auth__inner">
                <form class="form" action="#">
                    <header class="form__header">
                        <p class="form__header-p">Войти</p>
                        <a class="form__header-link" href="../index.php">На главную</a>
                    </header>
                    <div class="error-txt"></div>
                    <div class="form__inner">
                        <div class="form__field">
                            <label class="form__label">E-Mail</label>
                            <input class="form__input" type="text" name="email" placeholder="E-Mail" required>
                        </div>
                        <div class="form__field">
                            <label class="form__label">Пароль</label>
                            <input class="form__input" type="password" name="password" placeholder="Пароль" required>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="form__field">
                            <input class="form__btn" type="submit" value="Войти">
                        </div>
                    </div>
                    <div class="link">Нет аккаунта? 
                        <a href="./reg.php">Зарегистрироваться</a>
                    </div>                    
                </form>
                
            </div>
        </div>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
</body>
</html>