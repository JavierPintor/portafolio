
<?php
class ControllerCursos extends Controller {
    function __construct($view, $conf, $var, $acc) {
        parent::__construct($view, $conf, $var, $acc);
    }

            //  1. consulta
            //  2. Ejecutar la consulta
            //  3. alamacenar en un array
     public function main() {
    	    foreach ($this->var as $key => $value) {
            $this->data[$key] = $value;
            $$key = $value;
        }
        
        if (isset($Action) && $Action == "delete") {
             $delete = indexModel::bd($this->conf)->deleteDominio("cursos", $idReg);
           
        }
         

        $sql = "SELECT c.*, ct.categorias FROM cursos AS c
        INNER JOIN categorias AS ct ON ct.id=c.id_categorias";
        $this->data['datos'] = indexModel::bd($this->conf)->getSQL($sql);
         
        $this->view->show("cursos.twig", $this->data, $this->accion);
    }
}
?>
