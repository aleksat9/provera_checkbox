function provera() {
    let pitanje=document.getElementById("pitanje").checked;
    let email=document.getElementById("email").value;
    let lozinka=document.getElementById("lozinka").value;


    if(email!="" || lozinka!="") {
        if(email.length<6 || lozinka.length<6) {
            alert("Podaci (email i lozinka) moraju biti duzi od 6 karaktera");
            return false;
        } else {
            if(pitanje) {
                document.getElementById("odgovor").innerHTML="Svi podaci su ispravni.";
            } else {    
                alert("Ne slazete se sa uslovima...");
            }
        }
    } else {
        alert("Svi podaci su obavezni.");
    }
}