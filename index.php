<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php 
        //$filter = array ("bad", "word");
        $message = "This text contains bad word";
        //$message = str_replace($word, "***", $message);
        //echo $message . ' ' . $_GET['word'];
    ?>  
    <pre>
        <?php 
        //var_dump($message . ' ' . $_GET['word']);
        ?>
    </pre>
    <h5>
    La lunghezza del paragrafo è di:<?php  echo strlen($message); ?> caratteri
    </h5>
    <h4>
    <?php
        var_dump($_GET);
        $word = $_GET['word'];
        echo $word;
        ?>
    </h4>
    <?php
        $message = str_replace($word, '***', $message);
    ?>  
    <h1>Messaggio censurato:</b> <?php echo $message;?> </h1> 
</body>
</html>