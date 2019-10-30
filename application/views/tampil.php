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
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/tampil.css">
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
        <div class="container emp-profile">
            <h1>MY LINK</h1>
            <div class="bingkai-foto">
                <img src="/iLink/assets/img/logo.png" class="foto-profile">
            </div>
            <div class="link">
                <?php
                $username = $this->uri->segment(1);
                echo '<a href="#">iLink/' . $username . '</a>';
                $query = $this->db->get_where('link', ['username' => $username]);
                echo '<dif class = "row">';
                if ($query->num_rows() == 0) {
                    echo '<div class="col-md-6 offset-md-3">
                        <div class="alert alert-danger"> aku ganteng
                        </div>
                    </div>';
                } else {
                    foreach ($query->result() as $row) {
                        echo '<div class="col-6">
                        <div class="bingkai-foto">
                            <a id="logo" href="' . $row->link . '">
                               <img src="/iLink/assets/img/logo.png" class="foto-link">
                            </a>
                        </div>
                    </div>';
                    }
                }
                echo '</div>';
                ?>
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