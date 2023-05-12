<?php
session_start(); // memulai session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $password = $_POST['password'];

    // cek apakah id dan password valid
    if (!is_string($id) || !is_string($password)) {
        echo "terjadi kesalahan pada server!";
    } elseif ($id == "admin" && $password == "1234") {
        // jika login berhasil, set session dan redirect ke homepage
        $_SESSION['id'] = $id;
        header('Location: homepage.php');
        exit();
    } else {
        echo "Login gagal!";
    }

    if (!is_string($id) || !is_string($password)) {
        echo "terjadi kesalahan pada server!";
    } elseif ($id == "Firza" && $password == "Himawan") {
        // jika login berhasil, set session dan redirect ke homepage
        $_SESSION['id'] = $id;
        header('Location: homepage.php');
        exit();
    } else {
        echo "Login gagal!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            background-color: #146C94;
        }
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #19A7CE;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border: 2px solid black;
            width: 300px;
        }
        h1 {
            text-align: center;
            font-family: sans-serif;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
        }
        input[type="text"], input[type="password"] {
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #f2f2f2;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #FEFF86;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #B0DAFF;
        }
    </style>
    <script>
        function validateForm() {
            var id = document.forms[0]["id"].value;
            var password = document.forms[0]["password"].value;
            if (id == "" || password == "") {
                alert("Username dan password harus diisi");
                document.forms[0]["id"].focus();
                return false;
            }
            if (!/^[a-zA-Z]+$/.test(id) || !/^[a-zA-Z]+$/.test(password)) {
                alert("Username dan password harus huruf");
                document.forms[0]["id"].focus();
                return false;
            }
        } 
    </script>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <?php
           if (isset($_SESSION['success'])) { // jika login berhasil
            header("Location: homepage.php"); // redirect ke halaman homepage
            exit(); // hentikan eksekusi script
        }
    
        if (isset($_SESSION['error'])) { // jika login gagal
            echo "<p style='color: red'>" . $_SESSION['error'] . "</p>";
            unset($_SESSION['error']); // hapus pesan error dari session
        }
        ?>
    
        <form method="post" onsubmit="return validate()"> <!-- panggil fungsi validate() -->
            <label for="id">Username:</label>
            <input type="text" id="id" name="id" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Login" style="color: black;">
        </form>
    </div>
</body>
</html>
