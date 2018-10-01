# Whoops
Ik ben perongeluk het wachtwoord vergeten van dit versleutelde bestand, kan je mij helpen?


## Wat weten we:
- Wachtwoord is 4 tekens lang
- De filecontent is met de methode `aes128` encrypted
- De tekst `ditZitErIn` zit in de encrypted content

## Wat ik wil weten
- Verloren wachtwoord
- De orginele tekst in de encrypted bestand

## Tips

Door [openssl_decrypt](http://php.net/manual/en/function.openssl-decrypt.php) te gebruiken kan je de content van de file decrypten.
Dit doe je door bijvoorbeeld:
```php
$text = openssl_decrypt($content, 'aes128', $wachtwoord);
if(text){
  //gevonden
} 
```