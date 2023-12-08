// const toggleButton = document.getElementById('toggleButton');
const content = document.getElementById('content');

document.getElementById("searchInput").focus()
$('#searchInput').on('input', function () {
    let searchTerm = $(this).val().toLowerCase();
    $('#daftar_kasir tbody tr').each(function () {
        let rowText = $(this).text().toLowerCase();
        if (rowText.includes(searchTerm)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
});

function shortcutTambah(event) {
    // Periksa kombinasi tombol yang ditekan
    if (event.key === 'F2') {
        // Aksi yang dijalankan saat shortcut Ctrl + S ditekan
        event.preventDefault(); // Mencegah perilaku default seperti menyimpan halaman
        // if (content.style.display === 'none') {
        //     content.style.display = 'block';
        // } else {
        //     content.style.display = 'none';
        // }
        $("#modalTambah").modal("show");
        // Tambahkan kode aksi Anda di sini
    }
}

document.addEventListener('keydown', shortcutTambah);

function editKasir(id) {
    // Buat permintaan GET ke API
    fetch(`http://localhost:8000/api/kasir/${id}`)
        .then(response => {
            // Periksa apakah responsenya berhasil (kode status 200 OK)
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // Mengubah responsenya menjadi JSON
            return response.json();
        })
        .then(data => {
            $('#id_kasir_edit').val(data.id)
            $('#edit_nama_lengkap').val(data.nama_lengkap)
            $('#edit_username').val(data.username)
            $('#edit_role').val(data.role)
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}
function hapusKasir(id) {
    $('#id_kasir_hapus').val(id)
    console.log(id)
}