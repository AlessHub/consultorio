<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F5 Consult</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <h2>
            Appointments
        </h2>
        <a class="btn btn-primary" href="create.php" role="button">New Appointment</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Reason</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
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
                    echo "Connection failed: " . $e->getMessage();
                }
                $result = $conn->prepare("SELECT * FROM appointments");
                $result->execute();

                if (!$result) {
                    die("Invalid query: " . $conn->e);
                }

                // read data of each row
                while ($row = $result->fetch()) {
                    echo "
                    <tr>
                    <td>
                        $row[id]
                    </td>
                    <td>
                        $row[name]
                    </td>
                    <td>
                        $row[email]
                    </td>
                    <td>
                        $row[reason]
                    </td>
                    <td>
                        $row[created_at]
                    </td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                ";
                }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>