<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$pageTitle}</title>
    <link rel="stylesheet" href="{$TemplateWebPath}css/main.css" type="text/css">
    <script src="/www/js/jquery-3.5.1.min.js"></script>
    <script src="/www/js/main.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Kaushan+Script&family=Montserrat+Alternates:ital,wght@0,600;1,900&family=Montserrat:wght@400;700&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div id="header" class="p-2 text-dark d-flex justify-content-md-center">
        <div class="row">
            {*иконка возле названия фирмы*}
            
            {*название фирмы*}
            <div class="col-4">
                <a href="/" class="HeaderBrand ">
                    <h1>HimMain</h1>
                </a>
            </div>
            {*иконка возле названия фирмы*}
   
            {*блок авторизации*}
            <div class="Login">
                {if ! isset($arUser)}
                    {if ! isset($hideLoginBox)}
                        <div id="loginBox" class="row">
                            <div class="col p-0">
                                <div class="menuCaption">Авторизация</div>
                                <input type="text" id="loginEmail" name="loginEmail" value="" placeholder="email"><br>
                                <input type="password" id="loginPwd" name="loginPwd" value="" placeholder="пароль"><br>
                            </div>
                            <div class="col LoginButton">
                                <input type="button" onclick="login()" value="Войти" class="btn btn-dark">
                            </div>
                        </div>
                    {/if}
                {/if}
            </div>
            {*Блок регистрации*}
        </div>
    </div>


    {include file='leftcolumn.tpl'}

    {*инициализация переменных для условия вывода слайдера*}
    {$num1=$smarty.get.action}
    {$num2=$smarty.get.controller}
    {if $num1==$num2}
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/www/images/products/Slider-1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/www/images/products/Slider-2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/www/images/products/Slider-3.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    {/if}


    <div id="centerColumn" class="main_content">
        <div class="container">