// berikut ini merupakan contoh dari penanganan obejek string :
// Mengambil Panjang String:
let teks = "Hello, world!";
let panjang = teks.length;
console.log(panjang); // Output: 13

// Mengakses Karakter dalam String:
let teks = "Hello, world!";
let karakter = teks[0];
console.log(karakter); // Output: H

// Menggabungkan Dua String:
let teks1 = "Hello";
let teks2 = "world!";
let gabungan = teks1 + " " + teks2;
console.log(gabungan); // Output: Hello world!

// Memotong Bagian Tertentu dari String:
let teks = "Hello, world!";
let potongan = teks.slice(7, 12);
console.log(potongan); // Output: world

// Mencari Posisi Awal Substring dalam String:
let teks = "Hello, world!";
let posisi = teks.indexOf("world");
console.log(posisi); // Output: 7

// Mengganti Substring dalam String:
let teks = "Hello, world!";
let teksBaru = teks.replace("world", "universe");
console.log(teksBaru); // Output: Hello, universe!

// Mengecek Apakah String Mengandung Substring Tertentu:
let teks = "Hello, world!";
let mengandung = teks.includes("world");
console.log(mengandung); // Output: true

// Memisahkan String Menjadi Array:
let teks = "Hello, world!";
let array = teks.split(", ");
console.log(array); // Output: ["Hello", "world!"]
