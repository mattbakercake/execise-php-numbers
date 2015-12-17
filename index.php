<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Numbers</title>
</head>

<body>

    <?php
    
        require "lib/AutoLoad.php";
        $number = new lib\Number();
        $number->getString(0);
        
        echo floor(log10(abs(-1))) + 1;
        echo "index Hello World<br/>"; 
    ?>
    
</body>
</html>


