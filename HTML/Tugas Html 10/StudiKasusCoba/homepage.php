<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            background-color: #F8F8F8;
        }

        #header {
            background-color: #5F9EA0;
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
        }

        #menu a:hover {
            text-decoration: underline;
        }

        #content {
            border: 2px solid black;
            border-radius: 5px;
            margin: 20px;
            padding: 20px;
            background-color: #FFFACD;
        }

        #content h2 {
            margin-top: 0px;
        }

        #content p {
            font-size: 18px;
        }

        #logout-modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
        }

        #logout-modal-content {
            background-color: white;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        #logout-modal-content:before {
            content: "";
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        #logout-modal-buttons {
            display: block;
            justify-content: space-around;
            margin-top: 20px;
        }

        #logout-modal p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        #logout-modal button {
            background-color: #5F9EA0;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        #logout-modal button:hover {
            background-color: #4682B4;
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
            <li><a href="#" onclick="showLogoutModal()">Logout</a></li>
        </ul>
    </div>
    <div id="content">
        <h2>Tentang Kami</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut enim at magna pellentesque sollicitudin. Suspendisse non justo arcu. Fusce sollicitudin velit a eros aliquet, eget sollicitudin risus iaculis. Nam malesuada tortor eget nibh suscipit feugiat. Praesent ac rhoncus libero. Etiam euismod congue nisl, eu vestibulum nulla consectetur ac.</p>
    </div>
    <div id="logout-modal" class="modal">
        <div class="modal-content" id="logout-modal-content">
            <span class="close" onclick="hideLogoutModal()"></span>
            <p>Anda yakin ingin logout?</p>
            <div id="logout-modal-buttons">
                <button onclick="logout(); hideLogoutModal();">Ya</button>
                <button onclick="hideLogoutModal()">Tidak</button>
            </div>
        </div>
    </div>

</body>
<script>
    function showLogoutModal() {
        document.getElementById("logout-modal").style.display = "flex";
    }

    function hideLogoutModal() {
        document.getElementById("logout-modal").style.display = "none";
    }

    function logout() {
        window.location.href = "logout.php";
    }

    window.addEventListener('click', function(e) {
        var logoutModal = document.getElementById("logout-modal");
        if (e.target == logoutModal) {
            hideLogoutModal();
        }
    });
</script>

</html>