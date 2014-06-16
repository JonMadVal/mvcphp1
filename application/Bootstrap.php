<?php
class Bootstrap 
{
    public static function run(Request $peticion)
    {
        $modulo = $peticion->getModulo(); // Añadimos el metod para los modulos
        $controller = $peticion->getControlador().'Controller';
        //$rutaControlador = ROOT.'controllers'.DS.$controller.'.php';
        //echo $rutaControlador ; exit;	
        $metodo = $peticion->getMetodo();
        $args = $peticion->getArgs();

        if($modulo){ // verificamos si se trabajo con un modulo
            //buscar y hereda del Controlador Base para los controladores del modulo .
            $rutaModulo = ROOT . 'controllers' . DS . $modulo . 'Controller.php';
            
            if(is_readable($rutaModulo)){
                require_once $rutaModulo;
                $rutaControlador = ROOT . 'modules'. DS . $modulo . DS . 'controllers' . DS . $controller . '.php';
            }
            else{
                throw new Exception('Error de base de modulo');
            }
        }
        else{
            $rutaControlador = ROOT . 'controllers' . DS . $controller . '.php';
        }            
        // Comprovando la ruta que de indica en el Navegador
        //  echo $rutaControlador; exit;
            
        if(is_readable($rutaControlador))
        {
            require_once $rutaControlador;
            $controller = new $controller;

            if(is_callable(array($controller,$metodo)))
            {
                $metodo = $peticion->getMetodo();// si el metodo no es valido
            }
            else
            {
                $metodo ='index';
            }

            if(isset($args))
            {
                call_user_func_array(array($controller , $metodo ) , $args);
            }
            else
            {
                call_user_func_array(array($controller , $metodo));
            }
        }
        else
        {
            throw new exception('Error : Controlador No Encontrada :(');
        }
    }
}
?>