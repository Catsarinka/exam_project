<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/script_index.js"></script>
    <title>@yield('title')</title>
</head>

<body>


    <header>

        
        <a class="site-branding" href="/">
            <img src="images/logo.png" width="400px" />
        </a>


        <div id='cssmenu' class="align-center">
            <ul>
                <li class="active"><a href='/'><span>Главная</span></a></li>
                <li class="active"><a href='reviews'><span>Отзывы</span></a></li>
            </ul>
        </div>
    </header>


  @yield('main_content')

    <footer>
        <p>
            © Catsarinka
        </p>
        <a href="https://www.instagram.com/catsarinka_art/" target="_blank">
            <img class="contact" src="images/Instagram.png" alt="Instagram">
        </a>
        <a href="https://www.behance.net/Catsarinka" target="_blank">
            <img class="contact" src="images/Behance.png" alt="Behance">
        </a>

    </footer>

    <script src="js/script.js"></script>

  
</body>

</html>