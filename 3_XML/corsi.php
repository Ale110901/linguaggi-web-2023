<?php session_start(); ?>
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
  <title>Corsi &ndash; R&amp;C gym</title>
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
      <a href="login.php?redirect=corsi.php">LOGIN</a>
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
    <h2 class="pb-16">CORSI</h2>

    <div class="contenitore">
      <div>
        <img class="scatola" src="res/bruciagrassi.png" alt="Bruciagrassi"></img>
      </div>
      <div>
        <h3 class="centrato outline-font">Bruciagrassi</h3>
        <p class="giustificato">
          Scopri tutti i corsi bruciagrassi come Aerobica, Funzionale, Strong, Step, Group Cycling, Tonyc e molti altri per bruciare calorie e divertirti in compagnia.
          <br />
        </p>
        <p class="centrato mt-32"><a type="submit" class="button" href="prenota.php?corso=bruciagrassi">Verifica disponibilit&agrave;!</a></p>
      </div>
    </div>
    <hr class="hr-corsi" />
    <div class="contenitore">
      <div>
        <h3 class="centrato outline-font">Tonificazione</h3>
        <p class="giustificato">
          Un fisico tonico e prestante è un requisito necessario per il benessere ad ogni età. I corsi di Body Pump, Re-Body, Re-Body GAG, Booty Band, CX Worx, Ginnastica Dolce, Ginnastica Posturale e molti altri ti aiuteranno a raggiungere i tuoi obiettivi.
          <br />
        </p>
        <p class="centrato mt-32"><a type="submit" class="button" href="prenota.php?corso=tonificazione">Verifica disponibilit&agrave;!</a></p>
      </div>
      <div>
        <img class="scatola" src="res/tonificazione.png" alt="Tonificazione"></img>
      </div>
    </div>
    <hr class="hr-corsi" />
    <div class="contenitore">
      <div>
        <img class="scatola" src="res/corpo-mente.png" alt="Corpo-mente"></img>
      </div>
      <div>
        <h3 class="centrato outline-font">Corpo-mente</h3>
        <p class="giustificato">
          I corsi di Yoga e Body Balance si prenderanno cura della tua mente mentre ti prendi cura del tuo corpo. Rilassati, respira e connettiti con te stesso.
          <br />
        </p>
        <p class="centrato mt-32"><a type="submit" class="button" href="prenota.php?corso=corpomente">Verifica disponibilit&agrave;!</a></p>
      </div>
    </div>
    <div class="centrato">
      <a class="button" href="prenotazioni.php">Visualizza prenotazioni</a>
    </div>
  </div>

  <div id="footer">
    Copyright R&amp;C GYM 2023
  </div>
</body>

</html>
