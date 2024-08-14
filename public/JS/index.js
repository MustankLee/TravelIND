// $('.carousel').carousel()
$(document).ready(function() {
    // lokasi
    $('#title-label').click(function() {
        $('#value-label').slideToggle(2000);
    });

    // harga tiket
    $('#title-label-2').click(function() {
        $('#value-label-2').slideToggle(1000);
    });

    //waktu operasional
    $('#title-label-3').click(function() {
        $('#value-label-3').slideToggle(1000);
    });

    $('#btn-edit-comment').click(function() {
        $('#btn-form-edit-comment').slideToggle(500);
    });
});