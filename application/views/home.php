<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iLink</title>

    <script src="<?= base_url(); ?>assets/global.js"></script>
    <script>
        globalInclude();
    </script>

    <style>
        header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(assets/img/Blog-Cover.jpg);
            height: 60em;
            background-size: cover;
            background-position: center;
        }

        ul {
            float: right;
            list-style-type: none;
        }

        ul li {
            display: inline-block;
            margin-top: 25px;
        }

        ul li a {
            text-decoration: none;
            font-size: 150%;
            color: #ffff;
            /* border : 1em solid #fff; */
            padding: 1.5em 2em;
            transition: ease;
        }

        ul li a:hover {
            background-color: #ff;
            color: #00;
        }

        .logo img {
            float: left;
            padding: 1.5em 2em;
            width: 10em;
            height: auto;
        }

        .title {
            text-align: center;
            position: absolute;
            top: 20em;
            left: 25em;
        }

        .title h1 {
            color: #fff;
            font-size: 3.5em;
        }

        .button {
            text-align: center;
            position: absolute;
            top: 35em;
            left: 43em;
        }

        .btn {
            border: 1em solid #fff;
            padding: 10px 30px;
            color: #fff;
            text-decoration: none;
            transition: 0.6s ease;
            font-size: 1em;
        }

        .btn:hover {
            background-color: #ff;
            color: #000;
        }

        .konten {
            background-image: url(assets/img/bottom.png);
            height: 70em;
            background-size: 100%;
            background-position: center;
        }

        .isi {
            text-align: left;
            position: absolute;
            top: 80em;
            left: 10em;
        }

        .isi h2 {
            color: #000;
            font-size: 3em;
        }

        pre {
            text-align: left;
            position: absolute;
            top: 3em;
            left: -8em;
            color: #000;
            font-size: 2.5em;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <header>
        <?php if (!$this->session->userdata('email')) { ?>
            <div class="main">
                <a class="logo" href="<?= base_url(); ?>">
                    <img src="assets/img/Logo_ILINK.png">
                </a>
                <ul>
                    <li><a href="#">Home</a> </li>
                    <li><a href="#">About</a> </li>
                    <li><a href="<?= base_url('auth'); ?>">Login</a>
                    </li>
                    <li><a href="<?= base_url('auth/registration'); ?>">Sing Up</a>
                    </li>
                </ul>
            </div>
        <?php } else { ?>
            <div class="main">
                <a class="logo" href="<?= base_url(); ?>">
                    <img src="assets/img/Logo_ILINK.png">
                </a>
                <ul>
                    <li><a href="#">Home</a> </li>
                    <li><a href="<?= base_url('profile') ?>">Profile</a>
                    </li>
                    <li><a href="<?= base_url('auth/logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        <?php } ?>
        <div class="title">
            <h1> TEMUKAN KEMUDAHAN </h1>
            <h1> MENGELOLA AKUNMU DISINI ! </h1>
        </div>
        <div class="button">
            <a href="<?= base_url('auth/registration') ?>" class="btn">SIGN UP FREE!</a>
        </div>
        </div>
    </header>
    <!-- content -->
    <div class="konten">
        <div class="isi">
            <h2> Cara Kerjanya </h2>
            <pre>
                1. Login menggunakna akun 
                   i-Link yang telah dibuat
                2. Masuk ke Halaman but Link
                3. Tambahkan link sesuai yang 
                   diperlukan
                4. Sebarkan link yang sudah 
                   dibuat sesuka anda
                </pre>
        </div>
    </div>
    <!-- footer -->

</body>

</html>