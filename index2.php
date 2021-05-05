<?php

  include __DIR__ . '/database.php';

?>


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

  <link rel="stylesheet" href="style.css">
  <title>Vue dischi</title>
</head>
<body>

  <div id="root">
    <header>
      <img src="img/download.png" alt="logo">
    </header>

    <main>

      <div id="select">
        <label for="type">Filtra per genere</label>
      </div>

      <div class="container">

        
          <?php foreach ($albums as $album): ?>
            <div class="artist-box">
              <div class="artist-album">
                <img class="artist-img" src="<?php echo $album['poster']; ?>" alt="<?php echo $album['title']; ?>">
                <div class="overlay"><i class="far fa-play-circle"></i></div>
                <a href="#">
                  <h5 class="white-txt capslock"><?php echo $album['title']; ?></h5>
                </a>
                <a href="#"><p><?php echo $album['author']; ?></p></a>
                <a href="#"><p><?php echo $album['year']; ?></p></a>
              </div>
            </div>
          <?php endforeach; ?>
      </div>

    </main>

  </div>


  <script src="app.js" charset="utf-8"></script>
</body>
</html>
