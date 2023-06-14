<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tugas13";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn -> connect_error){
            die("Connection failed: " . $conn->connect_error);

        }

        $id = $_GET['id'];
        $name = $_POST['name'];
        $role = $_POST['role'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $nope = $_POST['nope'];
        $alamat = $_POST['alamat'];
        $foto = $_POST['foto'];

        $sql = "INSERT INTO users (id,email,name,role,avatar,phone,address,password) VALUE ('','$email','$name','$role','$foto','$nope','$alamat','$password')";



        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);
?>
<center>
    <p class="display-4">Berhasil Menambah User</p>
    <a href="users.html">
    <button type="button" class="btn btn-primary btn-lg">Kembali ke Tabel User</button>
    </a></center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
