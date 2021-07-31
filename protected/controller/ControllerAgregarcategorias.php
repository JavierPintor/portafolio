<?php
class ControllerAgregarcategorias extends Controller {
    function __construct($view, $conf, $var, $acc) {
        parent::__construct($view, $conf, $var, $acc);
    }
     public function main() {
        //   var_dump($this->var);
        //   exit();
    	    foreach ($this->var as $key => $value) {
                $$key = $value;
            }

        if(isset($cmdGuardar) && $idguardar == ''){
            $arr = array(
                "Dominio" => "categorias",
                "txtcategorias" => $txtcategorias
            );
            $guardar = indexModel::bd($this->conf)->updateDominio($arr);
            //  echo $guardar . "guardar";
            //  exit();
            //  Modificar
        }else if (isset($Action) && $Action =="edit") {

            $sql = " SELECT * FROM categorias WHERE categorias.id=$idReg";

            
            $this->data['datacategorias'] = indexModel::bd($this->conf)->getSQL($sql)[0];


        }elseif(isset($cmdGuardar) && $idguardar > 0){
            $arr = array(
                "Dominio" => "categorias",
                "txtcategorias" => $txtcategorias
            );
            
            $update = indexModel::bd($this->conf)->updateDominio($arr,$idguardar);
               
        } 
         
            $this->data['categorias'] = indexModel::bd($this->conf)->getDominio("categorias");
            
            if($guardar > 0) {
                $data["isCorrect"] = TRUE;
                $data["tituloMensaje"] = "Exito!";
                $data["Mensaje"] = "Registro guardado de forma correcta.";
                $data["return"] = $this->var["path"] . "categorias";
                $data["tiempo"] = "3";
                $data["return"] = indexModel::bd($this->conf)->getMensaje($data);
                $templa  = "mensajeBackEnd.twig";
                $this->view->show($templa, $data, $this->accion);
            }elseif($update > 0) {
                    $data["isCorrect"] = TRUE;
                    $data["tituloMensaje"] = "Exito!";
                    $data["Mensaje"] = "Registro actualizado de forma correcta.";
                    $data["return"] = $this->var["path"] . "categorias";
                    $data["tiempo"] = "3";
                    $data["return"] = indexModel::bd($this->conf)->getMensaje($data);
                    $templa  = "mensajeBackEnd.twig";
                    $this->view->show($templa, $data, $this->accion);
            }else{
                $this->view->show("Agregarcategorias.html", $this->data, $this->accion);

            }
        
    }
}
?>
