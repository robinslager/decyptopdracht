<?php

$char_1 = 'a';
$char_2 = 'a';
$char_3 = 'a';
$char_4 = 'a';
$pass = $char_1 . $char_2 . $char_3 . $char_4;
goto start;


letters:


//// let the first one go up 1  until z than change it to uppercase when it hits Z make number of it (0)
//// if number is equal to 9 let make char_2 go 1 up enz..
if (substr($pass, -4, 4) === '9999'){
    goto check;
}
elseif (substr($pass, -4, 3) === '999'){
    $char_1 = 'a';
    $char_2 = 'a';
    $char_3 = 'a';
    ++$char_4;
    goto check;
}
elseif (substr($pass, -4, 2) === '99'){
    $char_1 = 'a';
    $char_2 = 'a';
    ++$char_3;
    goto check;
}
elseif (substr($pass, -4, 1) === '9'){
    $char_1 = 'a';
    ++$char_2;
    goto check;
}
if($char_1 === 'z'){
    $char_1 = 'A';

    goto check;

}
elseif($char_1 === 'Z'){ $char_1 = '!'; goto check; }
elseif($char_1 === '!'){ $char_1 = '~'; goto check; }
elseif($char_1 === '~'){ $char_1 = '@'; goto check; }
elseif($char_1 === '@'){ $char_1 = '#'; goto check; }
elseif($char_1 === '#'){ $char_1 = '$'; goto check; }
elseif($char_1 === '$'){ $char_1 = '%'; goto check; }
elseif($char_1 === '%'){ $char_1 = '^'; goto check; }
elseif($char_1 === '^'){ $char_1 = '&'; goto check; }
elseif($char_1 === '&'){ $char_1 = '*'; goto check; }
elseif($char_1 === '*'){ $char_1 = '('; goto check; }
elseif($char_1 === '('){ $char_1 = ')'; goto check; }
elseif($char_1 === ')'){ $char_1 = '_'; goto check; }
elseif($char_1 === '_'){ $char_1 = '-'; goto check; }
elseif($char_1 === '-'){ $char_1 = '+'; goto check; }
elseif($char_1 === '+'){ $char_1 = '='; goto check; }
elseif($char_1 === '='){ $char_1 = '{'; goto check; }
elseif($char_1 === '{'){ $char_1 = '}'; goto check; }
elseif($char_1 === '}'){ $char_1 = '['; goto check; }
elseif($char_1 === '['){ $char_1 = ']'; goto check; }
elseif($char_1 === ']'){ $char_1 = '|'; goto check; }
elseif($char_1 === '|'){ $char_1 = ';'; goto check; }
elseif($char_1 === ';'){ $char_1 = ':'; goto check; }
elseif($char_1 === ':'){ $char_1 = '<'; goto check; }
elseif($char_1 === '<'){ $char_1 = '>'; goto check; }
elseif($char_1 === '>'){ $char_1 = ','; goto check; }
elseif($char_1 === ','){ $char_1 = '.'; goto check; }
elseif($char_1 === '.'){ $char_1 = '/'; goto check; }
elseif($char_1 === '/'){ $char_1 = '?'; goto check; }
elseif($char_1 === '?'){ $char_1 = '`'; goto check; }
elseif($char_1 === '`'){ $char_1 = '£'; goto check; }
elseif($char_1 === '£'){ $char_1 = '€'; goto check; }
elseif($char_1 === '€'){ $char_1 = '¢'; goto check; }
elseif($char_1 === '¢'){ $char_1 = '¥'; goto check; }
elseif($char_1 === '¥'){ $char_1 = '§'; goto check; }
elseif($char_1 === '§'){ $char_1 = '0'; goto check; }
if($char_2 === 'z' && $char_1 === 'a'){
    $char_2 = 'A';

    goto check;
}

elseif($char_2 === 'Z' && $char_1 === 'a'){ $char_2 = '!'; goto check; }
elseif($char_2 === '!' && $char_1 === 'a'){ $char_2 = '~'; goto check; }
elseif($char_2 === '~' && $char_1 === 'a'){ $char_2 = '@'; goto check; }
elseif($char_2 === '@' && $char_1 === 'a'){ $char_2 = '#'; goto check; }
elseif($char_2 === '#' && $char_1 === 'a'){ $char_2 = '$'; goto check; }
elseif($char_2 === '$' && $char_1 === 'a'){ $char_2 = '%'; goto check; }
elseif($char_2 === '%' && $char_1 === 'a'){ $char_2 = '^'; goto check; }
elseif($char_2 === '^' && $char_1 === 'a'){ $char_2 = '&'; goto check; }
elseif($char_2 === '&' && $char_1 === 'a'){ $char_2 = '*'; goto check; }
elseif($char_2 === '*' && $char_1 === 'a'){ $char_2 = '('; goto check; }
elseif($char_2 === '(' && $char_1 === 'a'){ $char_2 = ')'; goto check; }
elseif($char_2 === ')' && $char_1 === 'a'){ $char_2 = '_'; goto check; }
elseif($char_2 === '_' && $char_1 === 'a'){ $char_2 = '-'; goto check; }
elseif($char_2 === '-' && $char_1 === 'a'){ $char_2 = '+'; goto check; }
elseif($char_2 === '+' && $char_1 === 'a'){ $char_2 = '='; goto check; }
elseif($char_2 === '=' && $char_1 === 'a'){ $char_2 = '{'; goto check; }
elseif($char_2 === '{' && $char_1 === 'a'){ $char_2 = '}'; goto check; }
elseif($char_2 === '}' && $char_1 === 'a'){ $char_2 = '['; goto check; }
elseif($char_2 === '[' && $char_1 === 'a'){ $char_2 = ']'; goto check; }
elseif($char_2 === ']' && $char_1 === 'a'){ $char_2 = '|'; goto check; }
elseif($char_2 === '|' && $char_1 === 'a'){ $char_2 = ';'; goto check; }
elseif($char_2 === ';' && $char_1 === 'a'){ $char_2 = ':'; goto check; }
elseif($char_2 === ':' && $char_1 === 'a'){ $char_2 = '<'; goto check; }
elseif($char_2 === '<' && $char_1 === 'a'){ $char_2 = '>'; goto check; }
elseif($char_2 === '>' && $char_1 === 'a'){ $char_2 = ','; goto check; }
elseif($char_2 === ',' && $char_1 === 'a'){ $char_2 = '.'; goto check; }
elseif($char_2 === '.' && $char_1 === 'a'){ $char_2 = '/'; goto check; }
elseif($char_2 === '/' && $char_1 === 'a'){ $char_2 = '?'; goto check; }
elseif($char_2 === '?' && $char_1 === 'a'){ $char_2 = '`'; goto check; }
elseif($char_2 === '`' && $char_1 === 'a'){ $char_2 = '£'; goto check; }
elseif($char_2 === '£' && $char_1 === 'a'){ $char_2 = '€'; goto check; }
elseif($char_2 === '€' && $char_1 === 'a'){ $char_2 = '¢'; goto check; }
elseif($char_2 === '¢' && $char_1 === 'a'){ $char_2 = '¥'; goto check; }
elseif($char_2 === '¥' && $char_1 === 'a'){ $char_2 = '§'; goto check; }
elseif($char_2 === '§' && $char_1 === 'a'){ $char_2 = '0'; goto check; }
if($char_3 === 'z' && $char_1 === 'a' && $char_2 === 'a'){
    $char_3 = 'A';
    goto check;
}
elseif($char_3 === 'Z'&& $char_1 === 'a' && $char_2 === 'a'){
    $char_3 = 0;
    goto check;
}
elseif($char_3 === 'Z' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '!'; goto check; }
elseif($char_3 === '!' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '~'; goto check; }
elseif($char_3 === '~' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '@'; goto check; }
elseif($char_3 === '@' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '#'; goto check; }
elseif($char_3 === '#' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '$'; goto check; }
elseif($char_3 === '$' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '%'; goto check; }
elseif($char_3 === '%' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '^'; goto check; }
elseif($char_3 === '^' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '&'; goto check; }
elseif($char_3 === '&' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '*'; goto check; }
elseif($char_3 === '*' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '('; goto check; }
elseif($char_3 === '(' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = ')'; goto check; }
elseif($char_3 === ')' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '_'; goto check; }
elseif($char_3 === '_' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '-'; goto check; }
elseif($char_3 === '-' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '+'; goto check; }
elseif($char_3 === '+' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '='; goto check; }
elseif($char_3 === '=' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '{'; goto check; }
elseif($char_3 === '{' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '}'; goto check; }
elseif($char_3 === '}' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '['; goto check; }
elseif($char_3 === '[' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = ']'; goto check; }
elseif($char_3 === ']' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '|'; goto check; }
elseif($char_3 === '|' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = ';'; goto check; }
elseif($char_3 === ';' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = ':'; goto check; }
elseif($char_3 === ':' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '<'; goto check; }
elseif($char_3 === '<' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '>'; goto check; }
elseif($char_3 === '>' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = ','; goto check; }
elseif($char_3 === ',' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '.'; goto check; }
elseif($char_3 === '.' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '/'; goto check; }
elseif($char_3 === '/' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '?'; goto check; }
elseif($char_3 === '?' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '`'; goto check; }
elseif($char_3 === '`' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '£'; goto check; }
elseif($char_3 === '£' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '€'; goto check; }
elseif($char_3 === '€' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '¢'; goto check; }
elseif($char_3 === '¢' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '¥'; goto check; }
elseif($char_3 === '¥' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '§'; goto check; }
elseif($char_3 === '§' && $char_1 === 'a' && $char_2 === 'a'){ $char_3 = '0'; goto check; }
if($char_4 === 'z' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){
    $char_4 = 'A';
    goto check;
}
elseif($char_4 === 'Z' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){
    $char_4 = 0;
    goto check;
}
elseif($char_4 === 'Z' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '!'; goto check; }
elseif($char_4 === '!' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '~'; goto check; }
elseif($char_4 === '~' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '@'; goto check; }
elseif($char_4 === '@' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '#'; goto check; }
elseif($char_4 === '#' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '$'; goto check; }
elseif($char_4 === '$' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '%'; goto check; }
elseif($char_4 === '%' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '^'; goto check; }
elseif($char_4 === '^' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '&'; goto check; }
elseif($char_4 === '&' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '*'; goto check; }
elseif($char_4 === '*' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '('; goto check; }
elseif($char_4 === '(' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = ')'; goto check; }
elseif($char_4 === ')' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '_'; goto check; }
elseif($char_4 === '_' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '-'; goto check; }
elseif($char_4 === '-' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '+'; goto check; }
elseif($char_4 === '+' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '='; goto check; }
elseif($char_4 === '=' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '{'; goto check; }
elseif($char_4 === '{' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '}'; goto check; }
elseif($char_4 === '}' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '['; goto check; }
elseif($char_4 === '[' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = ']'; goto check; }
elseif($char_4 === ']' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '|'; goto check; }
elseif($char_4 === '|' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = ';'; goto check; }
elseif($char_4 === ';' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = ':'; goto check; }
elseif($char_4 === ':' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_3 = '<'; goto check; }
elseif($char_4 === '<' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_3 = '>'; goto check; }
elseif($char_4 === '>' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_3 = ','; goto check; }
elseif($char_4 === ',' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '.'; goto check; }
elseif($char_4 === '.' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '/'; goto check; }
elseif($char_4 === '/' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '?'; goto check; }
elseif($char_4 === '?' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '`'; goto check; }
elseif($char_4 === '`' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '£ '; goto check; }
elseif($char_4 === '£' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '€'; goto check; }
elseif($char_4 === '€' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '¢'; goto check; }
elseif($char_4 === '¢' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '¥'; goto check; }
elseif($char_4 === '¥' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '§'; goto check; }
elseif($char_4 === '§' && $char_1 === 'a' && $char_2 === 'a' && $char_3 === 'a'){ $char_4 = '0'; goto check; }





++$char_1;
check:
$pass = $char_1 . $char_2 . $char_3 . $char_4;

start:
$text = openssl_decrypt('9wJDdUL4YibZQZairPZlj5eEsotjh+LDG78IaZdh4H0=', 'aes128', $pass);
$text2 = openssl_decrypt('LfIZUJN/1hMeAt2+gSH5qnriYEmONHZPtyvka1uGm7al/aqhdmdnCu6VEXJMhIm/', 'aes128', $pass);


if(isset($text) && isset($text2)){

    if(substr($text, -10, 6) === 'ditZitErIn'){

        echo $text;
        echo $pass;
    }
    elseif (substr($text2, -10, 6) === 'ditZit'){

        echo $text;
        echo $pass;
    }
    elseif($pass === '9999'){
        echo 'no password found';
    }
    else{
        //echo $pass . ' ';
        goto letters;
    }
}






