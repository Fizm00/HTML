// berikut ini merupakan contoh dari Alert, Confirm, And Prompt :
// Alert :
alert("Ini adalah pesan alert!"); // Menampilkan pesan alert dengan teks "Ini adalah pesan alert!"

// confirm :
let result = confirm("Apakah Anda yakin?"); // Menampilkan jendela konfirmasi dengan teks "Apakah Anda yakin?"
if (result) {
  console.log("Pengguna menekan tombol OK"); // Jika pengguna menekan tombol OK
} else {
  console.log("Pengguna menekan tombol Batal"); // Jika pengguna menekan tombol Batal
}

// prompt :
let name = prompt("Masukkan nama Anda:"); // Menampilkan jendela prompt dengan teks "Masukkan nama Anda:"
if (name) {
  console.log("Halo, " + name + "!"); // Menampilkan pesan dengan nama yang dimasukkan oleh pengguna
} else {
  console.log("Nama tidak dimasukkan."); // Jika pengguna tidak memasukkan nama
}
