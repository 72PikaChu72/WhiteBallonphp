<!DOCTYPE html>
<html  >
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    function addToCart(productId) {
        $.ajax({
            url: 'add-to-cart.php',
            method: 'POST',
            data: {
                productId: productId
            },
            success: function(response) {
                alert('Товар добавлен в корзину!');
            },
            error: function() {
                alert('Ошибка при добавлении товара в корзину!');
            }
        });
    }
</script>
<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eshopdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверка соединения
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// SQL-запрос для извлечения данных из таблицы
$sql = "SELECT id, name, price, image, description FROM products";
$result = mysqli_query($conn, $sql);



mysqli_close($conn);

?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.8, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Store">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/123123123123.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Store</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jura:300,400,500,600,700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jura:300,400,500,600,700&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu2 cid-t9uDZp5FCb" once="menu" id="menu2-0">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="Store.php">
                        <img src="assets/images/123123123123.png" alt="Logo" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="Store.php">White Ballon</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-7" href="Delivery.php">
                    Доставка
                    <li class="nav-item"></a>
                    </li>
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-7" href="https://vk.com/whiteballon">
                        <span class="socicon socicon-vkontakte mbr-iconfont mbr-iconfont-btn"></a></li>
                        <li class="nav-item"></a>
                        </li>
                        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-7" href="https://instagram.com/_whiteballon_">
                            <span class="socicon socicon-instagram mbr-iconfont mbr-iconfont-btn"></a></li>
                            <li class="nav-item"></a>
                            </li>
                            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-7" href="https://t.me/Whiteballon">
                                <span class="socicon socicon-telegram mbr-iconfont mbr-iconfont-btn"></a></li>
                                <li class="nav-item"></a>
                                </li>
                    
                
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="Cart.php">
                        Корзина</a></div></ul>
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="features8 cid-t9uFNd4Pgv" xmlns="http://www.w3.org/1999/html" id="features9-1">


<?php
// Отображение данных на странице
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo '<div class="container">
        <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="image-wrapper">
                            <img src="assets/images/'.$row["image"].'" alt="Tovar">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md">
                                    <h6 class="card-title mbr-fonts-style display-5">
                                        <strong>'.$row["name"].'</strong>
                                    </h6>
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        '.$row["description"].'
                                    </p>
                                </div>
                                <div class="col-md-auto">
                                    <p class="price mbr-fonts-style display-2">'.$row["price"].' ₽</p>
                                    <div class="mbr-section-btn">
                                        <button class="btn btn-primary display-4" onclick="addToCart('.$row['id'].')">
                                            В корзину
                                        </button>
                                    </div>
                                </div>
                                
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </p>'
    ;

  }
} else {
  echo "0 results";
}
?>
</section>
  
</body>
</html>