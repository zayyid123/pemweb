// produk all
    const popup = document.querySelector('.overlay');
    const gmbr = document.querySelector('.gmbrbesar');
    const gmbr2 = document.querySelector('.gmbrbesar2');
    const cover = document.querySelector('.cover');
    const animasiFade = document.querySelector('.animasi-fade');

    // ubahgambar 1
    function ubahGambar1() {
        gmbr.setAttribute('src', 'https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor.jpg?raw=true');
        gmbr2.setAttribute('src', 'https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor.jpg?raw=true');
        popup.classList.add('open');
    }
    // ubahgambar 2
    function ubahGambar2() {
        gmbr.setAttribute('src', 'https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor2.png?raw=true');
        gmbr2.setAttribute('src', 'https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor2.png?raw=true');
        popup.classList.add('open');
        
    }
    // ubahgambar 3
    function ubahGambar3() {
        gmbr.setAttribute('src', 'https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor3.png?raw=true');
        gmbr2.setAttribute('src', 'https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor3.png?raw=true');
        popup.classList.add('open');
        
    }
    function tutup() {
        popup.classList.remove('open');
    }

    // ubah cover
    function ubahcover() {
        gmbr.setAttribute('src', 'https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor.jpg?raw=true');
        gmbr2.setAttribute('src', 'https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor.jpg?raw=true');
        popup.classList.add('open');
    }
    
// akhir produk 

// animasi scroll
$('.page-scroll').on('click',function (e) {
    
    const tujuan = $(this).attr('href');
    const elemenTujuan = $(tujuan);

    $('html, body').animate({
        scrollTop: elemenTujuan.offset().top -40
    }, 1250, 'swing');

    e.preventDefault();
});
// akhir animasi scroll

if (animasiFade) {
    // animasi fade in
    $(window).scroll(function () {
        const wScroll = $(this).scrollTop();
        if (wScroll > $('.manfaat').offset().top- 250) {
            $('.manfaat .anm').addClass('muncul');
        }
    });
    $(window).scroll(function () {
        const wScroll = $(this).scrollTop();
        if (wScroll > $('.cara-kerja').offset().top- 250) {
            $('.cara-kerja .anm1').addClass('muncul');
        }
    });
    $(window).scroll(function () {
        const wScroll = $(this).scrollTop();
        if (wScroll > $('.katalog').offset().top- 250) {
            $('.katalog .anm2').addClass('muncul');
        }
    });
    // akhir animasi fade in

    // animasi fade out
    $(window).scroll(function () {
        const wScroll = $(this).scrollTop();
        if (wScroll > $('.manfaat').offset().top+ 200) {
            $('.manfaat .anm').removeClass('muncul');
        }
    });
    $(window).scroll(function () {
        const wScroll = $(this).scrollTop();
        if (wScroll > $('.cara-kerja').offset().top+ 200) {
            $('.cara-kerja .anm1').removeClass('muncul');
        }
    });
    $(window).scroll(function () {
        const wScroll = $(this).scrollTop();
        if (wScroll > $('.katalog').offset().top+200) {
            $('.katalog .anm2').removeClass('muncul');
        }
    });
    // akhir animasi fade out
};

