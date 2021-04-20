const anmMulai1 = document.querySelector('.dashboard');
const anmMulai2 = document.querySelector('.data-barang');
const anmMulai3 = document.querySelector('.data-konsumen');
const anmMulai4 = document.querySelector('.data-transaksi');


// animasi toggle
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#iconTogle').toggleClass('fa-rotate-180');
    });
});

// animasi sidebar
if (anmMulai1) {
    $('.components .side-dashboard').toggleClass('mulai-anm');
}
if (anmMulai2) {
    $('.components .side-data-barang').toggleClass('mulai-anm');
}
if (anmMulai3) {
    $('.components .side-data-konsumen').toggleClass('mulai-anm');
}
if (anmMulai4) {
    $('.components .side-transaksi').toggleClass('mulai-anm');
}
