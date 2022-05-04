<?php
include('data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Php Google Faq</title>
</head>
<body>
<header>
    <div class="row">
        <div class="col-12 d-flex align-items-center">
            <img src="img/Google_2015_logo.svg.png" alt="">
            <h4>Privacy e termini</h4>
        </div>
        <div class="col-12">
            <ul>
                <li>Introduzione</li>
                <li>Norme sulla privacy</li>
                <li>Termini di servizio</li>
                <li>Tecnologie</li>
                <li>Domande frequenti</li>
            </ul>
        </div>
    </div>
</header>
<main>
    <div class="container">
     
        <?php
            foreach($faq as $item) {
                    $question = $item['question'];
                    $answer = $item['answer'];
            
                    echo('<div>' . '<h2>' . $question . '</h2>');
                    echo('<p>' . $answer . '</p>' . '</div>');

                // $paragraph = explode('.', $answer);
                // for($i = 0; $i < count($paragraph); $i++) {
                //     echo('<p>' . $paragraph[$i] . '</p>');
                // }
            }
        ?>
    </div>
</main>
</body>
<style lang="scss">
header{
    padding-top: 10px;
    padding-left: 10px;
    border-bottom: 0.5px solid grey;
}
header img {
    width:5%;
    margin-right:10px;
}
header ul{
    margin-top: 10px;
    padding-left:0px;
}
header li{
    display: inline;
    margin-right: 20px;
}
    
</style>
</html>