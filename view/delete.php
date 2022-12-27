<?php 

if ( isset($_GET["id"])){
    $id = $_GET["id"];
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $database = "my_consult";
    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        $errorMessage = "Invalid query: " . $e->getMessage();
    }

    $sql= $conn->prepare("DELETE FROM appointments WHERE id='$id'");
    $sql->execute();
}

header("location: /consultorio/view/index.php");
exit;
?>