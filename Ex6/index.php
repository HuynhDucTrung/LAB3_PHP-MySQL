<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Function to transform a string into all uppercase letters
    function toUpperCase($str)
    {
        return strtoupper($str);
    }

    // Function to transform a string into all lowercase letters
    function toLowerCase($str)
    {
        return strtolower($str);
    }

    // Function to make a string's first character uppercase
    function ucfirstString($str)
    {
        return ucfirst($str);
    }

    // Function to make the first characters of all the words in a string uppercase
    function ucwordsString($str)
    {
        return ucwords($str);
    }

    // Sample strings
    $string = "hello world!";
    $string2 = "PHP is FUN.";

    // Transforming strings using the functions
    echo "Original string: $string\n";
    echo "Uppercase: " . toUpperCase($string) . "\n";
    echo "Lowercase: " . toLowerCase($string2) . "\n";
    echo "Ucfirst: " . ucfirstString($string) . "\n";
    echo "Ucwords: " . ucwordsString($string) . "\n";
    ?>

</body>

</html>