Bonjour,
ce petit exercice sert a cr�er un CRUD en cake php 2.2.4
pour d�marrer l'application
importez la base de donn�e nomm�e cake.sql dans votre serveur BD ( vous la trouverez sur le dossier initiale)
placer tout le dossier cakephp2 dans votre ALIAS
tapez sur le navigateur : localhost/cakephp2/Eleve/index     (�a vous permettra d'essayer l'application)
pour ajouter des notes tapez : localhost/cakephp2/module/add
le controlleur Eleve c'est EleveController : il contient les op�ration d'affichage, ajout, modification et suppression
toutes les vues sont sur le dossier View/Eleve
Le Controlleur Module c'est ModuleController : il contient l'ajout d'une mati�re a un �l�ve
l'association entre Eleve et module est cr�e sur le model Eleve
le code associ� c'est :
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

dont la relation c'est hasMany (un el�ve a plusieurs modules).
l'ajout d'une mati�re n'est pas possible quand l'id �l�ve sera vide.
Pour toute information suppl�mentaire, contactez : Abderraouf_merazka@hotmail.fr
