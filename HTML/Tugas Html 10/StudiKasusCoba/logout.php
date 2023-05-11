<?php
session_start();
session_unset(); // menghapus semua data session
session_destroy(); // menghancurkan session
header('Location: StudiKasusCoba.php'); // redirect ke halaman login
exit();
?>