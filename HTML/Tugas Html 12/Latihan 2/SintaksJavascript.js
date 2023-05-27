// berikut ini beberapa contoh dari sintaks javascript :
// Mendeklarasikan variabel dan memberikan nilai
let nama = "John";
const umur = 25;
var isMahasiswa = true;
// Tipe data primitif
let angka = 10;
let teks = "Halo";
let boolean = true;
let nol = null;
let tidakTerdefinisi = undefined;
// Array
let arr = [1, 2, 3, 4, 5];
// Objek
let obj = { nama: "John", umur: 25 };

//percabangan :
let angka = 10;

if (angka > 0) {
    console.log("Angka positif");
} else if (angka < 0) {
    console.log("Angka negatif");
} else {
    console.log("Angka nol");
}

//perulangan :
// For loop :
for (let i = 0; i < 5; i++) {
    console.log(i);
}
// While loop :
let i = 0;
while (i < 5) {
    console.log(i);
    i++;
}
// Do-while loop :
let i = 0;
do {
    console.log(i);
    i++;
} while (i < 5);

//fungsi :
// Mendefinisikan fungsi :
function tambah(a, b) {
    return a + b;
}

// Memanggil fungsi :
let hasil = tambah(3, 5);
console.log(hasil);

// Manipulasi DOM (Document Object Model):
// Mengambil elemen dengan ID tertentu :
let elemen = document.getElementById("judul");
// Mengubah konten teks elemen :
elemen.textContent = "Halo, dunia!";
// Menambahkan event listener ke elemen :
elemen.addEventListener("click", function() {
    console.log("Elemen telah diklik");
});


//Asynchronous JavaScript (Contoh menggunakan Promise):
function getData() {
    return new Promise(function(resolve, reject) {
        setTimeout(function() {
            const data = "Data berhasil diambil";
            resolve(data);
        }, 2000);
    });
}

getData()
    .then(function(result) {
        console.log(result);
    })
    .catch(function(error) {
        console.log(error);
    });