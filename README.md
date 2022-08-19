De está forma quitaremos la vulnerabilidad html de un formulario:
<br>
Añadiendo htmlentities(variable)
arreglaremos(FIX)
Al añadir un codigo html en nuestro formulario
<br>
error_reporting(0); echo htmlentities($_GET["txt"]);
<br>
<br>
De lo contrario sera vulnerable:
<br>
php error_reporting(0); echo $_GET["txt"];
