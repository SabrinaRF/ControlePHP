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

    public function abrirMenu() {
        
    }
    public function fecharMenu() {
        
    }
    public function ligar() {
        
    }
    public function desligar() {
        
    }
    public function ligarMudo() {

        }
    public function desligarMudo() {
        
    }
    public function maisVolume() {
        
    }

    public function menosVolume() {
        
    }

    public function pause() {
        
    }

    public function play() {
        
    }

}
