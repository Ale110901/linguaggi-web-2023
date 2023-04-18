<?php
$dim_img = [
  [   '0',    '0'],
  ['1200',  '630'],
  [ '300',  '300'],
  [ '660',  '450'],
  ['1024',  '683'],
  ['1024',  '621'],
  ['1920', '1080'],
  ['1920', '1080'],
];

?>

<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
  <title>Galleria</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rampart+One&amp;display=swap" />
  <link rel="stylesheet" type="text/css" href="stile.css" />
</head>

<body>

  <div id="header">
    <h1><a href="index.html">R&amp;C GYM</a></h1>
    <table id="menu">
      <tbody>
        <tr>
          <td><a href="index.html">Homepage</a></td>
          <td><a href="corsi.html">Corsi</a></td>
          <td><a href="servizi.html">Servizi</a></td>
          <td><a href="galleria.html">Galleria</a></td>
          <td><a href="info.html">Informazioni</a></td>
        </tr>
      </tbody>
    </table>
    <hr />
  </div>

  <div id="contenuto">
    <h2>GALLERIA</h2>
    <div id="galleria" class="pb-32">
      <div>
        <div>
          <img src="res/foto-1.png" alt="Immagine 1" />
        </div>
        <div>
          <img src="res/foto-2.png" alt="Immagine 2" />
        </div>
        <div>
          <img src="res/foto-4.png" alt="Immagine 4" />
        </div>
      </div>
      <div>
        <div>
          <img src="res/foto-7.png" alt="Immagine 7" />
        </div>
        <div>
          <img src="res/foto-5.png" alt="Immagine 5" />
        </div>
      </div>
      <div>
        <div>
          <img src="res/foto-3.png" alt="Immagine 3" />
        </div>
        <div>
          <img src="res/foto-6.png" alt="Immagine 6" />
        </div>
      </div>
    </div>

    <?php
      $cartella_immagini = 'res';
      $rdi = new RecursiveDirectoryIterator ( $cartella_immagini );
      $rii = new RecursiveIteratorIterator ( $rdi );
      foreach ($rii as $file){
        if($file -> isDir()){
          continue;
        }
        if ( ! in_array( mime_content_type( $file->getPathname() ), array(
          'png' => 'image/png',
          'jpe' => 'image/jpeg',
          'jpeg' => 'image/jpeg',
          'jpg' => 'image/jpeg',
          'gif' => 'image/gif',
        ) ) ) {
          continue;
        }
        echo '<p>' . $file->getFilename() . '</p>';
      }
    ?>
  </div>

  <div id="footer">
    Copyright R&amp;C GYM 2023
  </div>

</body>

</html>
