$(document).ready(function () {
    var searchInput = $('#searchInput');
    var daftarMenu = $('#daftar_menu');

    searchInput.focus();

    searchInput.on('input', function () {
        var searchTerm = $(this).val().toLowerCase();

        if (searchTerm === '') {
            daftarMenu.hide();
        } else {
            daftarMenu.show();
        }

        $('#daftar_menu tbody tr').each(function () {
            var rowText = $(this).text().toLowerCase();
            var rowMatches = rowText.includes(searchTerm);
            $(this).toggle(rowMatches);
        });
    });
});


// $('#searchInput').on('input', function () {
//     let searchTerm = $(this).val().toLowerCase();

//     $('#daftarMenu .card').each(function () {
//         let menuName = $(this).find('.card-body #namaMenu').text().toLowerCase();

//         if (menuName.includes(searchTerm)) {
//             $(this).show();
//         } else {
//             $(this).hide();
//         }
//     });
// });