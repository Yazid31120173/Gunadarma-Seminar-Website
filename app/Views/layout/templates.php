<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $title; ?></title>

    <!-- assets -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="/assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="/assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="/assets/css/seminar.css">
    <!-- assets -->

    <!-- assets 2 -->
    <link rel="stylesheet" href="/assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;display=swap">
    <!-- assets 2 -->

    <!-- favicon -->
    <link rel="icon" type="image/gif" href="/assets/img/tech/Logo_Gundar.png">
    <!-- favicon -->
</head>

<body>

    <!-- include & section untuk isi konten -->
    <?= $this->include('layout/navbar') ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('layout/footer') ?>
    <!-- end -->

    <!-- assets -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="/assets/js/vanilla-zoom.js"></script>
    <script src="/assets/js/theme.js"></script>
    <!-- assets -->

    <!-- assets 2 -->
    <script src="/assets2/bootstrap/js/bootstrap.min.js"></script>
    <!-- assets 2 -->
    <!-- <script src="/assets/js/tombol.js"></script> -->
</body>

</html>