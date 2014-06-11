<?php

require_once ROOT . 'libs' . DS . 'smarty' . DS . 'libs' . DS . 'Smarty.class.php';

class View extends Smarty
{
    private $_request;
    private $_js;
    private $_acl;
    private $_rutas;
    
    public function __construct(Request $peticion, ACL $_acl)
    {
        parent::__construct(); // llamos al Constructor Padre
        $this->_request = $peticion;
        $this->_js = array();
        $this->_acl = $_acl;
        $this->_rutas = array();
        
        $modulo = $this->_request->getModulo();
        $controlador = $this->_request->getControlador();
        
        if($modulo){
            $this->_rutas['view'] = ROOT . 'modules' . DS . $modulo . DS . 'views' . DS . $controlador . DS;
            $this->_rutas['js'] = BASE_URL . 'modules/' . $modulo . '/views/' . $controlador . '/js/';
        }
        else{
            $this->_rutas['view'] = ROOT . 'views' . DS . $controlador . DS;
            $this->_rutas['js'] = BASE_URL . 'views/' . $controlador . '/js/';
        }
        
    }
    public function renderizar($vista , $item = false)
    {
        /*Configuracion del Template de Smarty*/
        $this->template_dir = ROOT . 'views' . DS . 'layout'. DS . DEFAULT_LAYOUT . DS;
        $this->config_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS;
        $this->cache_dir = ROOT . 'tmp' . DS .'cache' . DS;
        $this->compile_dir = ROOT . 'tmp' . DS .'template' . DS;        
        
        $menu = array(
            array(
                'id'=> 'inicio',
                'titulo'=> 'Inicio',
                'enlace'=> BASE_URL,
            ),
            array(
                'id'=> 'post',
                'titulo'=> 'post',
                'enlace'=> BASE_URL.'post',
            ),
/*
            array(
                'id'=> 'pdf/pdf1',
                'titulo'=> 'Reporte',
                'enlace'=> BASE_URL.'pdf/pdf1',
            ),*/
            array(
                'id'=> 'pdf/pdf1/Guillermo/Rodriguez',
                'titulo'=> 'PDF',
                'enlace'=> BASE_URL.'pdf/pdf1/Guillermo/Rodriguez',
            )
        );
        
        if(Session::get('autenticado')){
            $menu[] = array(
                'id' => 'login',
                'titulo' => 'Cerrar Sesion',
                'enlace' => BASE_URL . 'usuarios/login/cerrar'
                );
        }else{
            $menu[] = array(
                'id' => 'login',
                'titulo' => 'Iniciar Sesion',
                'enlace' => BASE_URL . 'usuarios/login'
                );
            $menu[] = array(
                'id' => 'registro',
                'titulo' => 'Registro',
                'enlace' => BASE_URL . 'usuarios/registro'
                );
        }        
        
        $js = array();
        
        if(count($this->_js)){
            $js = $this->_js;
        }
        // ruta de los CSS , JS del layout
        $_Params = array(
            'ruta_css'=>BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/css/',
            'ruta_js'=>BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/js/',
            'ruta_img'=>BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/img/',
            'menu'=>$menu,
            'item'=>$item,
            'js' => $js,
            'root' => BASE_URL,
            'config'=>array(
                'app_name'=>APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_company' => APP_COMPANY
                
            )
        );
               
       // $rutaView = ROOT.'views'.DS.$this->_controlador.DS.$vista.'.tpl';
        $rutaView = $this->_rutas['view'] . $vista . '.tpl';
        if(is_readable($rutaView))
        {
            /*llamos a smarty con el metodo assign */
            // _contenido llama para que se carge el template
            $this->assign('_contenido',$rutaView);
        }
        else
        {
            throw new Exception("Error de Vista :(");			
        } 
        $this->assign('_acl', $this->_acl);
        $this->assign('_layoutParams',$_Params);
        $this->display('template.tpl');
            
    }
    
    public function setJs(array $js)
    {
        // lectura de los Js para  la vista
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                //$this->_js[] = BASE_URL . 'views/' . $this->_controlador . '/js/' . $js[$i] . '.js';
                $this->_js[] = $this->_rutas['js'] . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de js');
        }
    }
    
}

?>