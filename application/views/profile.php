<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Account</title>
    <script src="<?= base_url(); ?>assets/global.js"></script>
    <script>
        globalInclude();
    </script>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/profile.css">
</head>

<body>
    <!-- navbar -->
    <nav id="navbar" class="d-flex">
        <a id="logo" href="<?= base_url(); ?>">
            <img src="assets/img/Logo_ILINK.png">
        </a>
    </nav>

    <!-- content -->
    <div id="content">
        <h2> MY ACCOUNT</h2>

        <form action="/action_page.php">

            Nama Depan:<br>
            <input type="text" name="namadepan" value="">
            <br>
            Nama Belakang:<br>
            <input type="text" name="namabelakang" value="">
            <br>
            Username:<br>
            <input type="text" name="username" value="">
            <br>
            Email:<br>
            <input type="text" name="email" value="">
            <br>
            I-Link:<br>
            <input type="text" name="link" value="">
            <br>
            Password:<br>
            <input type="text" name="password" value="">
            <br><br>

            <input type="submit" value="UBAH">
            <br>
            </from>
    </div>

    <!-- footer -->
    <!-- footer -->
    <footer id="footer" class="page-footer">
        <div class="footer-copyright py-3 text-center">
            <span>©2019 Copyright:</span>
            <a id="flink" href="/iLink">iLink</a>
        </div>
    </footer>
</body>

</html>