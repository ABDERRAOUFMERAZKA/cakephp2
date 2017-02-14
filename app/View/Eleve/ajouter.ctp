<h1>Ajout d'un nouveau eleve </h1>
<?php
 echo $this->form->create('Eleve');
 echo $this->form->input('nom');
 echo $this->form->input('prenom');
 echo $this->form->input('datenaissance');
 echo $this->form->end('Save Eleve');