<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    // Process the form data as needed

    // For now, just echoing the submitted data
    echo "Name: $name<br>";
    echo "Age: $age<br>";
    echo "Email: $email<br>";
    echo "Address: $address<br>";
}
?>
