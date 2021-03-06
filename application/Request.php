<?php

class Request
{
    private $_controlador;
    private $_metodo;
    private $_argumentos;
    // uso de aplicaciones modulares $_modules , $_modulo
    private $_modules;
    private $_modulo;

    public function __construct(){
        if(isset($_GET['url'])){
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            $url = array_filter($url);
            
            /* modulos de la app */
            // Uso de aplicaciones modulos
            $this->_modules = array('usuarios'); // indicamos que modulos se manerajan
            $this->_modulo = strtolower(array_shift($url));
            /* estas son las url que se quiere manejar
             1  modulo/controlador/metodo/argumentos 
             2  controlador/metodo/argumentos 
             */
            if(!$this->_modulo){
                $this->_modulo = false;
            }
            else{
                if(count($this->_modules)){ // el modulo existe en el arreglo
                    if(!in_array($this->_modulo, $this->_modules)){ //si no esta contenido dentro de modules
                        $this->_controlador = $this->_modulo;
                        $this->_modulo = false;
                    }
                    else{
                        $this->_controlador = strtolower(array_shift($url));
                        
                        if(!$this->_controlador){
                            $this->_controlador = 'index';
                        }
                    }
                }
                else{
                     $this->_controlador = $this->_modulo;
                     $this->_modulo = false;
                }
            }  

            $this->_metodo = strtolower(array_shift($url));
            $this->_argumentos = $url;
        }

        if(!$this->_controlador){
                $this->_controlador = DEFAULT_CONTROLLER;		
        }
        if(!$this->_metodo){
                $this->_metodo = 'index';
        }
        if(!isset($this->_argumentos)){
                $this->_argumentos = array();
        }
    }

    // añadimos esta funcion para leer los Modulos creados
    public function getModulo()
    {
        return $this->_modulo;
    }    
    
    
    public function getControlador()
    {
            return $this->_controlador;
    }

    public function getMetodo()
    {
            return $this->_metodo;
    }

    public function getArgs()
    {
            return $this->_argumentos;
    }
}

?>