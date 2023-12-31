<?php 
class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function __construct($m,$c,$p){
        $this->setModelo($m);
        $this->setCor($c);
        $this->setPonta($p);
        $this->tampar();
    } 

    public function getTampada(){
        return $this->tampada;
    }
    public function setTampada($tampada){
        $this->tampada = $tampada;
        return $this;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($ponta){
        $this->ponta = $ponta;
        return $this;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
        return $this;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
        return $this;
    }
    public function tampar(){
        $this->tampada = true;
    }
}
?>