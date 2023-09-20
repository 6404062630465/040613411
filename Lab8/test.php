<html>
<body>
<?php
    $country = $_POST["country"];
    $language = $_POST["lang"];
    echo "You are from " . $country . ".<br>";
    echo "You preferred " . $language . " language.";
    // $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
</body>
</html>