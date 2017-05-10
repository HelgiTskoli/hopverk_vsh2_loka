<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--

    KAUPA MIÐA INDEX PAGE

-->
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css" />
    <meta name="author" content="Helgi Steinarr Júlíusson, Albert Elías Arason, Steinar Ari Kristmundsson" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Loka hópverkefni í VSH2">   <!-- Muna bæta við betra descriptioni  -->
    <meta name="keywords" content="HTML,CSS3,Verkefni,vsh,tskoli,PHP">
    <link rel="icon" href="../media/gloi_face.png" />
    <title>Miðar</title>
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
                <a href="../"><li>Forsíða</li></a>
                <a href="../eventInfo"><li>Um atburðinn</li></a>
                <a href="../aboutG"><li>Um Glóa Geimveru</li></a>
                <a href="./"><li>Kaupa miða</li></a>
                <a href="../aboutAB"><li>Um Arnheiði Borg</li></a>
                <a href="./cart/"><img heigth="70" width="70" src="../media/Cart-Icon.png"></a><!-- This is visible until navbar goes to the buttom -->
                <a id="cartText" href="./cart"><li>Karfa</li></a> <!-- This is hidden until the nav bar goes to the bottom -->
            </ul>
        </nav>
    </header>
    <section>
        <h1 class="nr3">
            GEIMFEST GLÓA
        </h1>
        <article>
                <h2>Miðar</h2>
                <div>
                    <h3>Venjulegur passi - bygging 1 - $19000</h3><a href="./?n1cart=1">Kaupa</a>
                    <?php 
                        if($_GET["n1cart"] == 1){
                             echo "<h5>Bætt við körfu</h5>";
                             $_SESSION["n1cart"] = 1;
                        }
                    ?>
                </div>
                <div>
                    <h3>Venjulegur passi - bygging 2 - $24000</h3><a href="./?n2cart=1">Kaupa</a>
                    <?php 
                        if($_GET["n2cart"] == 1){
                             echo "<h5>Bætt við körfu</h5>";
                             $_SESSION["n2cart"] = 1;
                        }
                    ?>
                </div>
                <div>
                    <h3>Gull passi - (Báðar) - $40000</h3><a href="./?n3cart=1">Kaupa</a>
                    <?php 
                        if($_GET["n3cart"] == 1){
                             echo "<h5>Bætt við körfu</h5>";
                             $_SESSION["n3cart"] = 1;
                        }
                    ?>
                </div>
                <div>
                    <h3>HITTA GLÓA - AUKA - $86500</h3><a href="./?n4cart=1">Kaupa</a>
                    <?php 
                        if($_GET["n4cart"] == 1){
                             echo "<h5>Bætt við körfu</h5>";
                             $_SESSION["n4cart"] = 1;
                        }
                    ?>
                </div>
                <div>
                    <h3>Prófa búning Glóa - AUKA - $56000</h3><a href="./?n5cart=1">Kaupa</a>
                    <?php 
                        if($_GET["n5cart"] == 1){
                             echo "<h5>Bætt við körfu</h5>";
                             $_SESSION["n5cart"] = 1;
                        }
                    ?>
                </div>
                <a href="./cart" style="margin-top: 10px;">Fara í Körfu</a>
        </article>
    </section>
    <footer></footer>
</body>
</html>