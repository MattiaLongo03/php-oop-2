<?php

class User {
    protected $nome;
    protected $cognome;
    protected $email;

    function __construct($_nome , $_cognome, $_email){
        $this->nome = $_nome;
        $this->nome = $_cognome;
        $this->nome = $_email;
    }


}

$pinco = new User ('Pinco', 'Pallino', 'PincoPall@gmail.com');
echo $pinco;




?>