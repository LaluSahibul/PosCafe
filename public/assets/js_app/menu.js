// const toggleButton = document.getElementById('toggleButton');
const content = document.getElementById('content');

document.getElementById("searchInput").focus()
$('#searchInput').on('input', function () {
    let searchTerm = $(this).val().toLowerCase();
    $('#daftar_menu tbody tr').each(function () {
        let rowText = $(this).text().toLowerCase();
        if (rowText.includes(searchTerm)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
});

let dengan_rupiah = document.getElementById('harga');
dengan_rupiah.addEventListener('keyup', function (e) {
    dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
});
let dengan_rupiah_edit = document.getElementById('edit_harga');
dengan_rupiah_edit.addEventListener('keyup', function (e) {
    dengan_rupiah_edit.value = formatRupiah(this.value, 'Rp. ');
});

function formatRupiah(angka, prefix) {
    let number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');

}

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

function editMenu(id) {
    // Buat permintaan GET ke API
    fetch(`http://localhost:8000/api/menu/${id}`)
        .then(response => {
            // Periksa apakah responsenya berhasil (kode status 200 OK)
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // Mengubah responsenya menjadi JSON
            return response.json();
        })
        .then(data => {
            function formatRupiah(angka) {
                var reverse = angka.toString().split('').reverse().join('');
                var ribuan = reverse.match(/\d{1,3}/g);
                var hasil = ribuan.join('.').split('').reverse().join('');
                return 'Rp. ' + hasil;
            }
            $('#id_menu_edit').val(data.id)
            $('#edit_nama_menu').val(data.nama_menu)
            $('#edit_kategori_menu').val(data.kategori_menu)
            let konversiangka = formatRupiah(data.harga)
            $('#edit_harga').val(konversiangka)
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}
function hapusMenu(id) {
    $('#id_menu_hapus').val(id)
    console.log(id)
}