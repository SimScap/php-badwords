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
        $filter = array ("bad", "word");
        $message = "This text contains bad word";
        $message = str_replace($filter, "***", $message);
        echo $message;
    ?>  
    <pre>
        <?php 
        var_dump($message);
        ?>
    </pre>
</body>
</html>