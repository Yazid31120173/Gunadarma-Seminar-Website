// //program hacker njay bang jago
// const tanggalTujuan = new Date('Jun 28, 2022 14:54:00').getTime();

// const hitungMundur = setInterval(function() {

//     const sekarang = new Date().getTime();
//     const selisih = tanggalTujuan - sekarang;

//     const hari = Math.floor(selisih/ (1000 * 60 * 60 *24));
//     const jam = Math.floor(selisih % (1000 * 60 * 60 *24) / (1000 * 60 * 60));
//     const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));
//     const detik = Math.floor(selisih % (1000 * 60 ) / 1000);

//     const bg = document.getElementById('timing');
//     const daftar = document.getElementById('daftar');
//     const href = document.getElementById('href');
//     bg.innerHTML = 'Waktu tersisa: ' + hari + ' hari ' + jam + ':' + menit + ':' + detik;

//     if(selisih < 0) {
//         clearInterval(hitungMundur);
//         bg.innerHTML = 'Waktunya abis, kesyan deh lu';
//         daftar.innerHTML = "Close";
//         daftar.disabled = true;
//         href.classList.add('disabled-link');
//     }
// }, 1000);