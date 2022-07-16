var button = document.querySelector(".transfer");
var money = document.getElementById("total");

button.addEventListener("click", function () {
  money.innerHTML = '<span class="text-success" id="total"><sup>Rp</sup> 78.537.362</span>';
  money.classList.toggle("text-success");
  money.classList.remove("text-danger");
  button.classList.toggle("disabled");
});
