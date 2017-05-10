<?php session_start(); 
if(!isset($_SESSION["sum"]))
{
    header("Location: ../cart/index.php");  // Redirects the user back to the cart if he tries to access this page without having anything in his cart
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--

    FINISH ORDER PHP

-->
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../../css/style.css" />
    <meta name="author" content="Helgi Steinarr Júlíusson, Albert Elías Arason, Steinar Ari Kristmundsson" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Borgunar síða">   <!-- Muna bæta við betra descriptioni  -->
    <meta name="keywords" content="HTML,CSS3,Verkefni,vsh,tskoli,PHP">
    <link rel="icon" href="../../media/gloi_face.png" />
    <title>Borga</title>
    <script type="text/javascript">
        window.onload
        function validate() {
            if (document.getElementById('agree').checked) {
                document.getElementById('payButton').style.display = "inline-block";
            } else {
                document.getElementById('payButton').style.display = "none";
            }
        }
    </script>
    <style>
        article{
            animation: fade2 1s forwards;
        }
        section h1.nr3 {
            animation: fade2 5s forwards;
            margin-top: 65px;
        }
        section a{
            padding-left: 0px;
            padding-right: 0px;
            color: white;
            text-shadow: 0px 0px white;
            font-family: Arial Verdana;
            font-size: 20px;
            background-color: rgba(0,0,0,0);
        }
    </style>
</head>
<body onload="validate()">
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
            <h2>Borga</h2>
            <?php
                echo"<h2>samtals:  $" . $_SESSION["sum"] . "</h2>";
            ?>    
            <form action="complete.php" method="post">
                <input type="email" name="email" placeholder="Email@email.com" required><br>
                <input class="names" type="text" name="Fname" placeholder="Fyrsta Nafn" required>
                <input class="names" type="text" name="Mname" placeholder="Mið Nafn">
                <input class="names" type="text" name="Lname" placeholder="Síðasta Nafn" required><br>
                <input class="cn" type="number" name="card" placeholder="Kortanúmer (ex. 1234 5678 9876 5432)" max="9999999999999999" min="1000000000000000" required><br>
                <input class="date" type="month" name="date" placeholder="Dagsetning" required><br>
                <input type="number" name="cvn" placeholder="CVN (ex. 123)" min="100" max="999" required><br>
                <input id="agree" type="checkbox" name="box" value="box1" onclick="validate()">Ég samþykki alla <a href="skilmálar.html"  target="_blank"><u>skilmála<u></a><br>
                <input id="payButton" type="submit" name="submit" value="Borga" onclick="validate()">
            </form>
        </article>
    </section>
    <footer></footer>
</body>
</html>