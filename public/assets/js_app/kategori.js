// const toggleButton = document.getElementById('toggleButton');
const content = document.getElementById('content');


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

function editKategori(id) {
    // Buat permintaan GET ke API
    fetch(`http://localhost:8000/api/kategori/${id}`)
        .then(response => {
            // Periksa apakah responsenya berhasil (kode status 200 OK)
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // Mengubah responsenya menjadi JSON
            return response.json();
        })
        .then(data => {
            $('#id_kategori').val(data.id)
            $('#edit_nama_kategori').val(data.nama_kategori)
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}
function hapusKategori(id) {
    $('#id_kategori_hapus').val(id)
    console.log(id)
}