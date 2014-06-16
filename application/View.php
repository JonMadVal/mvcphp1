<?php

require_once ROOT . 'libs' . DS . 'smarty' . DS . 'libs' . DS . 'Smarty.class.php';

class View extends Smarty
{
    private $_request; // para modulos
    private $_js;
    private $_acl;
    private $_rutas; // para modulos
    private $_jsPlugin;
    
    public function __construct(Request $peticion, ACL $_acl)
    {
        parent::__construct(); // llamos al Constructor Padre
        $this->_request = $peticion;
        $this->_js = array();
        $this->_acl = $_acl;
        $this->_rutas = array(); // para modulos
        $this->_jsPlugin = array(); //inicializamos con un contructor
        
        $modulo = $this->_request->getModulo(); 
        $controlador = $this->_request->getControlador();
        // verificamos si se trabaja base controles o modulos
        if($modulo){
            $this->_rutas['view'] = ROOT . 'modules' . DS . $modulo . DS . 'views' . DS . $controlador . DS;
            $this->_rutas['js'] = BASE_URL . 'modules/' . $modulo . '/views/' . $controlador . '/js/';
        }
        else{
            $this->_rutas['view'] = ROOT . 'views' . DS . $controlador . DS;
            $this->_rutas['js'] = BASE_URL . 'views/' . $controlador . '/js/';
        }
        
    }
    public function renderizar($vista , $item = false,$noLayout = false)
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

        $menuRight = array(
            array(
                'id' => 'usuarios',
                'titulo' => 'Usuarios',
                'enlace' => BASE_URL . 'usuarios',
                'imagen' => 'icon-user'
                ),
            
            array(
                'id' => 'acl',
                'titulo' => 'Listas de control de acceso',
                'enlace' => BASE_URL . 'acl',
                'imagen' => 'icon-list-alt'
                ),
            
            array(
                'id' => 'ajax',
                'titulo' => 'Ejemplo uso de AJAX',
                'enlace' => BASE_URL . 'ajax',
                'imagen' => 'icon-refresh'
                ),
            
            array(
                'id' => 'prueba',
                'titulo' => 'Prueba paginaci&oacute;n',
                'enlace' => BASE_URL . 'post/prueba',
                'imagen' => 'icon-random'
                ),
            
            array(
                'id' => 'pdf',
                'titulo' => 'Documento PDF 1',
                'enlace' => BASE_URL . 'pdf/pdf1/param1/param2',
                'imagen' => 'icon-file'
                ),
            
            array(
                'id' => 'pdf',
                'titulo' => 'Documento PDF 2',
                'enlace' => BASE_URL . 'pdf/pdf2/Guillermo/Rodriguez',
                'imagen' => 'icon-file'
                )
        );        
        
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
            'menu_right' => $menuRight,
            'item'=>$item,
            'js' => $this->_js,
            'js_plugin' => $this->_jsPlugin,
            'root' => BASE_URL,
            'configs'=>array(
                'app_name'=>APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_company' => APP_COMPANY
            )
        );
               
       // $rutaView = ROOT.'views'.DS.$this->_controlador.DS.$vista.'.tpl';
        $rutaView = $this->_rutas['view'] . $vista . '.tpl';
        if(is_readable($rutaView))
        {
            if($noLayout){
                $this->template_dir = $this->_rutas['view'];
                $this->display($this->_rutas['view'] . $vista . '.tpl');
                exit;
            }
            /*llamos a smarty con el metodo assign */
            // _contenido llama para que se carge el template
            $this->assign('_contenido',$rutaView);
        }
        else
        {
            throw new Exception("Error de Vista :( ". $rutaView);			
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
    
    
    public function setJsPlugin(array $js)
    {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_jsPlugin[] = BASE_URL . 'public/js/' .  $js[$i] . '.js';
            }
        } 
        else {
            throw new Exception('Error de js plugin');
        }
    }    
}

?>