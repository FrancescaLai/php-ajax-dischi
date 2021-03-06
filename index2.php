<!-- Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, 
i dischi a php e li stamperà attraverso vue. -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <!-- Vue -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <!-- Axios cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Vue dischi con Vue e Axios</title>
</head>
<body>


  <!-- Collego Vuejs con l'id 'root' -->
  <div id="root">
    <header>
      <img src="img/download.png" alt="logo">
    </header>

    <main>

      <div id="select">
        <label for="type">Filtra per genere</label>
      </div>

      <div class="container">
        <!-- Stampo con il V-for di Vue tutti i valori dell'array Albums -->
        <div class="artist-box" v-for="album in albums">
          <div class="artist-album">
            <img class="artist-img" :src="album.poster" :alt="album.title">
            <div class="overlay"><i class="far fa-play-circle"></i></div>
            <a href="#"><h5 class="white-txt capslock">{{ album.title }}</h5></a>
            <a href="#"><p>{{ album.author }}</p></a>
            <a href="#"><p>{{ album.year }}</p></a>
          </div>
        </div>
      </div>

    </main>

  </div>


  <script src="app.js" charset="utf-8"></script>
</body>
</html>
