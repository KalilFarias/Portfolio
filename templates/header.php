<?php
    include_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - Dev Kalil Farias</title>
    <!-- Estilos do projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL?>"  id="logo" >
            <img src="<?= $BASE_URL?>/img/logo.svg" alt="Blog Codar">
        </a>
        <nav>
            <ul id="navbar"> 
                <li><a href="<?= $BASE_URL?>" class ="nav-link">Home</a></li>
                <li><a href="<?= $BASE_URL?>sobre.php" class ="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL?>contato.php" class ="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>
