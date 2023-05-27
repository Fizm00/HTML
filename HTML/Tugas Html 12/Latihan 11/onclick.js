// berikut ini merupakan penggunaan event handler onclick pada javascript :
<button id="myButton">Klik saya</button>

<script>
document.getElementById("myButton").onclick = function() {
    alert("Tombol diklik!");
};
</script>


// atau bisa juga dengan cara seperti ini :
<button onclick="myFunction()">Klik saya</button>

<script>
function myFunction() {
    alert("Tombol diklik!");
}
</script>
