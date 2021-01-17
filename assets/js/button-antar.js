const buttonYes = document.querySelector("#yes");
const buttonNo = document.querySelector("#no");
const alert = document.querySelector("#alert-berat");
const alamat = document.querySelector("#alamat");
const bawa_sendiri = document.querySelector("#bawa-sendiri");

buttonYes.addEventListener("click", function () {
  alert.style.display = "none";
  alamat.style.display = "block";
});

buttonNo.addEventListener("click", function () {
  alert.style.display = "none";
  bawa_sendiri.style.display = "block";
});
