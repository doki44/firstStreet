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

    <title>Регистрация</title>
</head>
<body>
    <section class="auth signup">
        <div class="container">
            <div class="auth__inner">
                <form class="form" action="#" enctype="multipart/form-data">
                    <header class="form__header">
                        <p class="form__header-p">Регистрация</p>
                        <a class="form__header-link" href="../index.php">На главную</a>
                    </header>
                    <div class="error-txt"></div>
                    <div class="form__inner">
                        <div class="form__details">
                            <div class="form__name">
                                <label class="form__label">Имя</label>
                                <input class="form__input" type="text" name="fname" placeholder="Имя" required>
                            </div>
                            <div class="form__name">
                                <label class="form__label">Фамилия</label>
                                <input class="form__input" type="text" name="lname" placeholder="Фамилия" required>
                            </div>
                        </div>
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
                            <select class="form__select" name="user_type">
                                <option class="form__option" value="courier">Курьер</option>
                                <option class="form__option" value="client">Клиент</option>
                                <option class="form__option" value="restaurant">Ресторан</option>
                            </select>
                        </div>
                        <div class="form__image">
                            <label class="form__label">Выберите изображение</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="form__field">
                            <input class="form__btn" type="submit" value="Зарегистрироваться">
                        </div>
                    </div>
                    <div class="link">Есть аккаунт? 
                        <a href="./login.php">Войти</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="./js/pass-show-hide.js"></script>
    <script src="./js/signup.js"></script>
</body>
</html>