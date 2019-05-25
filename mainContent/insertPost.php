<?php 
    htmlspecialchars($username = $_POST["username"]);
    htmlspecialchars($contact = $_POST["contact"]);
    htmlspecialchars($choose = $_POST["choose"]);
    htmlspecialchars($whatiwant = $_POST["whatiwant"]);
    htmlspecialchars($place = $_POST["place"]);
    htmlspecialchars($whendo = $_POST["whendo"]);

    $sql = "INSERT INTO `posts` (`id`, `username`, `contact`, `choose`, `whatiwant`, `place`, `whendo`) VALUES (NULL,  '$username', '$contact', '$choose',  '$whatiwant',  '$place', '$whendo')";

    require '../dbConnect.php';
    mysqli_query($conn, $sql);
    $conn->close();

    header('Location: ../index.php');
?>