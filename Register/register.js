function verificar() {
  var registerButton = document.getElementById("registerButton");
  var errorMessage = document.getElementById("errorMessage");

  var nome = document.getElementById("nome").value;
  var email = document.getElementById("email").value;
  var numeroTelefone = document.getElementById("numeroTelefone").value;
  var nomeUtilizador = document.getElementById("nomeUtilizador").value;
  var password = document.getElementById("password").value;

  if (
    nome != "" &&
    email != "" &&
    numeroTelefone != "" &&
    nomeUtilizador != "" &&
    password != ""
  ) {
    errorMessage.style.display = "none";
    errorMessage.style.visibility = "hidden";
    registerButton.disabled = false;
  } else {
    errorMessage.style.display = "block";
    errorMessage.style.visibility = "visible";
    registerButton.disabled = true;
  }
}

function inserir() {
  var nome = document.getElementById("nome").value;
  var email = document.getElementById("email").value;
  var numeroTelefone = document.getElementById("numeroTelefone").value;
  var nomeUtilizador = document.getElementById("nomeUtilizador").value;
  var password = document.getElementById("password").value;

  var registerButton = document.getElementById("registerButton");
  var errorMessage = document.getElementById("errorMessage");

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == 1) {
        window.location.href = "accountCreated.php";
        document.getElementById("nome") = "";
        document.getElementById("email") = "";
        document.getElementById("numeroTelefone") = "";
        document.getElementById("nomeUtilizador") = "";
        document.getElementById("password") = "";
      } else {
        alert("Verifique os dados, algum dos dados já se encontra registado!");
      }
    }
  };
  xhttp.open(
    "GET",
    "register.php?nome=" +
      nome +
      "&email=" +
      email +
      "&numeroTelefone=" +
      numeroTelefone +
      "&nomeUtilizador=" +
      nomeUtilizador +
      "&password=" +
      password,
    true
  );
  xhttp.send();
}

function hide() {
  var registerButton = document.getElementById("registerButton");
  var errorMessage = document.getElementById("errorMessage");
  errorMessage.style.display = "none";
  errorMessage.style.visibility = "hidden";
  registerButton.disabled = true;
}
