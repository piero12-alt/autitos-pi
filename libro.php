<?php

class libro {
    public $titulo;
    public $AUTO;
    public $PRECIO;

    public function __construct($titulo,$AUTO,$PRECIO)
    {
      $this->titulo = $titulo; 
      $this->AUTO = $AUTO; 
      $this->PRECIO = $PRECIO; 
    }
    public function mostrarinfo()
    {
         return "la info es :". $this ->titulo; $this ->AUTO; $this ->PRECIO; 
    }

}