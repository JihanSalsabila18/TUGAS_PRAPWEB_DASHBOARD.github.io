<?php
// Panggil file koneksi database
include "koneksi.php";

// Proses Tambah Data
if(isset($_POST['tambah'])) {
    // Ambil data dari form
    $no_id = $_POST['no_id'];
    $no_hp = $_POST['no_hp'];
    $owner = $_POST['owner'];
    
    // Query untuk menambahkan data ke database
    $query = "INSERT INTO dashboard (no_id, no_hp, owner) VALUES ('$no_id', '$no_hp', '$owner')";
    $result = mysqli_query($koneksi, $query);
    
    // Cek apakah data berhasil ditambahkan
    if($result) {
        // Redirect atau tampilkan pesan sukses
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menambahkan data.";
    }
}

// Proses Baca Data
$query = "SELECT * FROM dashboard";
$data = mysqli_query($koneksi, $query);

// Proses Edit Data
// ...

// Proses Hapus Data
// ...
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>crud dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div id="sidebar">
            <!-- Sidebar content here -->
        </div>
        <!-- Page content -->
        <div id="content">
            <!-- Top navbar -->
            <div class="top-navbar">
                <!-- Top navbar content here -->
            </div>
            <!-- Main content -->
            <div class="main-content">
                <!-- Main content here -->
            </div>
            <!-- Footer -->
            <footer class="footer">
                <!-- Footer content here -->
            </footer>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".xp-menubar").on('click',function(){
                $("#sidebar").toggleClass('active');
                $("#content").toggleClass('active');
            });
            $('.xp-menubar,.body-overlay').on('click',function(){
                $("#sidebar,.body-overlay").toggleClass('show-nav');
            });
        });
    </script>
</body>
</html>
