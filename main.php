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
                    <i class="fas fa-step-backward"></i>
                    <i class="fas fa-play play" id="play"></i>
                    <i class="fas fa-pause pause" id="pause hidden"></i>
                    <i class="fas fa-step-forward"></i>
                </div>
            </div>

            <div class="otherSong">
                <i class="fas fa-volume-up"></i>
            <!--    <i class="fas fa-volume-down"></i>
                <i class="fas fa-volume-mute"></i> -->
            </div>

        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>