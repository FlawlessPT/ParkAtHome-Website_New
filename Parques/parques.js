function loadParks() {
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("parks").innerHTML += this.responseText;
    }
  };
  xhttp.open("GET", "BD/GetParks.php", true);
  xhttp.send();
}
