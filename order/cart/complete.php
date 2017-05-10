<?php session_start(); 
if(!$_POST)
{
    header("Location: ../cart/index.php");  // If somebody tries to access this site without using the finishOrder form
}
$email = $_POST["email"];
$Fname = $_POST["Fname"];
if(isset($_POST["Mname"])){
    $Mname = $_POST["Mname"];
}
$Lname = $_POST["Lname"];
$card = $_POST["card"];
$expiry  = $_POST["date"];
$cvn = $_POST["cvn"];

if(isset($_POST["Mname"])){
    $fullName = $Fname . " " . $Mname . " " . $Lname;
}else{
    $fullName = $Fname . " " . $Lname;
}

$timeNow = gmdate('d-m-Y - H:i:s');

$p1 = null;
$p2 = null;
$p3 = null;
$p4 = null;
$p5 = null;

$fi = new FilesystemIterator("./receipts", FilesystemIterator::SKIP_DOTS);
$receiptCount = iterator_count($fi);
$thisReceiptNr = $receiptCount + 1;
$receiptInfo = "######################################\nNafn: " . $fullName . "\nEmail: " . $email . "\nKorta nr: " . $card . "\nKorta utrenna: " . $expiry . "\nCVN: " . $cvn . "\nTimi kaupa: " . $timeNow . "\n######################################\n";
if(isset($_SESSION["n1cart"])){
    $p1 = ">Venjulegur passi - bygging 1 - $19000\n";
    $sum = $sum + 19000;
}if(isset($_SESSION["n2cart"])){
    $p2 = ">Venjulegur passi - bygging 2 - $24000\n";
    $sum = $sum + 24000;
}if(isset($_SESSION["n3cart"])){
    $p3 = ">Gull passi - (badar) - $40000\n";
    $sum = $sum + 40000;
}if(isset($_SESSION["n4cart"])){
    $p4 = ">HITTA GLOA - AUKA - $86500\n";
    $sum = $sum + 86500;
}if(isset($_SESSION["n5cart"])){
    $p5 = ">Profa buning Gloa - AUKA - $56000";
    $sum = $sum + 56000;
};
$receiptInfo = $receiptInfo . $p1 . $p2 . $p3 . $p4 . $p5 . "\n------------------------------------\nSamtals: $" . $sum . "\n######################################";;
$openFile = fopen("./receipts/receipt_" . $thisReceiptNr . ".txt", "w");
fwrite($openFile, $receiptInfo);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../../css/style.css" />
    <meta name="author" content="Helgi Steinarr Júlíusson, Albert Elías Arason, Steinar Ari Kristmundsson" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">   <!-- Muna bæta við betra descriptioni  -->
    <meta name="keywords" content="HTML,CSS3,Verkefni,vsh,tskoli,PHP">
    <link rel="icon" href="../../media/gloi_face.png" />
    <title>Komið</title>
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
            <h2 style="color: green;">Tókst!</h2>
            <h2>þú hefur borgað: <?php echo"<i style='color: green;'>$" . $_SESSION["sum"] . "</i>.";?><br>Miðarnir hafa verið sentir á<?php echo" $email";?></h2>
            <a href="./wipeSessions.php">Forsíða</a><?php echo"&nbsp&nbsp&nbsp<a href='./receipts/receipt_" . $thisReceiptNr . ".txt' target='_blank'>";?>Fá kvittun í .txt formi</a>(opnar nýjann glugga)   
        </article>
    </section>
    <footer></footer>
</body>
</html>