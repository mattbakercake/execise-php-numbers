 <?php
if (php_sapi_name() === 'cli') //code to run from cli
{
    $valid = FALSE;
    while (!$valid) //collect user input until valid int entered
    {
        echo "Enter Number (Between 0 & 99999):";
        $input = trim(fgets(STDIN));
        
        //when valid input received return the string
        if (filter_var($input, FILTER_VALIDATE_INT) === 0 ||
        filter_var($input, FILTER_VALIDATE_INT) && 
        $input >= 0  && 
        $input <= 999999) 
        {
            require "lib/AutoLoad.php";
            $number = new lib\Number();
            echo $input . " = " . $number->getString($input);
            
            return TRUE;
        }
    }

        
} 
else //code to run in web browser
{
    $html= <<<EOF
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Numbers</title>
</head>

<body>
    <h1>Number Integer to String Converter</h1>
        
    <p>
        Returns a string representing the entered integer from
        0-99999. e.g. for 837 it will return "Eight Hundred And
        Thirty Seven".
    </p>
    
    <h3><em>*Note this is run from the commandline</em></h3>
        
    <p>
        Open a terminal window on a machine running PHP, navigate to
        the directory containing the code and enter "php index.php"
    </p>
</body>
</html>
EOF;

echo $html;
}