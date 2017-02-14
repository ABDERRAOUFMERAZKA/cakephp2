<h1>Ajout d'un nouveau Module </h1>
<?php
 echo $this->form->create('module');
 echo $this->form->input('ID_ELEVE');
 echo $this->form->input('intitule');
 echo $this->form->input('note');
 echo $this->form->end('Save module');