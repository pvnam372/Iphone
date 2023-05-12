<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
</head>
<body>
<?php
    include("config.php");
?>
    <div class="app">
        <div class="app__container">
            <?php
                include("header.php");
            ?>
            <div class="grid">
                <div class="category-container">
                    <div class="row">
                        <ol class="breadcrumb breadcrumb-margin">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">iPhone 14 Pro Max</li>
                        </ol>
                    </div>
                </div>
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <?php
                            include("filter.php");
                        ?>
                    </div>
                    <div class="grid__column-10">
                        <?php
                            include("sortbar.php");
                        ?>
                        <?php
                            include("danhmuc.php");
                        ?>
                    </div>
                </div>
            </div>
            <?php
                include("footer.php");
            ?>
        </div>
        <?php
        if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        }else{
            $tam = '';
        }
        if($tam=='login'){
            include("login.php");
        }elseif($tam=='register'){
            
            include("register.php");
        }
        ?>
    </div>
    <script>
        const btn = document.getElementsByClassName('auth-form__controls-back')[0];
        btn.addEventListener('click', () => {
        const modal = document.getElementsByClassName('modal')[0];
        modal.style.display = 'none';
        });
  </script>
</body>
</html>