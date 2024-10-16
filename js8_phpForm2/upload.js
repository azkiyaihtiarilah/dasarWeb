$(document).ready(function() {
    // Ketika dokumen HTML sudah siap (semua elemen sudah dimuat)
    // maka jalankan fungsi di dalamnya

    $('#file').change(function() {
        // Ketika ada perubahan pada elemen dengan id "file" (biasanya input type="file")
        // maka jalankan fungsi di dalamnya

        if (this.files.length > 0) {
            // Jika ada file yang dipilih
            $('#upload-button').prop('disabled', false).css('opacity', 1);
            // Maka aktifkan tombol unggah dengan id "upload-button"
        } else {
            // Jika tidak ada file yang dipilih
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
            // Maka nonaktifkan tombol unggah
        }
    });

    $('#upload-form').submit(function(e) {
        // Ketika form dengan id "upload-form" disubmit
        // maka jalankan fungsi di dalamnya

        e.preventDefault(); // Mencegah pengiriman form secara default

        var formData = new FormData(this);
        // Membuat objek FormData untuk menyimpan data dari form, termasuk file yang dipilih

        $.ajax({
            type: 'POST', // Menggunakan metode POST untuk mengirim data
            url: 'upload_ajax.php', // Mengirim data ke file PHP "upload_ajax.php"
            data: formData, // Mengirimkan data form ke server
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                // Jika pengiriman data berhasil
                $('#status').html(response); // Tampilkan pesan sukses di elemen dengan id "status"
            },
            error: function() {
                // Jika terjadi kesalahan saat pengiriman
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});