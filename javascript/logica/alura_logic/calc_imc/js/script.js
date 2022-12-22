function calcImc() {
  const height = Number(document.getElementById("height").value);
  const weight = Number(document.getElementById("weight").value);

  const result = Math.ceil(weight / (height * height), 1);

  document.querySelector(".response").innerHTML = "Seu IMC: " + result;
}

/* Acrescentar ponto no input */
function insertDot() {}
const height = document.getElementById("height");

height.onkeyup = () => {
  if ((height.value.length = 1)) {
    height.value.slice(0, 1) + ".";
  }
};

/* Eventos de click */
document.getElementById("btn_calc").onclick = calcImc;
