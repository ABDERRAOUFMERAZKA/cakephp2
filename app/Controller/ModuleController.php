<?php

class moduleController extends AppController{
	public $components = array('Session');
	public function add(){
		 if ($this->request->is('post')) {
			$this->module->create();
			if($this->module->save($this->request->data)){
				$this->Session->setFlash("Module a ete cree avec succes ! tray again !");
			}
		}
		$this->set('Eleve', $this->module->Eleve->find('all'));
	}
}

?>