### LESSON-1

### Topics

1. Basic PHP Syntax
2. PHP Comments
3. PHP Variables
4. PHP Variables Scope
5. PHP echo and print Statements

- ### PHP Syntax ☺️

```
<?php

   // PHP code goes here

?>
```

- ### PHP Comments ✌️

```
// This is a single-line comment


/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

```

- ### PHP variables 💪

Creating (Declaring) PHP Variables
In PHP, a variable starts with the $ sign, followed by the name of the variable:

```

$txt = "Hello world!";
$x = 5;
$y = 10.5;
$ism="Mukhriddinkhan";

```

- ### PHP Variables Scope

In PHP, variables can be declared anywhere in the script.
The scope of a variable is the part of the script where the variable can be referenced/used.
PHP has three different variable scopes:

- ### local
- ### global
- ### static

```

<?php

$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// Warning: Undefined variable $x

echo "<p>Variable x outside function is: $x</p>";

?>



```
