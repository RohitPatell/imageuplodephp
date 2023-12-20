<?php
$conn = new mysqli("localhost", "root", "", "imageuplode");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_errno);
}

if (isset($_POST["submit"])) {
    $id = "";
    $firstname = $_POST['fname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uplodedimage/" . $filename;

    move_uploaded_file($tempname, $folder);

    $sql = "INSERT INTO `imguplode` (`id`, `firstname`, `lastname`, `email`, `imgsource`) VALUES (NULL, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $folder);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>


