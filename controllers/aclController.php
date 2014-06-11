<?php

class aclController extends Controller
{
    private $_aclm;
    
    public function __construct()
    {
        parent::__construct();
        $this->_aclm = $this->loadModel('acl');
    }
    
    public function index()
    {
        $this->_view->assign('titulo', 'ACL');
        $this->_view->renderizar('index', 'acl');
    }
    
    public function roles()
    {
        $this->_view->assign('titulo', 'Administracion de roles');
        $this->_view->assign('roles', $this->_aclm->getRoles());
        $this->_view->renderizar('roles', 'acl');
    }
    
    public function nuevo_role()
    {
        $this->_view->assign('titulo', 'Nuevo Role');
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('role')){
                $this->_view->assign('_error', 'Debe introducir el nombre del role');
                $this->_view->renderizar('nuevo_role', 'acl');
                exit;
            }
            
            $this->_aclm->insertarRole($this->getSql('role'));
            $this->redireccionar('acl/roles');
        }
        
        $this->_view->renderizar('nuevo_role', 'acl');
    }
    
    public function permisos_role($roleID)
    {
        $id = $this->filtrarInt($roleID);
        
        if(!$id){
            $this->redireccionar('acl/roles');
        }
        
        $row = $this->_aclm->getRole($id);
        
        if(!$row){
            $this->redireccionar('acl/roles');
        }
        
        $this->_view->assign('titulo', 'Permisos de role');
        
        if($this->getInt('guardar')== 1 ){
            $values = array_keys($_POST);//print_r($values);echo count($values);exit;
            $eliminar = array();
            $replace = array();
            
            for($i = 0; $i < count($values); $i++){
                if(substr($values[$i],0,5) == 'perm_'){
                    if($_POST[$values[$i]] == 'x'){
                        $eliminar[] = array(
                            'permiso' => substr($values[$i],-1),
                            'valor' => $_POST[$values[$i]],
                            'role' => $id
                        );
                    }
                    else{
                        if($_POST[$values[$i]] == 1){
                            $v = 1;
                        }
                        else{
                            $v = 0;
                        }
                        
                        $replace[] = array(
                            'permiso' => substr($values[$i],-1),
                            'valor' => $v,
                            'role' => $id
                        );
                    }
                }
            }
            
            for($e = 0; $e < count($eliminar); $e++){
                $this->_aclm->eliminarPermisoRole(
                           $eliminar[$e]['role'],
                           $eliminar[$e]['permiso']
                           );
            }
            
            for($r = 0; $r < count($replace); $r++){
                $this->_aclm->editarPermisoRole(
                           $replace[$r]['role'],
                           $replace[$r]['permiso'],
                           $replace[$r]['valor']
                           );
            }
        }
        
        $this->_view->assign('role', $row);
        $this->_view->assign('permisos', $this->_aclm->getPermisosRole($id));
        $this->_view->renderizar('permisos_role', 'acl');
    }
    
    public function permisos()
    {
        $this->_view->assign('titulo', 'Administracion de permisos');
        $this->_view->assign('permisos', $this->_aclm->getPermisos());
        $this->_view->renderizar('permisos', 'acl');
    }
    
    public function nuevo_permiso()
    {
        $this->_view->assign('titulo', 'Nuevo Permiso');
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('permiso')){
                $this->_view->assign('_error', 'Debe introducir el nombre del permiso');
                $this->_view->renderizar('nuevo_permiso', 'acl');
                exit;
            }
            
            if(!$this->formatPermiso('llave')){
                $this->_view->assign('_error', 'Debe introducir la llave del permiso');
                $this->_view->renderizar('nuevo_permiso', 'acl');
                exit;
            }
            
            $this->_aclm->insertarPermiso(
                    $this->getSql('permiso'), 
                    $this->formatPermiso('llave')
                    );
            
            $this->redireccionar('acl/permisos');
        }
        
        $this->_view->renderizar('nuevo_permiso', 'acl');
    }
}

?>