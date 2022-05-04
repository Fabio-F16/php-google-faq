<?php
include('data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Google Faq</title>
</head>
<body>
<header>
 
</header>
<main>
    <div class="container">
     
        <?php
        
       foreach($faq as $item) {
           echo('<h2>' . $item['question'] . '</h2>');
           echo('<p>' . $item['answer'] . '</p>');

       }
        ?>

       
      
    </div>
</main>
</body>
</html>