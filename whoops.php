<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 10/1/2018
 * Time: 9:19 PM
 */


/// Ik ben perongeluk het wachtwoord vergeten van dit versleutelde bestand, kan je mij helpen?
/// Ik weet alleen nog dat het volgende stukje tekst in het bestand staat: ditZitErin
/// Het wachtwoord weet ik niet meer maar deze is sowieso 4 tekens lang
///
/// Door openssl_decrypt te gebruiken kan je de content van de file decrypten

$string = '?????????????????? ditZitErin';
$pass = '????';
$method = 'aes128';

file_put_contents ('whoops.encrypted', openssl_encrypt ($string, $method, $pass));