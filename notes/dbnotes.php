<?php
    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aiphp";

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the form data
        $title = $_POST['title'];
        $description = $_POST['description'];
        
        if(isset($_POST['email'])){
            $email=$_POST['email'];
        }else{
            $email="admin@gmail.com";
        }

        

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("INSERT INTO note (title, description,email) VALUES (?, ?,?)");
        $stmt->bind_param("sss", $title, $description,$email);

        if ($stmt->execute()) {
            header('Location:index.php?inserted');
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }


    //Check if a delete request is made
    if(isset($_GET['delid'])){
        $delid = $_GET['delid'];
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "DELETE FROM note WHERE id = $delid";
        if($conn->query($sql) === TRUE){
            header('Location:index.php?deleted');
            exit();
        };
        $conn->close();
    }
    
?>