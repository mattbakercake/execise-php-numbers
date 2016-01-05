#   Number Integer to String Converter

###    The problem
*Write a program that given a whole number will return the string representation 
of that number e.g. 1 returns "One", 375 returns "Three Hundred and Seventy Five" etc.*       

This was an intriguing and suprisingly deceptive teaser that tempted me to create a working
solution! To practice a test-driven approach, I chose to write simple unit tests first at each
stage, to check the code written was ouputting the expected result.  The solution has a simple 
and arbitrary structure, and uses namespaces and a class autoloader to implement this.
It is intended that the solution is run from the commandline rather than a browser.

I limited the numbers that the solution should address to between 0-999999.

### Install the solution
Clone this git repository to a system that is running PHP5

### Run the unit tests
If your system has PHPUnit installed you can run the unit tests, by navigating 
to the directory of the solution in a terminal window and running the command ```phpunit --bootstrap lib/AutoLoad.php tests```

### Running the solution
Open a terminal window on your system and navigate to the directory containing the solution.  Type the command
```php index.php```