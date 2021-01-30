function verificar() {
  var loginButton = document.getElementById("loginButton");
  var errorMessage = document.getElementById("errorMessage");

  var nomeUtilizador = document.getElementById("nomeUtilizador").value;
  var password = document.getElementById("password").value;

  if (nomeUtilizador != "" && password != "") {
    errorMessage.style.display = "none";
    errorMessage.style.visibility = "hidden";
    loginButton.disabled = false;
  } else {
    errorMessage.style.display = "block";
    errorMessage.style.visibility = "visible";
    loginButton.disabled = true;
  }
}

function login() {
  var username = document.getElementById("nomeUtilizador");
  var password = document.getElementById("password");

  var usernameValue = username.value;
  var passwordValue = password.value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == 1) {
        window.location.href = "../Inicio/index.php";
      } else {
        Qual.warningd('Aviso', 'Credenciais não encontradas!');
      }
      username = "";
      password = "";
    }
  };
  xhttp.open(
    "GET",
    "login.php?username=" + usernameValue + "&password=" + passwordValue,
    true
  );
  xhttp.send();
}

function hide() {
  var loginButton = document.getElementById("loginButton");
  var errorMessage = document.getElementById("errorMessage");
  errorMessage.style.visibility = "hidden";
  errorMessage.style.display = "none";
  loginButton.disabled = true;
}
