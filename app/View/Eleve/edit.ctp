<h1>Modifier un eleve </h1>
<?php
 echo $this->form->create('Eleve');
 echo $this->form->input('ID');
 echo $this->form->input('nom');
 echo $this->form->input('prenom');
 echo $this->form->input('datenaissance');
 echo $this->form->end('Edit Eleve');