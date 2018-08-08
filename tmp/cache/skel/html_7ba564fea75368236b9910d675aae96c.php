<?php

/*
 * Squelette : ../prive/themes/spip/lists.css.html
 * Date :      Wed, 14 Mar 2018 16:27:18 GMT
 * Compile :   Wed, 08 Aug 2018 10:18:25 GMT
 * Boucles :   _objets, _objets2
 */ 

function BOUCLE_objetshtml_7ba564fea75368236b9910d675aae96c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(lister_tables_objets_sql(''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/themes/spip/lists.css.html','html_7ba564fea75368236b9910d675aae96c','_objets',78,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(interdire_scripts(chemin_image(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'icone_objet')))))))!=='' ?
		((	'
.liste-objets.' .
	interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'table_objet'))) .
	' .caption {background-image:url(') . $t1 . (	');padding-' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
	':30px;}')) :
		'');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_objets @ ../prive/themes/spip/lists.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_objets2html_7ba564fea75368236b9910d675aae96c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(lister_tables_objets_sql(''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets2';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('NOT', 
			array('=', 'cle', "'spip_rubriques'")));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/themes/spip/lists.css.html','html_7ba564fea75368236b9910d675aae96c','_objets2',154,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
.plan .menu-items.' .
interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'table_objet'))) .
' .item>a{padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':20px;' .
(($t1 = strval(interdire_scripts(chemin_image((	interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'icone_objet'))) .
	'-16.png')))))!=='' ?
		('background-image:url(' . $t1 . ');') :
		'') .
'}');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_objets2 @ ../prive/themes/spip/lists.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/themes/spip/lists.css.html
// Temps de compilation total: 30.673 ms
//

function html_7ba564fea75368236b9910d675aae96c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>' .
'/* Listes d\'objet */
.liste-objets{
	margin:' .
(($t1 = strval(interdire_scripts(strmult(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'1.5'))))!=='' ?
		($t1 . 'em') :
		'') .
' 0;
	/*font-size:.95em;*/
	border: 1px solid #dfdfdf;
	position:relative;
}
.liste-objets-lies,.liste-objets-associer {margin:0;}

.cadre .liste-objets{font-size:1em;}
.liste-objets > .image_loading {position:absolute;top:0;right:0;}
.liste-objets .pagination,.liste-objets p.pagination {
	margin:0; padding:1px 5px;
	background:#eee; border:none;
}
.liste-objets .pagination .sep {color:#aaa;}

.liste-objets table {width:100%; /* surcharger le 99% de spip ? */ max-width:none; background:white; border:none; margin:0;}
.liste-objets table caption {margin:0;text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';padding:0 3px;background-color:#FFFFFF;}
.liste-objets table caption .formulaire_spip { top:2px; }
.caption-wrap {padding:0 3px;background-color:#FFFFFF;}

.liste-objets .caption {display:block;color:#333;font-size:1.0em;padding:' .
(($t1 = strval(interdire_scripts(strdiv(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'4'))))!=='' ?
		($t1 . 'em') :
		'') .
' 5px;background:none no-repeat ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
' 2px #FFFFFF}
.liste-objets tr {background:white;}
.liste-objets .row_odd td {background:white;}
.liste-objets .row_even td {background:white;}
.liste-objets thead th {background:#eee;}
.liste-objets tr:hover td,.liste-objets tbody tr:hover th {background-color: #f8f8f8;}
.liste-objets tr th {border-color:#dfdfdf; border-left:0; border-right:0;}
.liste-objets tr td {border-color:#dfdfdf; border-left:0; border-right:0; vertical-align: middle;}

.liste-objets tr > .statut,.liste-objets tr > .picto {width: 16px; padding-left:2px;padding-right:2px;text-align:center;}
.liste-objets tr > .auteur {width: 80px;}
.liste-objets tr > .auteur > .inner {display: block;max-height: 10em;overflow-x: hidden;border:0;background: none;}
.liste-objets tr > .date {width: 90px;}
.liste-objets tr > .id {width: 40px; text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';}
.liste-objets tr > .action {width: 90px; text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';}
.liste-objets tr td.syndication .etat {display:block;color:red;}
.liste-objets tr > .utilisations {width:120px;}
.liste-objets tr.confirmation {display:none;}

.liste-objets tr td {font-size:0.9em;}
.liste-objets tr td.secondaire {font-size:0.85em;}
.liste-objets tr td.principale {font-size:1.0em;}
.liste-objets tr td.titre a {display: block;}
.liste-objets tr td.titre span.surtitre, .liste-objets tr td.titre span.soustitre {font-size: 85%; display:block; overflow: hidden; text-overflow: ellipsis;white-space: nowrap;max-width: 200px;}
.liste-objets tr td.titre .spip_logo {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':5px;margin-bottom:5px;}
.liste-objets tr td.logo {text-align: center; padding: 0 5px;}
.liste-objets tr td.logo img {display: block; margin: 0 auto;}
.liste-objets.auteurs tr td.logo a {width: 40px; height: 40px; display: block; background-position: center center; background-size: cover; border-radius: 50%; margin: 3px 0;}
.liste-objets-associer.auteurs tr td.logo a {width: 30px; height: 30px; display: block; background-position: center center; background-size: cover; border-radius: 50%; margin: 2px 0;}
.liste-objets tr td > span {font-size:0.85em;}
.liste-objets table td, .liste-objets table th {' .
(($t1 = strval(interdire_scripts(strdiv(entites_html(table_valeur(@$Pile[0], (string)'line-height', null),true),'4'))))!=='' ?
		(' padding: ' . $t1 . 'em;') :
		'') .
' }

.liste-objets .bouton_action_post .submit,.liste-objets .button {font-size:1em;}
.liste-objets .action a {color:inherit;}

.liste-objets.auteurs th.statut {line-height:1px;padding-bottom:0;}
.liste-objets.auteurs td.nom .spip_logos { vertical-align: middle; margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
': 0.3em; }

' .
BOUCLE_objetshtml_7ba564fea75368236b9910d675aae96c($Cache, $Pile, $doublons, $Numrows, $SP) .
'

.liste-objets.traductions .trad {text-align:center;}

/* dans une colonne laterale, ne visualiser que l\'info .lat, le statut et l\'id */
.lat .liste-objets tr > .secondaire,
.lat .liste-objets tr > .auteur,
.lat .liste-objets tr > .date,
.lat .liste-objets tr > .action,
.lat .liste-objets tr > .syndication,
.lat .liste-objets tr .spip_logo {display:none;}
.lat .liste-objets tr td.principale {font-size:0.9em;max-width:120px;word-wrap: break-word;}

.en-edition .inner {font-size:0.9em;}
.en-edition h3 {font-size:1.1em;}
.en-edition .bouton_action_post {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';margin:5px 0 0;}
.en-edition .liste-items {margin:0;}
.en-edition .liste-items .item {padding:2px 0;}
.en-edition .item .icone-objet {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';margin-top:2px;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':5px;}
.en-edition .item .bouton_action_post {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';margin-top:-1px;}
.lte7 .en-edition .item .bouton_action_post {margin-top:-1.5em;}


/* listes */
.liste {margin:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true)) .
' 0;}
.liste > h1,.liste > .h1,
.liste > h2,.liste > .h2,
.liste > h3,.liste > .h3,
.liste > h4,.liste > .h4,
.liste > h5,.liste > .h5,
.liste > h6,.liste > .h6 {margin-bottom:0;}
.liste_items,.liste-items {list-style:none;margin:0 0 ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true)) .
';padding:0;border-top:1px solid #ddd;clear:both;}
.liste_items .item,.liste-items .item  {border-bottom:1px solid #ddd;padding:' .
(($t1 = strval(interdire_scripts(strdiv(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'2'))))!=='' ?
		($t1 . 'em') :
		'') .
' 0; overflow:hidden;clear:both;}
.liste_items .odd,.liste-items .odd  {background:#eee;}
.liste_items .item:hover,.liste-items .item:hover  {background-color:' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true))))))!=='' ?
		('#' . $t1) :
		'') .
';}
.liste_items .court:hover,.liste-items .court:hover  {background-color:#eee;}
.liste_items .item.on,.liste-items .item.on  {background-color:' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true))))))!=='' ?
		('#' . $t1) :
		'') .
';font-weight:normal;}
.liste_items .item.on:hover,.liste-items .item.on:hover  {background-color:' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)))))!=='' ?
		('#' . $t1) :
		'') .
';}
.liste_items .item h3,.liste-items .item h3  {margin:0;}
.liste_items .item a img,.liste-items .item a img {vertical-align: bottom;}

/* Permet d\'utiliser la grid sur les listes */
.item.unit, .item.lastUnit {clear:none;}

.liste_items .item .actions,.liste-items .item .actions  {float:none;margin:0;clear:both;text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';}

.tri, .pagination {background:#eee;border-top:1px solid #ddd;border-bottom:1px solid #ddd; margin: 0;padding:2px 0; /*font-size: 11px;*/ font-weight: bold; text-align: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
'; white-space: nowrap;margin-top:1em; }
.tri {text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';}
.tri .on, .pagination .on { background:#ccc;padding:2px 3px;color:#fff; }
.tri img, .pagination img {vertical-align:bottom;}

.pagination + .tri, .tri + .pagination {border-top:0;margin-top:0;}
.pagination + .liste_items, .tri + .liste_items {border-top:0;margin-top:0;}
.liste_items + .tri, .liste_items + .pagination {margin-top:-1em;margin-bottom:1em;}

.lat .pagination {font-size:11px;white-space:normal;text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';}
.lat .tri {font-size:11px;}


/* menus */
/* listes */
.menu-items {list-style:none;margin:1em 0;padding:0;border-top:1px solid #ddd;clear:both;}
.menu-items .item {border-bottom:1px solid #ddd; padding:0; overflow:hidden; clear:both;}
.menu-items .menu-items {margin:0;padding:0;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':11px;}
.menu-items .item >a,.menu-items .item >strong.on {display:block;padding:' .
(($t1 = strval(interdire_scripts(strdiv(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'2'))))!=='' ?
		($t1 . 'em') :
		'') .
' 0;}
.menu-items .item >a:hover {background-color:' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true))))))!=='' ?
		('#' . $t1) :
		'') .
';}
.menu-items .item >.on {background-color:' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true))))))!=='' ?
		('#' . $t1) :
		'') .
';}

/* plan de site */
.plan .menu-items { border-top:0; }
.plan .menu-items .menu-items {border-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':1px solid #ddd;}
.plan .menu-items .item .pagination {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':11px;border-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':1px solid #ddd;}
.plan .menu-items .item {overflow:visible;border-bottom:0;padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':6px;}
.plan .menu-items .item>a {padding: 0.25em 0 0.25em 5px;background-repeat:no-repeat;background-position:center ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';background-repeat:no-repeat;}

' .
BOUCLE_objets2html_7ba564fea75368236b9910d675aae96c($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_7ba564fea75368236b9910d675aae96c', $Cache, $page, '../prive/themes/spip/lists.css.html');
}
?>