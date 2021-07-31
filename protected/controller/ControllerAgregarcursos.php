<?php
class controllerAgregarcursos extends Controller {
    function __construct($view, $conf, $var, $acc) {
        parent::__construct($view, $conf, $var, $acc);
    } 
    public function main() {
        // var_dump($this->var);
        // exit();
        foreach ($this->var as $key => $value) {
            $$key = $value;
        }
        
        if(isset($cmdGuardar) && $idsave == ''){
            $arr = array(
                "Dominio" => "cursos",
                "txtcurso" => $txtcurso,
                "txtdescripcion" => $txtdescripcion,
                "txtid_categorias" => $txtid_categorias
            );
            
            $guardar = indexModel::bd($this->conf)->updateDominio($arr);
             echo $guardar . "guardar";
             exit();
        }else if (isset($Action) && $Action =="edit") {
            $sql = "SELECT c.*, ct.categorias FROM cursos AS c INNER JOIN 
            categorias AS ct ON ct.id=c.id_categorias WHERE c.id=$idReg";
            
            $this->data['datacurso'] = indexModel::bd($this->conf)->getSQL($sql)[0];
           
    
        }elseif(isset($cmdGuardar) && $idsave > 0){
                $arr = array(
                        "Dominio" => "cursos",
                        "txtcurso" => $txtcurso,
                        "txtdescripcion" => $txtdescripcion,
                        "txtid_categorias" => $txtid_categorias
                    );
                
                $update = indexModel::bd($this->conf)->updateDominio($arr,$idsave);
                    echo $update . "actualizar";
                    exit();
            }
        
        $this->data['categorias'] = indexModel::bd($this->conf)->getDominio("categorias");
        // var_dump($this->data['categorias']);
        // exit();

        $this->view->show("agregarcursos.html", $this->data, $this->accion); 
    }
}
?>