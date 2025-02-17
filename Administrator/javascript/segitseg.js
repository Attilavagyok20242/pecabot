function Komm() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        const adatok=JSON.parse(this.responseText);
        console.log(adatok);
        for(let i=0;i<adatok.length;i++)
        {
          document.getElementById("uzenettart").innerHTML+="<div class='asd'><table><tr><th>Felhasznalo Név:"+"<> "+adatok[i].felhasznalo_nev+"</th><th>üzenet téma: "+adatok[i].uzenettema+"</th><th>aktív:"+adatok[i].aktiv+"</th><th>mikor:"+adatok[i].dates+"</th><th><p id='gomb' onclick='Megnyitas()' >Elfogadás</p></th><tr></table></div>";
        }     
      }
    };
    xhttp.open("GET", "segitseg.php", true);
    xhttp.send();
}
Komm();
