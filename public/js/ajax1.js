function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("viac").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "/blog/public/info.txt", true);
    xhttp.send();
}
