var url = 'http://localhost/iLink-ci/';
function globalInclude() {
    document.write('<link rel="stylesheet" href="' + url + '/assets/css/bootstrap.css">');
    document.write('<link rel="stylesheet" href="' + url + '/assets/css/style.css">');
    document.write('<script src="' + url + '/assets/js/jquery-3.4.1.js"></script>');
    document.write('<script src="' + url + '/assets/js/bootstrap.js"></script>');
}
/* <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css"></link>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css"></link>
<script src="<?= base_url(); ?>assets/js/jquery-3.4.1.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script> */