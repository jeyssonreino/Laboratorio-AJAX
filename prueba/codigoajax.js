function mostrar_nomcol(parametro) {
    var xhttp;  
    if (parametro == "") {
      document.getElementById("aqui").innerHTML = "";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("aqui").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "informacion.php?q="+parametro, true);
    xhttp.send();
  }




  