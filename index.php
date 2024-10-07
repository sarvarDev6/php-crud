<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD | sarvarDev5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <h2>List of Users</h2>
        <a class="btn btn-primary" href="/php-crud/create.php">New User</a>
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $serverName = "localhost";
                $userName = "root";
                $password = "";
                $database = "php-crud";

                $connection = new mysqli($serverName, $userName, $password, $database);

                if ($connection->connect_error) {
                    die("Connection Failed: " . $connection->connect_error);
                }

                $sql = "SELECT * FROM users";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid Query: " . $connection->connect_error);
                }

                while ($row = $result->fetch_assoc()) {
                    echo "
                    
                        <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/php-crud/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/php-crud/delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                    
                    ";
                }

                ?>


            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>