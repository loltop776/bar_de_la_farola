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
    <title>CARTA DEL DÍA</title>
    <link rel="stylesheet" href="../stylesheets/stylesheet.css">
</head>
<body>
    
    <!-- Hago cuadrados para representarlos como estrellas, cada cuadrado es una estrella en diferente posición -->

    <section class="square1">.</section>
    <section class="square2">.</section>
    <section class="square3">.</section>
    <section class="square4">.</section>
    <section class="square5">.</section>
    <section class="square6">.</section>
    <section class="square7">.</section>
    <section class="square8">.</section>
    <section class="square9">.</section>
    <section class="square10">.</section>
    <section class="square11">.</section>
    <section class="square12">.</section>
    <section class="square13">.</section>
    <section class="square14">.</section>
    <section class="square15">.</section>
    <section class="square16">.</section>
    <section class="square17">.</section>
    <section class="square18">.</section>
    <section class="square19">.</section>
    <section class="square20">.</section>
    <section class="square21">.</section>
    <section class="square22">.</section>
    <section class="square23">.</section>
    <section class="square24">.</section>
    <section class="square25">.</section>
    <section class="square26">.</section>
    <section class="square27">.</section>
    <section class="square28">.</section>
    <section class="square29">.</section>
    <section class="square30">.</section>
    <section class="square31">.</section>
    <section class="square32">.</section>
    <section class="square33">.</section>
    <section class="square34">.</section>
    <section class="square35">.</section>
    <section class="square36">.</section>
    <section class="square37">.</section>
    <section class="square38">.</section>
    <section class="square39">.</section>
    <section class="square40">.</section>
    <section class="square41">.</section>
    <section class="square42">.</section>
    <section class="square43">.</section>
    <section class="square44">.</section>
    <section class="square45">.</section>
    <section class="square46">.</section>
    <section class="square47">.</section>
    <section class="square48">.</section>
    <section class="square49">.</section>
    <section class="square50">.</section>
    <section class="square51">.</section>

    <?php
    if(file_exists('../xml/menu.xml')){

        $menu = simplexml_load_file('../xml/menu.xml');

    } else {

        echo "<script>alert('Error al cargar el XML')</script>";

    }
    ?>

    <section class="first_plate_content">

        <article class="first_plate_title">

            <h2>Primeros Platos</h2>

        </article>


        <?php

            if(isset($menu)){

                foreach($menu as $first_plate){

                    if($first_plate['first']){
                        echo "<article class='plate'>";
                        echo "<p>Título: " . $first_plate->title . "</p>";
                        echo "</article>"; 
                    }
                }

            }


        ?>

    </section>


</body>
</html>