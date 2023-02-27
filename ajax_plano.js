//ejemplo 1
function cargararc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("carga").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "plano.txt", true);
    xhttp.send();
  }

//ejemplo 2
  function showHint(str) {
    var xhttp;
    if (str.length == 0) { 
      document.getElementById("txtHint").innerHTML = "";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "opciones.php?q="+str, true);
    xhttp.send();   
  }

  // ejemplo3
  function mostrar_col(parametro) {
    var xhttp;  
    if (parametro == "") {
      document.getElementById("info").innerHTML = "";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("info").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "colegios.php?q="+parametro, true);
    xhttp.send();
  }