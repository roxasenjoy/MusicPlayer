<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <title>Music player</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/128f69e9e2.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="song" id="song">
            <!-- Générer par le JS -->
        </div>

        <div class="setupSong">

            <div class="infoSong">
                <div class="image">
                    <img src="song.jpg" alt="Image de la musique">
                </div>
                <div class="content">
                    <p id="title">On My Way</p>
                    <p id="author">Sheppard</p>
                </div>
            </div>

            <div class="swapSong">
                <div class="swap">

                    <audio controls preload="metadata" id="audio" class="hidden">
                        <source src="song.mp3" type="audio/ogg" id="source">
                    </audio>
                    <span onclick="musicBackward();"><i class="fas fa-step-backward" ></i></span>
                    <button id="play" > <i class="fas fa-play play"> </i> </button>
                    <button id="pause" class="hidden"> <i class="fas fa-pause pause " ></i> </button>
                    <span onclick="musicForward();"><i class="fas fa-step-forward" ></i></span>

                  </div>
              </div>

              <div class="otherSong">
                    <span class="active volume" id="fort" onclick="setFort()"><i class="fas fa-volume-up" ></i></span>
                    <span class="hidden volume" id="moyen" onclick="setMoyen()"> <i class="fas fa-volume-down"></i></span>
                    <span class="hidden volume" id="faible" onclick="setFaible()"> <i class="fas fa-volume-mute" ></i></span>
              </>



        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>