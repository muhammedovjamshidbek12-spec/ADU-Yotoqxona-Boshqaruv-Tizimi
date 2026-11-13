<?php
// Andijon Davlat Universiteti - Yotoqxona Boshqaruv Tizimi
// Database connection

$con = mysqli_connect("localhost", "root", "", "DMS");

// Check connection
if (mysqli_connect_errno()) {
    echo "MySQL ga ulanishda xatolik: " . mysqli_connect_error();
    exit();
}

// UTF-8 ni o'rnatish (o'zbekcha matnlar uchun)
mysqli_set_charset($con, "utf8mb4");
?>
