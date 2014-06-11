<?php

class indexController extends Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        /* Validacion a tiempo se seccion
        if(Session::get('autenticado')){
            Session::tiempo();
        }*/
        
        
        //echo '<pre>';print_r($this->_acl->getPermisos());exit;
        $this->_view->assign('titulo','Portal');
        $this->_view->renderizar('index','inicio');
    }
}


?>