$('document').ready(function () {
    $('#save-button').hide();
    $('#ubah-button').click(function () {
        $('#ubah-button').hide();
        $('#save-button').show();
        $('#nama_depan').removeAttr('disabled');
        $('#nama_belakang').removeAttr('disabled');
        $('#email').removeAttr('disabled');
    });
});