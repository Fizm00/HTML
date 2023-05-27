// berikut ini merupakan contoh penanganan event (event handling) :
// Penanganan Event dengan Inline Event Handler:
<button onclick="myFunction()">Klik saya</button>

<script>
function myFunction() {
    alert("Tombol diklik!");
}
</script>


// Penanganan Event dengan Event Listener:
<button id="myButton">Klik saya</button>

<script>
document.getElementById("myButton").addEventListener("click", function() {
    alert("Tombol diklik!");
});
</script>


// Penanganan Event dengan Named Function:
<button id="myButton">Klik saya</button>

<script>
function handleClick() {
    alert("Tombol diklik!");
}

document.getElementById("myButton").addEventListener("click", handleClick);
</script>


// Penanganan Event dengan arrow Function:
<button id="myButton">Klik saya</button>

<script>
document.getElementById("myButton").addEventListener("click", () => {
    alert("Tombol diklik!");
});
</script>


// Penanganan Event pada Input dengan onChange:
<input type="text" id="myInput">

<script>
document.getElementById("myInput").addEventListener("change", function() {
    let value = this.value;
    console.log("Nilai input berubah: " + value);
});
</script>

</input>

// Penanganan Event pada Form dengan onSubmit:
<form id="myForm">
    <input type="text" name="username">
    <button type="submit">Submit</button>
</form>

<script>
document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah form submit

    let username = this.elements.username.value;
    console.log("Username yang di-submit: " + username);
});
</script>
