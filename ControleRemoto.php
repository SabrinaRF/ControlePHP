<?php
/**
 * Description of ControleRemoto
 *
 * @author sabri
 */
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;
    
    public function ControleRemoto() {
        $this->volume= 50;
        $this->ligado=false;
        $this->tocando=false;
    }
    
    public function getVolume() {return $this->volume;}
    public function getLigado() {return $this->ligado;}
    public function getTocando() {return $this->tocando;}
    
    public function setVolume($volume): void {
        $this->volume = $volume;
    }
    public function setLigado($ligado): void {
        $this->ligado = $ligado;
    }
    public function setTocando($tocando): void {
        $this->tocando = $tocando;
    }

    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {
        echo "<br> Está ligado?.." . ($this->getLigado()?"SIM":"NÃO");
        echo "<br> Está tocando?..." . ($this->getTocando()?"SIM":"NÃO");
        echo "<br> Volume: " . $this->getVolume();
        for ($i=0; $i<= $this->getVolume();$i+=5){
            echo " | ";
        }
        echo"<br>";
    }
    public function fecharMenu() {
        echo "<br> Fechando menu ... ";
    }
    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume()>0) {
            $this->setVolume(0);
        } 
    }
    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume()==0){
            $this->setVolume(50);
        }
    }
    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume()+5);
        }
    }
    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setLigado($this->getVolume()-5);
        }
    }
    public function pause() {
        
    }

    public function play() {
        
    }

}
