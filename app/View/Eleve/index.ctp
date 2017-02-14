<h1> Liste des Eleves </h1>
<h2> ajouter des nouveaux élèves ? </h2>
<?php echo $this->HTML->link('ajouter nouveaux élèves', array('controller'=>'eleve','action'=>'ajouter')); ?>
<table>
 <tr>
   <th>Nom</th>
   <th>Prenom</th>
   <th>date_naiss</th>
   <th> Modifier </th>
   <th> supprimer </th>
 </tr>
 <?php foreach($eleves as $eleve) : ?>
 <tr>
   <td><?php echo $eleve['Eleve']['prenom']; ?></td>
   <td><?php echo $eleve['Eleve']['nom']; ?></td>
   <td><?php echo $eleve['Eleve']['datenaissance']; ?></td>
   <td><?php echo $this->HTML->link('Edit', array('controller'=>'eleve','action'=>'edit', 
   $eleve['Eleve']['ID'])); ?></td>
  <td><?php echo $this->Form->postLink('Delete', array('controller' => 'Eleve', 'action'=> 'delete', $eleve['Eleve']['ID']), array('confirm' => 'Are you sure you want to delete this student?')); ?>﻿</td>
 </tr>
 <?php endforeach; ?>
 <?php unset ($eleve); ?>