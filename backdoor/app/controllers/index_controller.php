<?php
/**
 * Description of index_controller
 *
 * @author aaronmunguia
 */
class index_controller extends appcontroller{
    
    public function __construct(){
        parent::__construct();

        if($this->User->isLogged() === FALSE){
                $this->redirect("login");
        }
        
        $this->title_for_layout("Codice CMS");
    }
    
    public function index($id = NULL) {
        
        $this->render();
    }
    
    public function about(){
        
        $this->render();
    }
}

?>
