<?php


class veiculo{

    private $modelo;
    private $cor;
    private $ano;

    public function Mover(){
        echo "mover";

    }

    public function Parar(){
        echo "parar";
    }
    public function getModelo(){
        return $this->modelo;

    }
    public function setModelo($m){
        $this->modelo = $sm;


    }
}



class carro extends veiculo{

    protected function LigarLimpador(){
        echo "Limpador ligado".this->modelo;
    }
}

class moto extends veiculo{

    public function empinar(){
        echo "Empinando";
    }
}

$carro = new veiculo();
 $carro->setmodelo = "bmw";
 echo $carro->setmodelo;
















