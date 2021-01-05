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
  loadPlates();
}

var count = 0;
//TODO: LOAD ALL INPUTS BY DEFAULT

function setTotalPlates() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      count = this.responseText;
    }
  };
  xhttp.open("GET", "BD/GetTotalPlates.php", true);
  xhttp.send();
}

function loadPlates() {
  setTotalPlates();
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("platesList").innerHTML += this.responseText;
    }
  };
  xhttp.open("GET", "BD/GetPlates.php", true);
  xhttp.send();
}

function createNewPlate() {
  if (count < 4) {
    count++;
    if (isEditing) {
      document.getElementById("platesList").innerHTML +=
        "<label>Matricula " +
        count +
        ':</label><div class="input-group mb-3"><div class="input-group-append"><span class="input-group-text"><i class="far fa-list-alt" id="mat1_icon"></i></span></div><input type="text" id="plate' +
        count +
        '" class="form-control" placeholder="Matricula ' +
        count +
        '"></div>';
    } else {
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
}

function update() {
  var name = document.getElementById("profileName").value;
  var email = document.getElementById("profileEmail").value;
  var contact = document.getElementById("profileContact").value;
  var password = document.getElementById("profilePassword").value;

  var plates = new Array();

  for (var i = 1; i <= count; i++) {
    plates[i] = document.getElementById("plate" + i).value;
  }

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
    }
  };
  xhttp.open(
    "GET",
    "BD/Update.php?name=" +
      name +
      "&email=" +
      email +
      "&contact=" +
      contact +
      "&password=" +
      password,
    true
  );
  xhttp.send();
}

var isEditing = false;

function enableEdit() {
  isEditing = true;
  document.getElementById("profileName").disabled = false;
  document.getElementById("profileEmail").disabled = false;
  document.getElementById("profileContact").disabled = false;
  document.getElementById("profilePassword").disabled = false;

  for (var i = 1; i <= count; i++) {
    document.getElementById("plate" + i).disabled = false;
  }
}
