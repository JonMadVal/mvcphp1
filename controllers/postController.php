<?php

class postController extends Controller
{
    private $_post;
    public function __construct(){
        parent::__construct();
        // nombre del Modelo
        $this->_post = $this->loadModel('post');
    }

    public function index($pagina = false)
    {		
        if(!$this->filtrarInt($pagina)){
                $pagina = false;
        }
        else{
                $pagina = (int) $pagina;
        }
		
    	$this->getLibrary('paginador');
        $paginador = new Paginador();
		
        //$this->_view->posts = $paginador->paginar($this->_post->getPosts(), $pagina);
        $this->_view->assign('posts', $paginador->paginar($this->_post->getPosts(), $pagina));
        //$this->_view->paginacion = $paginador->getView('prueba', 'post/index'); 
        $this->_view->assign('paginacion', $paginador->getView('prueba', 'post/index'));
        //Listar sin Paginacion
        //$this->_view->posts = $this->_post->getPosts();
        //$this->_view->titulo = 'Post';
        $this->_view->assign('titulo', 'Post');
        $this->_view->renderizar('index','post');
    }
    public function nuevo()
    {
        //Session::acceso('especial');
        // Bloqueando al permiso Admin
        //Session::accesoEstricto(array('usuario'),true);
        //Session::accesoEstricto(array('usuario'));
        
        $this->_acl->acceso('nuevo_post');// Validacion por ACL
        //$this->_view->prueba =  $this->getTexto('titulo');
        //$this->_view->prueba =  $this->getInt('guardar');
        $this->_view->assign('titulo', 'Nuevo Post');        
        //$this->_view->titulo = 'Nuevo Post';
        
        $this->_view->setJs(array('nuevo'));
        if($this->getInt('guardar') ==1){
            $this->_view->datos = $_POST;
            
            if(!$this->getTexto('titulo')){
                //$this->_view->_error ="Debe introducir el titulo del Post";
                $this->_view->assign('_error', 'Debe introducir el titulo del post');
                $this->_view->renderizar('nuevo','post');
                exit;
            }
            
            if(!$this->getTexto('cuerpo')){
                //$this->_view->_error = 'Debe introducir el cuerpo del post';
                $this->_view->assign('_error', 'Debe introducir el cuerpo del post');
                $this->_view->renderizar('nuevo', 'post');
                exit;
            }
            
            $imagen = '';
            // verificamos si se envio una imagen
            if(isset($_FILES['imagen']['name'])){
                $this->getLibrary('upload' . DS . 'class.upload');
                $ruta = ROOT . 'public' . DS . 'img' . DS . 'post' . DS;
                $upload = new upload($_FILES['imagen'], 'es_ES');
                $upload->allowed = array('image/*');
                // le indicamos un nombre a la imagen
                $upload->file_new_name_body = 'upl_' . uniqid();
                $upload->process($ruta);
                
                if($upload->processed){
                    // devuelve el nombre que fue procesado el cual se definio en el file_new_name_body
                    $imagen = $upload->file_dst_name;
                    // creando una miniatura de la imagen subida
                    $thumb = new upload($upload->file_dst_pathname);
                    // habilito la redimencion de imagen
                    $thumb->image_resize = true;
                    $thumb->image_x = 100;
                    $thumb->image_y = 70;
                    // concatenar prefijo para identificar la miniatura
                    $thumb->file_name_body_pre = 'thumb_';
                    $thumb->process($ruta . 'thumb' . DS);
                }
                else{
                    $this->_view->assign('_error', $upload->error);
                    $this->_view->renderizar('nuevo', 'post');
                    exit;
                }
            }
            
            
            $this->_post->insertarPost(
                    $this->getPostParam('titulo'),
                    $this->getPostParam('cuerpo'),
                    $imagen
                    );
            
            $this->redireccionar('post');
        }
        // llamo a la vista
        $this->_view->renderizar('nuevo','post');
    }
    
    public function editar($id)
    {
        $this->_acl->acceso('editar_post');
        if(!$this->filtrarInt($id)){
            $this->redireccionar('post');
        }
        
        if(!$this->_post->getPost($this->filtrarInt($id))){
            $this->redireccionar('post');
        }
        
        //$this->_view->titulo = 'Editar Post';
        $this->_view->assign('titulo', 'Editar Post');
        $this->_view->setJs(array('nuevo'));
        
        if($this->getInt('guardar') == 1){
            //$this->_view->datos = $_POST;
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getTexto('titulo')){
                //$this->_view->_error = 'Debe introducir el titulo del post.';
                $this->_view->assign('_error', 'Debe introducir el titulo del post');
                $this->_view->renderizar('editar', 'post');
                exit;
            }
            
            if(!$this->getTexto('cuerpo')){
                //$this->_view->_error = 'Debe introducir el cuerpo del post.';
                $this->_view->assign('_error', 'Debe introducir el cuerpo del post.');
                $this->_view->renderizar('editar', 'post');
                exit;
            }
            
            $this->_post->editarPost(
                    $this->filtrarInt($id),
                    $this->getPostParam('titulo'),
                    $this->getPostParam('cuerpo')
                    );
            
            $this->redireccionar('post');
        }
        
        //$this->_view->datos = $this->_post->getPost($this->filtrarInt($id));
        $this->_view->assign('datos', $this->_post->getPost($this->filtrarInt($id)));
        //llamos a la vista
        $this->_view->renderizar('editar', 'post');
    }    

    public function eliminar($id)
    {
        if(!$this->filtrarInt($id)){
            $this->redireccionar('post');
        }
        
        if(!$this->_post->getPost($this->filtrarInt($id))){
            $this->redireccionar('post');
        }
        
        $this->_post->eliminarPost($this->filtrarInt($id));
        $this->redireccionar('post');
    }
    
    // Prueba
    	public function prueba($pagina = false)
	{
		/*
                 Inserccion de Datos para Validad la Paginacion
		for($i = 0; $i < 300; $i++){
			$model = $this->loadModel('post');
			$model->insertarPrueba('nombre ' . $i);
		}
		*/
		if(!$this->filtrarInt($pagina)){
			$pagina = false;
		}
		else{
			$pagina = (int) $pagina;
		}
		
    	$this->getLibrary('paginador');
		$paginador = new Paginador();
		
        //$this->_view->posts = $paginador->paginar($this->_post->getPrueba(), $pagina);
        //$this->_view->paginacion = $paginador->getView('prueba', 'post/prueba');
        //$this->_view->titulo = 'Post';
        $this->_view->assign('posts', $paginador->paginar($this->_post->getPrueba(), $pagina));
	$this->_view->assign('paginacion', $paginador->getView('prueba', 'post/prueba'));
        $this->_view->assign('titulo', 'Post');        
        
        
        $this->_view->renderizar('prueba', 'post');
	}
    
    
    
}

?>
