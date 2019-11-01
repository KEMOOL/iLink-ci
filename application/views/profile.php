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
    <script src="<?= base_url(); ?>assets/js/profile.js"></script>
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
        <div class="container wrap">
            <h2> MY ACCOUNT</h2>
            <div class="form">
                <form class="profile-form" method="post" action="<?= base_url('profile/save'); ?>">
                    <div class="form-group">
                        <label for="nama_depan">Nama Depan</label>
                        <input id="nama_depan" name="nama_depan" minlength="3" value="<?= $user['nama_depan'] ?>" disabled />
                    </div>
                    <div class="form-group">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input id="nama_belakang" name="nama_belakang" minlength="3" value="<?= $user['nama_belakang'] ?>" disabled />
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" name="username" value="<?= $user['username'] ?>" disabled />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" value="<?= $user['email'] ?>" disabled />
                    </div>
                    <div class="form-group">
                        <label for="i-link">i-Link</label>
                        <input id="i-link" name="i-link" value="i-link/<?= $user['username'] ?>" disabled />
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <button type="submit" id="save-button">Save</button>
                        </div>
                    </div>
                </form>
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <button type="submit" id="ubah-button">Ubah</button>
                    </div>
                </div>
            </div>
        </div>
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