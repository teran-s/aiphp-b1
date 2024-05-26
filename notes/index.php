<?php
    session_start();
    if(!isset($_SESSION['userloggedin'])) {
        header('Location: ../login.php');
        exit();
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One Stop. Employee Cloud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/site.webmanifest">
    <style>
    .hero-text {
        text-align: center;
        color: #333;
        font-size: 5rem;
        font-weight: 100;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../img/fav/favicon-32x32.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../login.php">Login</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-md text-center " style="max-width: 850px;">
        <div class="mb-2 hero-text">Notes App</div>
        <form action="dbnotes.php" method="POST" class="row g-3">
            <div class="col-4">
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" required/>
            </div>
            <div class="col-7">
                <input type="text" class="form-control" id="description" name="description" placeholder="Description" required></input>
            </div>
            <div class="col-1">
            <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Date Created</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the MySQL database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "aiphp";
                $email=$_SESSION['userloggedin'];

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // SQL query to select the desired columns from the "Employee" table
                $sql = "SELECT id,createdDate,title,description FROM note WHERE email = '$email' ORDER BY createdDate DESC";

                // Execute the query
                $result = $conn->query($sql);

                // Check if the query was successful
                if ($result) {
                    // Fetch the rows
                    while ($row = $result->fetch_assoc()) {
                        // Display the data in table rows
                        echo "<tr>";
                        echo "<td class='p-3'>" . $row["createdDate"] . "</td>";
                        echo "<td class='p-3'>" . $row["title"] . "</td>";
                        echo "<td class='p-3'>" . $row["description"] . "</td>";
                        echo "<td class='p-3'> <a class='btn btn-outline-danger' href=" . "dbnotes.php?delid=" . $row["id"] . ">X</a> </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close the connection
                $conn->close();
                ?>
            </tbody>
        </table>

    </div>
   






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>