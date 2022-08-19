<form action="index.php">

  <p>

    Ingresa tu nombre completo: <input type="text" name="txt">

    <input type="submit" value="Enviar la información">

  </p>
  <?php error_reporting(0); echo htmlentities($_GET["txt"]);?>


</form>
 