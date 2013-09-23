<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Voluntarios - Young Life | Vida Joven Costa Rica</title>
<meta name="description" content="Grupo de Jóvenes en Costa Rica con actividades como campamentos, actividades deportivas, reuniones semanales, fiestas y mucho más">
<meta name="keywords" content="voluntario, young life, vida joven, jóvenes cristianos costa rica, campamentos jóvenes, grupos de jóvenes, organizaciones cristianas en costa rica">
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
    <h1>Voluntarios</h1>
    
    <?php
    if(isset($_GET['r']))
    {
        if($_GET['r'])
            echo '<div class="success">Su solicitud ha sido enviada. Pronto estaremos en contacto. ¡Gracias!</div>';
        else
            echo '<div class="error">Ocurrió un error al procesar su solicitud. Por favor inténtelo de nuevo.</div>';
    }
    ?>
    
    <p>Llena tus datos en el siguiente formulario y nos estaremos comunicando contigo para integrarte al equipo. ¡Gracias!</p>
    <form name="voluntario" id="voluntario_form" action="admin/voluntario.php" method="POST">
        <fieldset>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name"/><br/>
            
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