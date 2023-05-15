<?php
require_once("connessione.php");

$conn_db = connessione_db();

session_start();

$sessione = isset($_SESSION['id_utente']) && !is_nan($_SESSION['id_utente']);
$login = isset($_POST['azione']) && $_POST['azione'] === 'accedi';

if ($sessione) {
  $loggato = true;
  $redirect = $_GET['redirect'];

} else if (!$login) {
  $loggato = false;
  $redirect = $_GET['redirect'];
  
} else {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $redirect = $_POST['redirect'];

  $query  = "SELECT id FROM " . TBL_UTENTI . " ";
  $query .= "WHERE username = '$username' AND password = MD5('$password') ";
  $query .= "LIMIT 1";

  try {
    $result = mysqli_query($conn_db, $query);
    $row = mysqli_fetch_assoc($result);
    if (!$row) {
      $loggato = false;
    } else {
      $loggato = true;
      $_SESSION['id_utente'] = $row['id'];
    }
  } catch (Exception $err) {
    $cod_err = $err->getSqlState();
    if ($cod_err === '23000') {
      $loggato = false;
    } else {
      printf("Problemi nell'inserimento dei dati nella tabella %s.\n", TBL_UTENTI);
      exit();
    }
  }
}

if ($loggato) {
  if (!isset($redirect) || $redirect === '') {
    $redirect = 'index.html';
  }
  header('Location: ' . $redirect);
  exit();
}
?>
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
  <title>Corsi</title>
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
          <td><a href="shop.php">Shop</a></td>
          <td><a href="info.html">Informazioni</a></td>
        </tr>
      </tbody>
    </table>
    <hr />
  </div>

  <div id="contenuto" class="centrato">
    <div id="form-account" class="mb-32 mt-32">
      <h2 class="pb-16 pt-16 outline-font-login">LOGIN</h2>
      <form action="login.php" method="POST" >
        <label for="username">Nome utente:</label><br>
        <input type="text" id="username" name="username"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <button type="submit" name="azione" value="accedi" class="button">Accedi</button>

        <input type="hidden" name="redirect" value="<?php echo($redirect); ?>"></input>
      </form>
      <div class="pt-16 mb-8">
        <a href="registrazione.php">Registra un nuovo account</a>
<?php if ($login && !$loggato) { ?>
        <p>Nome utente o password non corretti.</p>
<?php } ?>
      </div>
    </div>
  </div>

  <div id="footer">
    Copyright R&amp;C GYM 2023
  </div>
</body>

</html>