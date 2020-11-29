function enableEdit() {
  document.getElementById("profileName").disabled = false;
  document.getElementById("profileEmail").disabled = false;
  document.getElementById("profileContact").disabled = false;
  document.getElementById("profilePassword").disabled = false;
}

function setName() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("profileName").value = this.responseText;
    }
  };
  xhttp.open("GET", "BD/GetData.php?type=name", true);
  xhttp.send();
}

function setEmail() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("profileEmail").value = this.responseText;
    }
  };
  xhttp.open("GET", "BD/GetData.php?type=email", true);
  xhttp.send();
}

function setContact() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("profileContact").value = this.responseText;
    }
  };
  xhttp.open("GET", "BD/GetData.php?type=contact", true);
  xhttp.send();
}

function setPassword() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("profilePassword").value = this.responseText;
    }
  };
  xhttp.open("GET", "BD/GetData.php?type=password", true);
  xhttp.send();
}

function loadProfileData() {
  setName();
  setEmail();
  setContact();
  setPassword();
}

function loadPlates() {}

var count = 0;

function createNewPlate() {
  if (count < 4) {
    count++;
    document.getElementById("platesList").innerHTML +=
      "<label>Matricula " +
      count +
      ':</label><div class="input-group mb-3"><div class="input-group-append"><span class="input-group-text"><i class="far fa-list-alt" id="mat1_icon"></i></span></div><input type="text" id="plate' +
      count +
      '" class="form-control" placeholder="Matricula ' +
      count +
      '" disabled></div>';
  }
}
