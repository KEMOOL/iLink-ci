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

    <div id="announcement-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pengumuman</h5>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="reset-password-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reset password</h5>
                </div>
                <div class="modal-body">
                    <!-- <div class="form-group">
                        <label for="nama_depan">Nama Depan</label>
                        <input id="nama_depan" name="nama_depan" minlength="3" value="<?= $user['nama_depan'] ?>" disabled />
                    </div> -->
                    <h5>Password Lama</h5><input id="old-password" type="password" class="form-control" maxlength='20' value="">
                    <h5>Password Baru</h5><input id="new-password" type="password" class="form-control" maxlength='20' value="">
                    <h5>Konfirmasi Password Baru</h5><input id="re-new-password" type="password" class="form-control" maxlength='20' value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="save" type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
                    <!-- <div class="form">
                        <form class="profile-form" method="post" action="<?= base_url('profile/save'); ?>">
                            <div class="form-group">
                                <label for="password-lama">Nama Depan</label>
                                <input id="password-lama" name="password-lama" />
                            </div>
                            <div class="form-group">
                                <label for="password-baru">Nama Depan</label>
                                <input id="password-baru" name="password-baru" />
                            </div>
                            <div class="form-group">
                                <label for="konfirmasi-lama">Nama Depan</label>
                                <input id="konfirmasi-lama" name="konfirmasi-password" />
                            </div>
                            <div class="submit-button">
                                <button type="submit" id="simpan-button">simpan</button>
                            </div>
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

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
                    <div class="col-auto">
                        <button type="submit" id="password-button">Change Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer id="footer" class="page-footer">
        <div class="footer-copyright py-3 text-center">
            <span>©2019 Copyright:</span>
            <a id="flink" href="/iLink">iLink</a>
        </div>
    </footer>
</body>

</html>