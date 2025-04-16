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

    <section class="square1"></section>
    <section class="square2"></section>
    <section class="square3"></section>
    <section class="square4"></section>
    <section class="square5"></section>
    <section class="square6"></section>
    <section class="square7"></section>
    <section class="square8"></section>
    <section class="square9"></section>
    <section class="square10"></section>
    <section class="square11"></section>
    <section class="square12"></section>
    <section class="square13"></section>
    <section class="square14"></section>
    <section class="square15"></section>
    <section class="square16"></section>
    <section class="square17"></section>
    <section class="square18"></section>
    <section class="square19"></section>
    <section class="square20"></section>
    <section class="square21"></section>
    <section class="square22"></section>
    <section class="square23"></section>
    <section class="square24"></section>
    <section class="square25"></section>
    <section class="square26"></section>
    <section class="square27"></section>
    <section class="square28"></section>
    <section class="square29"></section>
    <section class="square30"></section>
    <section class="square31"></section>
    <section class="square32"></section>
    <section class="square33"></section>
    <section class="square34"></section>
    <section class="square35"></section>
    <section class="square36"></section>
    <section class="square37"></section>
    <section class="square38"></section>
    <section class="square39"></section>
    <section class="square40"></section>
    <section class="square41"></section>
    <section class="square42"></section>
    <section class="square43"></section>
    <section class="square44"></section>
    <section class="square45"></section>
    <section class="square46"></section>
    <section class="square47"></section>
    <section class="square48"></section>
    <section class="square49"></section>
    <section class="square50"></section>
    <section class="square51"></section>

    <!-- <section class="nave1"></section>
    <section class="b_nave1"></section> -->

    <?php
    if(file_exists('../xml/menu.xml')){

        $menu = simplexml_load_file('../xml/menu.xml');

    } else {

        echo "<script>alert('Error al cargar el XML')</script>";

    }
    ?>


    <section class="general_content">

        

        <section class="plate_content">

            <section class="plate_title">

                <h2>Entrantes</h2>

                <?php

                if(isset($menu)){

                    foreach($menu as $starter){

                        if($starter['starter']){
                            echo "<article class='plate'>";
                            echo "<div class='plate_ajust'>";
                                echo "<h4 class='plate_title'>" . $starter->title . "</h4>";
                                // if($firstplate->carac){

                                //     echo "<div class='mult_images'>";
                                //     echo "<img class='plate_img' src='" . $first_plate->carac . "'>";
                                //     echo "<img class='plate_img' src='" . $first_plate->carac2 . "'>";
                                //     echo "</div>";

                                // } else{
                                //     echo "<img class='plate_img' src='" . $first_plate->carac . "'>";
                                // }
                            echo "<img class='plate_img' src='" . $starter->carac . "'>";
                            echo "</div>";
                            echo "<p>" . $starter->description . "</p>";
                            echo "<div class='plate_ajust'>";
                                echo "<p class='cal'>" . $starter->calories . "</p>";
                                echo "<p class='price'>" . $starter->price . "</p>";
                            echo "</div>";
                            echo "</article>"; 
                        }
                    }

                }


            ?>

            </section>
            <section class="plate_title">
                <h2>Postres</h2>

                <?php

                if(isset($menu)){

                    foreach($menu as $desserts){

                        if($desserts['desserts']){
                            echo "<article class='plate'>";
                            echo "<div class='plate_ajust'>";
                                echo "<h4 class='plate_title'>" . $desserts->title . "</h4>";
                                // if($firstplate->carac){

                                //     echo "<div class='mult_images'>";
                                //     echo "<img class='plate_img' src='" . $first_plate->carac . "'>";
                                //     echo "<img class='plate_img' src='" . $first_plate->carac2 . "'>";
                                //     echo "</div>";

                                // } else{
                                //     echo "<img class='plate_img' src='" . $first_plate->carac . "'>";
                                // }
                            echo "<img class='plate_img' src='" . $desserts->carac . "'>";
                            echo "</div>";
                            echo "<p>" . $desserts->description . "</p>";
                            echo "<div class='plate_ajust'>";
                                echo "<p class='cal'>" . $desserts->calories . "</p>";
                                echo "<p class='price'>" . $desserts->price . "</p>";
                            echo "</div>";
                            echo "</article>"; 
                        }
                    }

                }


            ?>


            </section>

        </section>

        <section class="plate_content">

            <article class="plate_title">

                <h2>Primeros Platos</h2>

            </article>

            <?php

                if(isset($menu)){

                    foreach($menu as $first_plate){

                        if($first_plate['first']){
                            echo "<article class='plate'>";
                            echo "<div class='plate_ajust'>";
                                echo "<h4 class='plate_title'>" . $first_plate->title . "</h4>";
                                // if($firstplate->carac){

                                //     echo "<div class='mult_images'>";
                                //     echo "<img class='plate_img' src='" . $first_plate->carac . "'>";
                                //     echo "<img class='plate_img' src='" . $first_plate->carac2 . "'>";
                                //     echo "</div>";

                                // } else{
                                //     echo "<img class='plate_img' src='" . $first_plate->carac . "'>";
                                // }
                            echo "<img class='plate_img' src='" . $first_plate->carac . "'>";
                            echo "</div>";
                            echo "<p>" . $first_plate->description . "</p>";
                            echo "<div class='plate_ajust'>";
                                echo "<p class='cal'>" . $first_plate->calories . "</p>";
                                echo "<p class='price'>" . $first_plate->price . "</p>";
                            echo "</div>";
                            echo "</article>"; 
                        }
                    }

                }


            ?>

        </section>

        <section class="plate_content">

            <article class="plate_title">

                <h2>Segundos Platos</h2>

            </article>

            <?php

                if(isset($menu)){

                    foreach($menu as $second_plate){

                        if($second_plate['second']){
                            echo "<article class='plate'>";
                            echo "<div class='plate_ajust'>";
                                echo "<h4 class='plate_title'>" . $second_plate->title . "</h4>";
                                // if($firstplate->carac){

                                //     echo "<div class='mult_images'>";
                                //     echo "<img class='plate_img' src='" . $first_plate->carac . "'>";
                                //     echo "<img class='plate_img' src='" . $first_plate->carac2 . "'>";
                                //     echo "</div>";

                                // } else{
                                //     echo "<img class='plate_img' src='" . $first_plate->carac . "'>";
                                // }
                            echo "<img class='plate_img' src='" . $second_plate->carac . "'>";
                            echo "</div>";
                            echo "<p>" . $second_plate->description . "</p>";
                            echo "<div class='plate_ajust'>";
                                echo "<p class='cal'>" . $second_plate->calories . "</p>";
                                echo "<p class='price'>" . $second_plate->price . "</p>";
                            echo "</div>";
                            echo "</article>"; 
                        }
                    }

                }


            ?>

        </section>

    </section>
    


</body>
</html>