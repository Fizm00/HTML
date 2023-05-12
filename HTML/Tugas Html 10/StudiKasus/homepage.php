<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            background-color: #917FB3;
            font-family: Arial, sans-serif;
        }

        #header {
            background-color: #2A2F4F;
            color: white;
            padding: 20px;
            text-align: center;
        }

        #menu {
            border: 2px solid black;
            border-radius: 5px;
            margin: 20px;
            padding: 20px;
            background-color: #E6E6FA;
        }

        #menu h2 {
            margin-top: 0px;
        }

        #menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        #menu li {
            display: inline-block;
            margin-right: 20px;
            font-size: 18px;
        }

        #menu a {
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        #menu a:hover {
            text-decoration: underline;
            background-color: #E5BEEC;
            color: #333;
        }

        #content {
            border: 2px solid black;
            border-radius: 5px;
            margin: 20px;
            padding: 20px;
            background-color: #FDE2F3;
        }

        #content h2 {
            margin-top: 0px;
        }

        #content p {
            font-size: 18px;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div id="header">
        <h1>Selamat datang di Halaman Homepage</h1>
    </div>
    <div id="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Kontak</a></li>
            <li><a href="#" onclick="confirmLogout()">Logout</a></li>
        </ul>
    </div>
    <div id="content">
        <h2>Tentang Kami</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut enim at magna pellentesque sollicitudin. Suspendisse non justo arcu. Fusce sollicitudin velit a eros aliquet, eget sollicitudin risus iaculis. Nam malesuada tortor eget nibh suscipit feugiat. Praesent ac rhoncus libero. Etiam euismod congue nisl, eu vestibulum nulla consectetur ac.</p>
    </div>

    <script>
        function confirmLogout() {
            if (confirm("Anda yakin ingin logout?")) {
                // lakukan logout, misalnya dengan mengarahkan ke halaman login
                window.location.href = "StudiKasus.php";
            }
        }
    </script>

</body>

</html>