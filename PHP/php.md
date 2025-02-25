# PHP Research

### what is PHP?
#
* PHP stands for "PHP: Hypertext Preprocessor". 
* PHP is an open-source, server-side programming language that can be used to create websites, applications, customer relationship management systems and more. It is a widely-used general-purpose language that can be embedded into HTML.

[Reference](https://codeinstitute.net/global/blog/what-is-php-programming/#:~:text=PHP%20is%20an%20open%2Dsource,can%20be%20embedded%20into%20HTML)
#
### what r the three main error types in PHP?
#

#### In PHP, there are three main types of errors:

1. Parse error or Syntax Error: Occur when there is a mistake in the syntax of the code.
    * Example : `echo $x; // Undefined variable`

2. Fatal Error: It is the type of error where PHP compiler understand the PHP code but it recognizes an undeclared function.
    * Example : `<?php function_Y(); ?>  // Function is not defined`
3. Warning Errors:  The main reason of warning errors are including a missing file. 
    * Example : `include ("task.php");  // Program called missing file`

[Reference](https://www.geeksforgeeks.org/php-types-of-errors/)
#
### echo vs print
#
#### Both are widely used for displaying strings, variables, and HTML content in PHP scripts.
* `echo`: Generally faster , can output multiple strings separated by commas ,and doesn't return any value.
    * Example : `echo "Multiple ","argument"; // Displaying Strings as Multiple Arguments.`
* `print`: Slightly slower, returns a value (1), and only accepts one argument.
    * Example : `print "Hello, World!";  it can only output one string or variable at a time.`
  
[Reference](geeksforgeeks.org/php-echo-print/)
#