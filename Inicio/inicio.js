const accessibilidade = "acessibilidade";
const seguranca = "seguranca";
const variadade = "variadade";

function showAcessibilidade() {
  document.getElementById(accessibilidade).style.visibility = "visible";
  document.getElementById(accessibilidade).style.display = "block";
}

function showSeguranca() {
  document.getElementById(seguranca).style.visibility = "visible";
  document.getElementById(seguranca).style.display = "block";
}

function showVariadade() {
  document.getElementById(variadade).style.visibility = "visible";
  document.getElementById(variadade).style.display = "block";
}

function hideAll() {
  hide(accessibilidade);
  hide(seguranca);
  hide(variadade);
}

function show(feature) {
  if (feature == accessibilidade) {
    hideAll();
    showAcessibilidade();
  } else if (feature == seguranca) {
    hideAll();
    showSeguranca();
  } else if (feature == variadade) {
    hideAll();
    showVariadade();
  }
}

function hide(feature) {
  if (feature == accessibilidade) {
    document.getElementById(accessibilidade).style.visibility = "visible";
    document.getElementById(accessibilidade).style.display = "none";
  } else if (feature == seguranca) {
    document.getElementById(seguranca).style.visibility = "visible";
    document.getElementById(seguranca).style.display = "none";
  } else if (feature == variadade) {
    document.getElementById(variadade).style.visibility = "visible";
    document.getElementById(variadade).style.display = "none";
  }
}
