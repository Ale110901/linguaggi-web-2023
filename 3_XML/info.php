<?php session_start(); ?>
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
  <title>Informazioni &ndash; R&amp;C gym</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rampart+One&amp;display=swap" />
  <link rel="stylesheet" type="text/css" href="stile.css" />
</head>

<body>
  <div id="header">
    <h1><a href="index.php">R&amp;C GYM</a></h1>
    <span id="btn-log">
<?php if (isset($_SESSION['id_utente'])) { ?>
      <a href="profilo.php">PROFILO</a>
<?php } else { ?>
      <a href="login.php?redirect=info.php">LOGIN</a>
<?php } ?>
    </span>
    <table id="menu">
      <tbody>
        <tr>
          <td><a href="index.php">Homepage</a></td>
          <td><a href="corsi.php">Corsi</a></td>
          <td><a href="servizi.php">Servizi</a></td>
          <td><a href="shop.php">Shop</a></td>
          <td><a href="info.php">Informazioni</a></td>
        </tr>
      </tbody>
    </table>
    <hr />
  </div>

  <div id="contenuto">
    <h2 class="pb-16">INFORMAZIONI</h2>

    <div class="centrato">
      <a href="https://www.google.com/maps/place/data=!3m1!4b1!4m6!3m5!1s0x13250c86391d8acf:0xd1f1f251e4767ece!8m2!3d41.4705468!4d12.9081403!16s%2Fg%2F1pp2vn0lg"><img class="scatola" src="res/maps.png" alt="Google Maps"></img></a>
      <p class="pt-1em">
        <img src="res/location.png" alt="i"></img>
        Via XXIV Maggio, 7, 04100 Latina LT
      </p>
    </div>

    <div id="griglia-info" class="pb-32">

      <div>
        <h3>Contatti</h3>
        <p>
          cecchetto.1941039@studenti.uniroma1.it  <br />
          roccia.1967318@studenti.uniroma1.it
        </p>
      </div>

      <div>
        <table class="scatola">
          <tbody>
            <tr>
              <th>Giorni</th>
              <th>Orari</th>
            </tr>
            <tr>
              <td>Luned&igrave;</td>
              <td>06:00 - 22:00</td>
            </tr>
            <tr>
              <td>Marted&igrave;</td>
              <td>06:00 - 22:00</td>
            </tr>
            <tr>
              <td>Mercoled&igrave;</td>
              <td>06:00 - 22:00</td>
            </tr>
            <tr>
              <td>Gioved&igrave;</td>
              <td>06:00 - 22:00</td>
            </tr>
            <tr>
              <td>Venerd&igrave;</td>
              <td>06:00 - 22:00</td>
            </tr>
            <tr>
              <td>Sabato</td>
              <td>06:00 - 20:00</td>
            </tr>
            <tr>
              <td>Domenica</td>
              <td>08:00 - 16:00</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>

  </div>

  <div id="footer">
    Copyright R&amp;C GYM 2023
  </div>
</body>

</html>
