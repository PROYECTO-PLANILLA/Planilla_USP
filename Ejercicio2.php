

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        
    </head>
     
    <body>
         <center>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <h1>EJERCICIO 2: RECONOCER EL MENOR NUMERO DE 2 NUMEROS </h1>
         </center>
        <form name="frmUsuario" method="post" required=""  >
            <h3>Ingrese Primero Numero</h3>
             <input type="text" name="num1" required=""><br>
             <h3>Ingrese Segundo Numero</h3>
             <input type="text" name="num2"><br><br>
             <input type="submit" name="cmdEnviar" value="CALCULAR"><br>
             
        </form>
        
        <?php

if(isset($_POST["cmdEnviar"])){
echo '<br />';
$a = $_POST["num1"];
$b = $_POST["num2"];
if($a){}
if ($a > $b) {
    $menor = 'El SEGUNDO NUMERO = '.$b;
}else{ 
     $menor = 'El PRIMERO NUMERO  = '.$a;
}

echo ' <br /> ';
echo 'Se Calculo que El Numero menor seria : ' . $menor .'<br />';
		echo "<script>alert('Se Calculo que El Numero menor seria : . $menor .');</script>";

}

?>
    </body>
   
</html>