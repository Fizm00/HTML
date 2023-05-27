// berikut ini merupakan pemformatan teks dengan javascript :
// Mengubah Teks menjadi Huruf Kapital:
let teks = "teks yang akan diubah";
let teksKapital = teks.toUpperCase();
console.log(teksKapital); // Output: TEKS YANG AKAN DIUBAH

// Mengubah Teks menjadi Huruf Kecil:
let teks = "TEKS YANG AKAN DIUBAH";
let teksKecil = teks.toLowerCase();
console.log(teksKecil); // Output: teks yang akan diubah

// Mengubah teks menjadi huruf kapital pada huruf pertama
let teks = "teks yang akan diubah";
let teksDiubah = teks.replace(/\b\w/g, function(l){ return l.toUpperCase(); });
console.log(teksDiubah); // Output: Teks Yang Akan Diubah

// Mengubah Teks menjadi Teks dengan Spasi di Antara Setiap Huruf:
let teks = "teks";
let teksDenganSpasi = teks.split("").join(" ");
console.log(teksDenganSpasi); // Output: t e k s

// Mengubah Teks Menjadi Format Tanggal yang Ditentukan:
let tanggal = new Date();
let teksTanggal = tanggal.toLocaleDateString("id-ID");
console.log(teksTanggal); // Output: 26/5/2023 (Format tanggal yang sesuai dengan bahasa Indonesia)

// Mengubah Teks Menjadi Format Mata Uang:
let harga = 1000000;
let teksHarga = harga.toLocaleString("id-ID", { style: "currency", currency: "IDR" });
console.log(teksHarga); // Output: Rp 1.000.000,00 (Format mata uang yang sesuai dengan bahasa Indonesia)
