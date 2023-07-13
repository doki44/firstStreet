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
    <title>Курьер</title>

    <link rel="stylesheet" href="css/pages_style.css">
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
                <a href="config/logout.php?logout_id=<?php echo $row['unique_id']?>" class="logout">Выйти</a>
            </div>
        </div>
    </section>

    <div class="map__info">
        <div class="container">
            <h1 class="map__info__title">Карта</h1>

            <div class="info" id="info">
                <div class="info__text">
                    <input class="info__input" type="number" name="fuel" id="fuel" value="10" oninput="recalc()">
                    <p class="info__input-descr">литр/100км</p>
                    <input class="info__input" type="number" name="price" id="price" value="0" oninput="recalc()">
                    <p class="info__input-descr">руб/литр</p>
                </div>
                <div class="info__descr" id="infotext"></div>
                <div class="info__descr" id="infotextprice"></div>
            </div>
            
        </div>
        <div class="map" id="map"></div>
    </div>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=b58f0b79-8eff-4919-be7a-ddabd9ea2ef9&lang=ru_RU"></script>
    <script src="js/map.js"></script>
</body>
</html>