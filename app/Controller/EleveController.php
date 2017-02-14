<?php
/**
* 
*/
class EleveController extends AppController
{

	public function index(){
		$data = $this->Eleve->find('all');
		$this->set('eleves', $data);
	}



	public function ajouter(){
		if ($this->request->is('post')) {
			$this->Eleve->create();
			if($this->Eleve->save($this->request->data)){
				$this->Session->setFlash("Eleve a ete cree avec succes ! tray again !");
			}
		}

	}

	public function edit($id){

		$data = $this->Eleve->findById($id);

		if($this->request->is('post') || $this->request->is('put')){
			$this->Eleve->ID=$id;
			if ($this->Eleve->save($this->request->data)){
				$this->Session->setFlash("Eleve a ete modifié avec succé !");
				$this->redirect('index');

			}
		}
		$this->request->data = $data;


	}


	public function delete($id){
		$this->Eleve->ID = $id;
		if($this->request->is('post') || $this->request->is('put')){
		 $this->Eleve->delete($id);
		 $this->Session->setFlash("Eleve a ete supprimé avec succé !");
		 $this->redirect('index');

			
			
		}
	}
	
	
}