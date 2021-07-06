<?php
class ControllerIndex extends Controller {
    function __construct($view, $conf, $var, $acc) {
        parent::__construct($view, $conf, $var, $acc);
    }
    public function main() {
        $this->view->show("indexLogin.html", $this->data, $this->accion);

    }
}
?>
