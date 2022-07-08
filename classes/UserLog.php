<?php

class UserLog extends User {
    
    public $sconto;

    public function __construct($_nome, $_cognome, $_email)
    {
        parent::__construct($_nome, $_cognome, $_email);
        $this->verifica();
    }

    public function verifica() {
        if ($this->nome == 'Marco' and $this->cognome == 'Rossi' and $this->email == 'marco@mail.com') {
           $this->sconto = '20%';
        } else {
            $this->sconto = 0;
        }
    }
}