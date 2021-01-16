
    /**
     * Génère les Peepo
     */
    function showPeepo(){
        let divPeepo = document.getElementById("song");
        let nbPeepo = 54;

        for(let i=0; i<nbPeepo; i++){
            let peepo = document.createElement("img");
            peepo.src = "https://tenor.com/view/peepo-gif-19514225.gif";
            divPeepo.appendChild(peepo);
        }
    }


    let play = document.getElementById("play");
    let pause = document.getElementById("pause");
    let audio = document.getElementById("audio");


    /**
     * La musique est en pause
     */
    play.addEventListener("click", function() {

         if(pause.className === "hidden"){
             audio.play();
             play.className = 'hidden';
             pause.className = "active";
         }
    });

    /**
     * La musique est lancée
     */
    pause.addEventListener("click", function() {
        if(pause.className === "active"){
            audio.pause();
            play.className = 'active';
            pause.className = "hidden";
        }
    });


    /**
     * Changer le volume de la musique
     */

    let fort = document.getElementById("fort");
    let moyen = document.getElementById("moyen");
    let faible = document.getElementById("faible");

    function setFort(){
        audio.volume = 0.5;
        fort.className = "hidden";
        moyen.className = "active";
    }

    function setMoyen(){
        audio.volume = 0.1;
        moyen.className = "hidden";
        faible.className = "active";
    }

    function setFaible(){
        audio.volume = 1;
        faible.className = "hidden";
        fort.className = "active";
    }








    showPeepo();