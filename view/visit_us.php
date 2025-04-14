<?php

if(isset($_SESSION['welcome']) && $_SESSION['welcome'] != 'check'){

    header('Location: ../index.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitanos</title>
    <link rel="stylesheet" href="../stylesheets/stylesheet.css">
</head>
<body>
    
    <header>

        <section class="header_content_image">

            <img src="../img/background_visit_us.png" alt="No se ha podido cargar la imagen">
        
        </section>

        <section class="visit_header_content_letter">

            <h2>Visita nuestra carta</h2>
            <article>
                <p>Somos <strong>El bar de la <span class="farola">FAROLA</span></strong>. Garantizamos un gran servicio y sobretodo un buen sabor de boca, si desea comer hasta explotar y chupándose los dedos este es tu bar.</p>
            </article>
            
            <a href="./letter.php">¡Entra ya!</a>

        </section>

        <section class="visit_header_content_vip">

            <h2><span class="farola">VIP</span></h2>
            <article>
                <p>¿Ya eres cliente <span class="farola">VIP</span> en nuestro bar? Inicia sesión para obtener ventajas de personalización, garantía de devolución por si no te ha gustado el servicio y mucho más.</p>
                <a href="./vip.php">Iniciar sesión</a>
            </article>
            

        </section>


    </header>



</body>
</html>