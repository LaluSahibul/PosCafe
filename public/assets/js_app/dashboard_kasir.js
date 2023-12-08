document.getElementById("searchInput").focus();



$('#searchInput').on('input', function () {
    let searchTerm = $(this).val().toLowerCase();

    $('#daftarMenu .card').each(function () {
        let menuName = $(this).find('.card-body #namaMenu').text().toLowerCase();

        if (menuName.includes(searchTerm)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
});