<!--<!DOCTYPE html>-->
<html>
<head>
<title> MyFirstPHPWebpage </title>
<meta charset="utf-8" />
<link href="style1.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <h2><?php print( "Hello, World from PHP!" ); ?></h2>
<!--    /* 
     * here i simply used print function to print the texts
    */-->
    <?php
    $_SERVER['PHP_SELF'] = "/MyFirstPHPWebPage.php"; ?>
<!--/* 
 * here i created a variable $_SERVER['PHP_SELF'] 
 * Whose value is inside a double quoted string
 * PHP will insert the value where the variable name 
 * appears in the string.
/* -->
   <h2><?php print("Script = " . $_SERVER['PHP_SELF']); ?></h2>
<!--/* 
 * here script = is kept within a double quote as part of
 * the print output, the dot(.) joins whatever is on the right of it to what
 * is on the left.
*/-->
</body>
</html>