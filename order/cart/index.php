<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--

    KAUPA MIÐA INDEX PAGE

-->
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../../css/style.css" />
    <meta name="author" content="Helgi Steinarr Júlíusson, Albert Elías Arason, Steinar Ari Kristmundsson" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Loka hópverkefni í VSH2">   <!-- Muna bæta við betra descriptioni  -->
    <meta name="keywords" content="HTML,CSS3,Verkefni,vsh,tskoli,PHP">
    <link rel="icon" href="../../media/gloi_face.png" />
    <title>Karfa</title>
    <style>
        article{
            animation: fade2 1s forwards;
        }
        section h1.nr3 {
            animation: fade2 5s forwards;
            margin-top: 65px;
        }
    </style>
</head>
<body>
    <header>
        <input type="checkbox" id="toggle" />
        <label for="toggle">Menu</label>
        <nav>
            <ul>
                <a href="../../"><li>Forsíða</li></a>
                <a href="../../eventInfo"><li>Um atburðinn</li></a>
                <a href="../../aboutG"><li>Um Glóa Geimveru</li></a>
                <a href="../../order"><li>Kaupa miða</li></a>
                <a href="../../aboutAB"><li>Um Arnheiði Borg</li></a>             
            </ul>
        </nav>
    </header>
    <section>
        <h1 class="nr3">
            GEIMFEST GLÓA
        </h1>
        <article>
            <h2>Karfa</h2>
            <?php
                $sum = 0;
                if($_GET["del1"] == 1){
                    unset($_SESSION["n1cart"]);
                }if($_GET["del2"] == 1){
                    unset($_SESSION["n2cart"]);
                }if($_GET["del3"] == 1){
                    unset($_SESSION["n3cart"]);
                }if($_GET["del4"] == 1){
                    unset($_SESSION["n4cart"]);
                }if($_GET["del5"] == 1){
                    unset($_SESSION["n5cart"]);
                }

                if(isset($_SESSION["n1cart"])){
                    echo"<div><h3>Venjulegur passi - bygging 1 - $19000 </h3><a href='./?del1=1'>Eyða</a></div>";
                    $sum = $sum + 19000;
                }if(isset($_SESSION["n2cart"])){
                    echo"<div><h3>Venjulegur passi - bygging 2 - $24000</h3><a href='./?del2=1'>Eyða</a></div>";
                    $sum = $sum + 24000;
                }if(isset($_SESSION["n3cart"])){
                    echo"<div><h3>Gull passi - (Báðar) - $40000</h3><a href='./?del3=1'>Eyða</a></div>";
                    $sum = $sum + 40000;
                }if(isset($_SESSION["n4cart"])){
                    echo"<div><h3>HITTA GLÓA - AUKA - $86500</h3><a href='./?del4=1'>Eyða</a></div>";
                    $sum = $sum + 86500;
                }if(isset($_SESSION["n5cart"])){
                    echo"<div><h3>Prófa búning Glóa - AUKA - $56000</h3><a href='./?del5=1'>Eyða</a></div>";
                    $sum = $sum + 56000;
                }
                if($sum == 0){
                    echo"<h2 style='font-size: 15px;'><i>Karfa tóm</i></h2><a href='../'>Til baka</a>";
                    unset($_SESSION["sum"]); // Just in case the user had something but deleted and then tries to access finishOrder.php somehow.
                }else{
                    echo"<h2>samtals:  $" . $sum . "</h2><a href='../'>Til baka</a>&nbsp&nbsp&nbsp;<a href='./finishOrder.php'>Ganga frá</a>";
                    $_SESSION["sum"] = $sum;  // Adds the sum to a session cookie to be used in finishOrder.php
                }
            ?>    
        </article>
    </section>
    <footer></footer>
</body>
</html>