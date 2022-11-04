function runPopup(){
    alert("KLIK TOMBOL DI SEBELAH KANAN UNTUK BERALIH MODE");
};

function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
    document.getElementById("changemode").innerHTML = "Light Mode";
 }
 
 var bgColor = document.getElementById('bg-color');
 var txtColor = document.getElementById('text-color');

 bgColor.addEventListener("change", (event) => {
 document.body.style.backgroundColor = bgColor.value;
 });

 txtColor.addEventListener("change", (event) => {
 document.body.style.color = txtColor.value;
 });

footer = document.getElementsByClassName('footer');
footer[0].style.color = 'white';




