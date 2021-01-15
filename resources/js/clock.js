function zobrazCas(){
    var datum = new Date();
    var hodiny = datum.getHours();
    var minuty = datum.getMinutes();
    var sekundy = datum.getSeconds();


    minuty = (minuty < 10) ? "0" + minuty : minuty;
    sekundy = (sekundy < 10) ? "0" + sekundy : sekundy;

    var cas = hodiny + ":" + minuty + ":" + sekundy;
    document.getElementById("Hodiny").innerText = cas;
    document.getElementById("Hodiny").textContent = cas;

    setTimeout(zobrazCas, 1000);
}

setTimeout(zobrazCas, 1000);
