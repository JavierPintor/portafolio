<?php
class ControllerCategorias extends Controller {
    function __construct($view, $conf, $var, $acc) {
        parent::__construct($view, $conf, $var, $acc);
    }
     public function main() {
    	    foreach ($this->var as $key => $value) {
            $this->data[$key] = $value;
            $$key = $value;
        }

        
        if (isset($Action) && $Action == "delete") {
            $delete = indexModel::bd($this->conf)->deleteDominio("categorias", $idReg);
       }
       $sql = " SELECT * FROM categorias";
        $this->data['datos'] = indexModel::bd($this->conf)->getSQL($sql);
        
       if ($delete > 0) {
        $data["isCorrect"] = TRUE;
        $data["tituloMensaje"] = "Exito!";
        $data["Mensaje"] = "Registro eliminado de forma correcta.";
        $data["return"] = $this->var["path"] . "categorias";
        $data["tiempo"] = "3";
        $data["return"] = indexModel::bd($this->conf)->getMensaje($data);
        $templa  = "mensajeBackEnd.twig";
        $this->view->show($templa, $data, $this->accion);
       }else{
           
        $this->view->show("categorias.html", $this->data, $this->accion);

       }
       
    }
}
?>
