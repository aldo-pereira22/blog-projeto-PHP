<?php
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG EM PHP</title>

    <!-- Estilo do projeto -->
    <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="index.php" id="logo">       
            <img src="img/logo.svg" alt="Blog PHP">        
        </a>

        <nav>
            <ul id="navbar">

                <li  > <a href="index.php" class="nav-link">           HOME         </a>  </li>
                <li> <a href="" class="nav-link">                    CATEGORIAS   </a>  </li>
                <li> <a href="" class="nav-link">                    SOBRE        </a>  </li>
                <li> <a href="contato.php" class="nav-link">         CONTATO      </a>  </li>


            </ul>
        </nav>
    </header>
