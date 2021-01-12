

    // Génération des Peepo
    let divPeepo = document.getElementById("song");
    let nbPeepo = 54;
    let countPeepo = 0;

    while(countPeepo !== nbPeepo){
        let peepo = document.createElement("img");
        peepo.src = "https://tenor.com/view/peepo-gif-19514225.gif";
        divPeepo.appendChild(peepo);
        countPeepo++;
    }

    // Play / Pause

    let play = document.getElementById("play");
    let pause = document.getElementById("pause");

