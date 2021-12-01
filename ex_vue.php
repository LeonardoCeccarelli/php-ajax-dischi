<?php

require_once "data/songData.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CDN Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- CDN Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <!-- Mio CSS -->
    <link rel="stylesheet" href="styles/main.css">

    <title>Esercizio - PHP</title>
</head>

<body>
    <div id="root">
        <header>
            <img src="assets/logo_spotify.png" alt="logo_spotify">
        </header>
        <main>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-5 gx-4 gy-3 justify-content-center">
                    <div class="col" v-for="(song, i) in listSong" :key="i">
                        <div class="card single_card">
                            <img :src="song.poster" class="card-img-top" alt="song image" />
                            <div class="card-body">
                                <h5 class="card-title mb-3">{{ song.title }}</h5>
                                <p class="card-text m-0">{{ song.author }}</p>
                                <p class="card-text m-0">{{ song.year }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="script/main.js"></script>
</body>

</html>