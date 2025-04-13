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
</head>
<body>
    
    <header>

        <section class="header_content_image">

            <img src="" alt="">
        
        </section>

        <section class="header_content_options">

            <article class="header_content_options_default">

                <a href="./letter.php">Test1</a>

            </article>

            <article class="header_content_options_vip">

                <a href="./vip.php">Test2</a>

            </article>

        </section>




    </header>



</body>
</html>