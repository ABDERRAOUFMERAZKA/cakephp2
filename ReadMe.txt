Bonjour,
ce petit exercice sert a créer un CRUD en cake php 2.2.4
pour démarrer l'application
importez la base de donnée nommée cake.sql dans votre serveur BD ( vous la trouverez sur le dossier initiale)
placer tout le dossier cakephp2 dans votre ALIAS
tapez sur le navigateur : localhost/cakephp2/Eleve/index     (ça vous permettra d'essayer l'application)
pour ajouter des notes tapez : localhost/cakephp2/module/add
le controlleur Eleve c'est EleveController : il contient les opération d'affichage, ajout, modification et suppression
toutes les vues sont sur le dossier View/Eleve
Le Controlleur Module c'est ModuleController : il contient l'ajout d'une matière a un élève
l'association entre Eleve et module est crée sur le model Eleve
le code associé c'est :
**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'module' => array(
		    'className' => 'module',
		    'foreignKey' => 'ID_ELEVE',
		    'dependent' => false,
		    'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

dont la relation c'est hasMany (un elève a plusieurs modules).
l'ajout d'une matière n'est pas possible quand l'id élève sera vide.
Pour toute information supplémentaire, contactez : Abderraouf_merazka@hotmail.fr
