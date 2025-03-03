# PHP Research

### what is PHP?
#
* PHP stands for "PHP: Hypertext Preprocessor". 
* PHP is an open-source, server-side programming language that can be used to create websites, applications, customer relationship management systems and more. It is a widely-used general-purpose language that can be embedded into HTML.

[<u>Reference</u>](https://codeinstitute.net/global/blog/what-is-php-programming/#:~:text=PHP%20is%20an%20open%2Dsource,can%20be%20embedded%20into%20HTML)
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

[<u>Reference</u>](https://www.geeksforgeeks.org/php-types-of-errors/)
#
### echo vs print
#
#### Both are widely used for displaying strings, variables, and HTML content in PHP scripts.
* `echo`: Generally faster , can output multiple strings separated by commas ,and doesn't return any value.
    * Example : `echo "Multiple ","argument"; // Displaying Strings as Multiple Arguments.`
* `print`: Slightly slower, returns a value (1), and only accepts one argument.
    * Example : `print "Hello, World!";  it can only output one string or variable at a time.`
  
[<u>Reference</u>](geeksforgeeks.org/php-echo-print/)
#

### programming language vs scripting language
#
**All scripting languages are programming languages, but not all programming languages are scripting languages.**
|             | Scripting Language                                                                                  | Programming Language                                                                                        |
| ----------- | --------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| Definition  | A scripting language is a language that uses a naive method to bring codes to a runtime environment | A Programming language is a language which is used by humans to navigate their communication with computers |
| Use Case    | They are used to create dynamic web applications                                                    | Programming languages are used to write computer programs                                                   |
| Example     | Bash, Ruby, Python, JavaScript etc.                                                                 | C++, Java, PHP High-level etc.                                                                              |
| Performance | Slower (runtime interpretation)                                                                     | Faster (compiled)                                                                                           |

[<u>Reference</u>](https://www.geeksforgeeks.org/whats-the-difference-between-scripting-and-programming-languages/)
#
### Dynamically typed vs Statically typed language
#
**Dynamically Typed Languages :** A language where variable types are determined at runtime, allowing flexibility but increasing the risk of type-related errors.Examples are Python,JavaScript,PHP,Ruby.

**Statically Typed Languages :**  A language where variable types are checked at compile time, requiring explicit type declarations and ensuring type safety before execution.Examples are C,C++,Java,Go.

[<u>Reference</u>](https://www.baeldung.com/cs/statically-vs-dynamically-typed-languages)

#
### Assign by Value VS Assign by Reference
#
**By Default, Variables Are Always Assigned By Value.**

**Assign by Value :**  A copy of the original value is created and assigned to a new variable.Any Changes to the new variable doesn't affect the original one. 

```
$a = 10;
$b = $a;
$b = 20;
echo $a; // 10
echo $b; // 20
```

**Assign by Reference :** The variable store (point to) memory address instead of the value itself. A change to one of them affect the other one and vice versa.
```
$a = 10;
$b = &$a;
$b = 20;
echo $a; // 20
echo $b; // 20
```
#
### For vs foreach loop in PHP.
#
**For loop:** works at the end of the given condition , It is used for the implementation of variables and works in a single way , it does not work in the case of associative arrays ,and basically consists of three portions or parts:
1. A variable is initialized with a value.
2. The variable is subjected to the condition to which it is compared.
3. Increment/decrement loop counter.

**Foreach loop:** works at the end of the array count , work with variables as well as associative arrays. Therefore, this loop can be implemented in more than one way. 


**The foreach loop is much better and performs better in comparison to the for loop.**

[<u>Reference</u>](https://www.geeksforgeeks.org/what-is-the-difference-between-for-and-foreach-loop-in-php/)
#