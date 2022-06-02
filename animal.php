<?php

class animal{

    public function andar(){
        echo "O animal andou";
    }

    public function correr(){
        echo "O animal correu";
    }
    
    public function pular(){
        echo "O animal pulou";
    }

}

class cavalo extends animal{
    public function andar(){
        echo "método modificado. O cavalo andou!";
        $this->correr();
       
       
    }
}
$animal = new cavalo ();
$animal->andar();

