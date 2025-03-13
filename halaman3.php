<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: halaman1.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CV Anda</title>
    <link rel="stylesheet" type="text/css" href="Template.css"> 
    <style>
        .foto {
            max-width: 200px; 
            height: auto; 
            border-radius: 10px; 
            margin: 20px auto; 
            display: block;
        }
        
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>CV <?php echo $_SESSION['nama']; ?></h2> 
        
        <?php if (isset($_SESSION['foto'])): ?>
            <img src="uploads/<?php echo $_SESSION['foto']; ?>" alt="Foto" class="foto"> 
        <?php endif; ?>

        <p>Email: <?php echo $_SESSION['email']; ?></p>
        <p>Nama: <?php echo $_SESSION['nama']; ?></p>
        <p>Tempat Lahir: <?php echo $_SESSION['tempat']; ?></p>
        <p>Tanggal Lahir: <?php echo $_SESSION['tanggal_lahir']; ?></p>
        <p>Riwayat Pendidikan: <?php echo $_SESSION['riwayat_pendidikan']; ?></p>
    </div>
</body>
</html>