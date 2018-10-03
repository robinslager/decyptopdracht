<?php
/**
 * Created by PhpStorm.
 * User: Marti
 * Date: 10/3/2018
 * Time: 12:51 PM
 */

/////////////////////////////////////////////////////////////////////////////////////////////////////////
/// Dit scriptje is niet getest, maar volgens mij werkt het wel aardig. Jij zult het af moeten maken  ///
/////////////////////////////////////////////////////////////////////////////////////////////////////////


$allPossibleChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789`~!@#$%^&*()_+{}|:\"<>?-=[]\;',./'";

$encrypted = "LfIZUJN/1hMeAt2+gSH5qnriYEmONHZPtyvka1uGm7al/aqhdmdnCu6VEXJMhIm/";

$pass = "";
$n = 0;
for($layer0 = 0; $layer0 < strlen($allPossibleChars); $layer0++){
    for($layer1 = 0; $layer1 < strlen($allPossibleChars); $layer1++){
        for($layer2 = 0; $layer2 < strlen($allPossibleChars); $layer2++){
            for($layer3 = 0; $layer3 < strlen($allPossibleChars); $layer3++){
                $a = $allPossibleChars[0]; //zo haal je de eerste char uit $allPossibleChars
                $char0 = $allPossibleChars[$layer0];
                $char1 = $allPossibleChars[$layer1];
                $char2 = $allPossibleChars[$layer2];
                $char3 = $allPossibleChars[$layer3];//zo haal je variable met layer0 de uit $allPossibleChars
                //vanaf hier moet jij beginnen met coden,
                $pass = $char0 . $char1 . $char2 . $char3;
                $text = openssl_decrypt($encrypted, 'aes128', $pass);
                if(substr($text, -10, 10) === 'ditZitErin'){
                    goto end;
                }
            }
        }
    }
}
end:
echo $pass . ' ';
echo $text;




