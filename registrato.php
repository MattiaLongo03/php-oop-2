<?php 

class Registrato extends User {
    protected $sconto;

    public function setSconto($sconto)
    {
        $this->sconto = $sconto;

        return $this;
    }
}

$registrato->setSconto(20)


?>