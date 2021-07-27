<?php

$faqs = require_once 'Models/Faq.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header></header>
    <main>
        <div class="container">
            <?php 
                foreach($faqs as $faq){
                    echo $faq['request'], $faq['reply'];
                } 
            ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>