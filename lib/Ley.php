<?php

class Ley{
    
    var $idLey;
    var $numLey;
    var $fecPublicacion;
    var $titulo;
    var $fechaHora;
    
    function __construct($idl=0, $nley=0,$fpub="",$tit="",$fechor=""){
            $this->idLey=$idl;
            $this->numLey=$nley;
            $this->fecPublicacion=$fpub;
            $this->titulo=$tit;
            $this->fechaHora=$fechor;
    }
    
}

