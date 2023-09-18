const numeroInput = document.getElementById("numeroInput");
const aumentarBtn = document.getElementById("aumentar");
const disminuirBtn = document.getElementById("disminuir");

numeroInput.addEventListener("input", () => {
   let valor = parseInt(numeroInput.value);

   if (isNaN(valor) || valor < 1) {
      numeroInput.value = 1;
   }
});

aumentarBtn.addEventListener("click", () => {
   let valor = parseInt(numeroInput.value);
   valor++;
   numeroInput.value = valor;
});
disminuirBtn.addEventListener("click", () => {
   let valor = parseInt(numeroInput.value);

   if (valor > 1) {
      valor--;
      numeroInput.value = valor;
   }
});

