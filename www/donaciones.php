<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Donaciones - Young Life | Vida Joven Costa Rica</title>
<meta name="description" content="Grupo de Jóvenes en Costa Rica con actividades como campamentos, actividades deportivas, reuniones semanales, fiestas y mucho más">
<meta name="keywords" content="donaciones, young life, vida joven, jóvenes cristianos costa rica, campamentos jóvenes, grupos de jóvenes, organizaciones cristianas en costa rica">
<meta name="robots" content="index,follow">
<meta name="lang" content="es">
<meta name="rating" content="GENERAL">
<meta name="distribution" content="GLOBAL">
<meta name="classification" content="Religion">
<meta name="copyright" content="Young Life Costa Rica">
<meta name="author" content="http://www.intergraphicdesigns.com">
<meta http-equiv="reply-to" content="info@vidajovencr.org">
<meta name="originatorjurisdiction" content="Costa Rica">
<meta name="revisit-after" content="2 days">
<meta name="ROBOTS" content="follow,all">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="shortcut icon" href="img/favicon.gif" />
</head>

<body>
<?php
    include("menu.php");
    include("header.php");
?>
<section id="content">
    <h1>Donaciones</h1>
    
    <?php
    if(isset($_GET['r']))
    {
        if($_GET['r'])
            echo '<div class="success">Su solicitud ha sido enviada. Pronto estaremos en contacto. ¡Gracias!</div>';
        else
            echo '<div class="error">Ocurrió un error al procesar su solicitud. Por favor inténtelo de nuevo.</div>';
    }
    ?>
    <h2>Lo que se Necesita</h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th colspan="3">UNA VEZ AL AÑO</th>
            <th colspan="3">MENSUALMENTE</th>
        </tr>
        <tr>
            <td># de personas</td>
            <td>Monto</td>
            <td>Total</td>
            <td># de personas</td>
            <td>Monto</td>
            <td>Total</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1.000.000</td>
            <td>1.000.000</td>
            <td>12</td>
            <td>100.000</td>
            <td>144.400.00</td>
        </tr>
        <tr>
            <td>5</td>
            <td>500.000</td>
            <td>2.500.000</td>
            <td>25</td>
            <td>50.000</td>
            <td>15.000.00</td>
        </tr>
        <tr>
            <td>8</td>
            <td>250.000</td>
            <td>2.000.000</td>
            <td>35</td>
            <td>25.000</td>
            <td>10.500.00</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td>40</td>
            <td>10.000</td>
            <td>4.800.000</td>
        </tr>
        <tr>
            <td>Total</td>
            <td></td>
            <td>5.500.000</td>
            <td>Total</td>
            <td></td>
            <td>44.700.000</td>
        </tr>
    </table>
    
    <h2>Conviertete en Donador</h2>
    <p>Llena tus datos en el siguiente formulario y nos estaremos comunicando contigo para completar tu donación. ¡Gracias!</p>
    <form name="donacion" id="donacion_form" action="admin/donacion.php" method="POST">
        <fieldset>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name"/><br/>
            
            <label for="id">Numero de identificación:</label>
            <input type="text" name="id" id="id"/><br/> 
            
            <label for="qnty">Cantidad:</label>
            <input type="text" name="qnty" id="qnty"/>
            <input type="radio" name="type" value="0">Mensual
            <input type="radio" name="type" value="1">Anual<br/>
            
            <label for="phone">Teléfono Celular:</label>
            <input type="text" name="phone" id="phone"/><br/>
            
            <label for="email">Email:</label>
            <input type="text" name="email" id="email"/><br/>
            
            <label for="address">Dirección:</label>
            <input type="text" name="address" id="address"/><br/>
            
            <input type="submit" value="Enviar"/>
        </fieldset>
    </form>
    
</section>
<?php
	include("footer.php");
?>
</body>
</html>