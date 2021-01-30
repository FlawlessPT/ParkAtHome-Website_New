function setName() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("profileName").value = this.responseText;
        }
    };
    xhttp.open("GET", "BD/GetData.php?type=name", true);
    xhttp.send();
}

function setEmail() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("profileEmail").value = this.responseText;
        }
    };
    xhttp.open("GET", "BD/GetData.php?type=email", true);
    xhttp.send();
}

function setContact() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("profileContact").value = this.responseText;
        }
    };
    xhttp.open("GET", "BD/GetData.php?type=contact", true);
    xhttp.send();
}

function setPassword() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
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

function loadPlates() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const value = JSON.parse(this.responseText);
            document.getElementById("plate1").value = value.plates[0] || "---";
            document.getElementById("plate2").value = value.plates[1] || "---";
            document.getElementById("plate3").value = value.plates[2] || "---";
            document.getElementById("plate4").value = value.plates[3] || "---";
        }
    };
    xhttp.open("GET", "BD/GetPlates.php", true);
    xhttp.send();
}

function update() {
    var name = document.getElementById("profileName").value;
    var email = document.getElementById("profileEmail").value;
    var contact = document.getElementById("profileContact").value;
    var password = document.getElementById("profilePassword").value;

    var plates = new Array();
    plates[0] = document.getElementById("plate1").value;
    plates[1] = document.getElementById("plate2").value;
    plates[2] = document.getElementById("plate3").value;
    plates[3] = document.getElementById("plate4").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == 1) {
                Qual.successd('Sucesso', 'Dados atualizados com sucesso!');
                disableEdit();
            } else {
                Qual.errord('Aviso', 'Erro ao atualizar!');
            }
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
        password +
        "&plate1=" +
        plates[0] +
        "&plate2=" +
        plates[1] +
        "&plate3=" +
        plates[2] +
        "&plate4=" +
        plates[3],
        true
    );
    xhttp.send();
}

function enableEdit() {
    document.getElementById("profileName").disabled = false;
    document.getElementById("profileEmail").disabled = false;
    document.getElementById("profileContact").disabled = false;
    document.getElementById("profilePassword").disabled = false;

    for (var i = 1; i <= 4; i++) {
        document.getElementById("plate" + i).disabled = false;
    }
}

function disableEdit() {
    document.getElementById("profileName").disabled = true;
    document.getElementById("profileEmail").disabled = true;
    document.getElementById("profileContact").disabled = true;
    document.getElementById("profilePassword").disabled = true;

    for (var i = 1; i <= 4; i++) {
        document.getElementById("plate" + i).disabled = true;
    }
}