<?php
  /* Esta clase se utilizará como plantilla para generar dados de 6 caras,
    puesto que son los más habituales. */

  class Dado {
    //PROPIEDADES
    private $minNumDado = 1;
    private $maxNumDado = 6;
    private $tirada;

    //FUNCIONES

      //CONSTRUCTOR
    function __construct($minNumDado = 1, $maxNumDado = 6){
      $this -> minNumDado = $minNumDado;
      $this -> maxNumDado = $maxNumDado;
    }
      //GETTERS Y SETTERS
    public function getMinNumDado(){
      return $this -> minNumDado;
    }
    public function getMaxNumDado(){
      return $this -> maxNumDado;
    }

    public function setMinNumDado($minNumDado){
      $this -> minNumDado = $minNumDado;
    }
    public function setColor($maxNumDado){
      $this -> maxNumDado = $maxNumDado;
    }
     //COMPORTAMIENTOS

     /*Esta 1ª función devuelve un número aleatorio entre 1 y 6, simulando una
     tirada.*/
    public function tirarDado(){
      $tirada = rand($this -> minNumDado, $this -> maxNumDado);
      return $tirada;
     }
  }

 ?>
