<?php

/*
 * Squelette : squelettes/inclure/inc_pied.html
 * Date :      Sat, 04 Aug 2018 15:17:26 GMT
 * Compile :   Wed, 08 Aug 2018 10:18:25 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inclure/inc_pied.html
// Temps de compilation total: 1.055 ms
//

function html_3f698b6e2265f25149ed34d17975986c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

<footer>

	<div class="zone-bandeau-mouvement">
		<map id="structures" name="structures">
			<area shape="rect" alt="Fédération FranÃ§aise des Motards en ColÃ¨re" title="" coords="0,17,103,67" href="http://www.ffmc.fr/" target="_blank">
			<area shape="rect" alt="Editions de la FFMC - Moto Magazine" title="" coords="104,17,195,67" href="http://www.motomag.com/" target="_blank">
			<area shape="rect" alt="Assurance Mutuelle des Motards" title="" coords="196,17,301,67" href="http://www.mutuelledesmotards.fr/" target="_blank">
			<area shape="rect" alt="Association pour la Formation Des Motards" title="" coords="302,17,408,67" href="http://www.afdm.org/" target="_blank">
			<area shape="rect" alt="FFMC Loisirs" title="" coords="409,17,485,67" href="http://www.ffmcloisirs.org/" target="_blank">
			<area shape="rect" alt="Commission Stop-Vol" title="" coords="486,17,616,67" href="http://www.ffmc.asso.fr/rubrique.php?id_rubrique=105" target="_blank">
			<area shape="rect" alt="Commission Juridique" title="" coords="617,17,747,67" href="http://www.ffmc.asso.fr/rubrique.php?id_rubrique=107" target="_blank">
			<area shape="rect" alt="ERJ2RM" title="" coords="748,17,876,67" href="http://www.ffmc.asso.fr/spip.php?rubrique257" target="_blank">
			<area shape="rect" alt="Fédération Européenne des Associations Motocyclistes" title="" coords="877,17,999,67" href="http://www.fema-online.eu/" target="_blank">
		</map>

		<img src="images/bandeau-mouvement.svg" width="100%" usemap="#structures"/>
	</div>

	<div class="bas">
		<span class="texte-copyright">' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
' © Conception <a href="http://www.antoinecabrol.com" target="_blank">Antoine Cabrol</a></span>
		&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
		<span><a class="texte-contact" href="spip.php?auteur7">Nous Contacter</a></span>
			&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
		<span><a class="texte-plan" href="spip.php?page=plan">Plan du site</a></span>
			&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
		<span><a class="texte-mentions" href="spip.php?page=legals">Mentions légales</a></span>
			&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
		<span><a href="spip.php?page=login"><img class="img-connexion" src="images/user.png" title="Connexion" alt="Connexion" height="26px"/></a></span>
		<span><a href="https://www.spip.net" target="_blank">
			<svg class="img-connexion" alt="Spip" height="26" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="336.7 357.7 258.7 113.5" enable-background="new 336.7 357.7 258.7 113.5" xml:space="preserve">
				<path fill="$couleur-fond--clair" d="M401.1,438.1C400.8,438.1,400.8,438.1,401.1,438.1c-4.7-18.4-23.8-16.5-26.9-29c-2.1-8.8,3.6-15.5,12.4-17.6
					c5.2-1.3,10.3,0,14.2,3.4c0.5,0.5,1.3,1,1.8,1.8l0,0l0,0c0,0.3,0.3,0.3,0.3,0.5l0.3,0.3l0.3,0.3l0,0c0.8,1,1.3,1.8,2.1,1.6
					c0.5-0.3,1-1.6,1-2.3c0.5-4.1,0.3-8.3-0.8-12.7c-4.7-18.9-23.5-30.3-42.4-25.6c-18.9,4.7-30.3,23.5-25.6,42.4
					c6.2,25.3,30,29.5,42.7,35.9c2.8,1.3,4.9,3.9,5.7,7c1.3,5.7-2.1,11.4-7.8,12.7l0,0c-0.3,0-0.3,0-0.5,0c-1,0.3-1.3,0-1.3,0.5
					c0,0.3,0.8,0.8,1.3,1c3.1,1.3,6.7,1.6,10.3,0.5C397.5,456.8,403.1,447.5,401.1,438.1L401.1,438.1L401.1,438.1L401.1,438.1"></path>
				<path fill="$couleur-fond--clair" d="M451.8,430.4c0,0-1,0-1.3,0c-1.8,0-3.1,0.5-3.9,1c0,0-0.3,0-0.3,0.3c-1.6,1-2.1,2.6-2.1,2.6l0,0l-7.5,23.8
					c-0.3,0.8,0.3,1.6,1.3,1.6h4.9c1,0,1.8-0.8,2.1-1.6l8-26.1C453.1,431.2,452.5,430.4,451.8,430.4"></path>
				<path fill="$couleur-fond--clair" d="M447.1,427.8h5.4c1.6-0.3,2.3-1.8,2.3-2.6c0-0.8-0.8-1.6-2.6-1.6C450.7,423.7,447.1,424.7,447.1,427.8
					C447.1,427.5,447.1,427.5,447.1,427.8"></path>
				<path fill="$couleur-fond--clair" d="M485.6,444.6c2.8-14.2-9.3-14.2-14-13.7c-0.3,0-0.8,0.3-1.3,0.3c-3.9,0.5-4.1,0.8-4.9,0.5
					c-0.3,0-0.5,0-0.5-0.3c-0.3-0.3-0.3-0.3-0.5-0.3l0,0c-1.3-0.8-2.6-0.5-2.6-0.5h-0.3l0,0c-1,0-1.8,0.8-2.1,1.6l-11.6,37
					c0,0-0.8,2.1,1.6,2.1h0.8l0,0c0,0,5.9,0.5,8.8-8l7.2-23.5c-1.3-0.5-1.8-0.8-2.6-1.3c-1.6-1-1.6-2.1-0.5-1.8c1,0.3,2.3,0.8,6.7,0.5
					c6.7,0,7.8,8,4.1,13.7c-2.1,3.4-4.1,4.1-6.5,4.9c-0.5,0.3-1.3,0.5-1.8,0.5l0,0c0,0-2.1,0.3-2.1,1c0,0.5,0.5,1,1.6,1
					c1,0.3,2.3,0.3,3.6,0.3C474.3,459.1,483.8,454.9,485.6,444.6C485.6,444.3,485.4,445.1,485.6,444.6"></path>
				<path fill="$couleur-fond--clair" d="M435.7,444.6c2.8-14.2-9.3-14.2-14-13.7c-0.3,0-0.8,0.3-1.3,0.3c-3.9,0.5-4.1,0.8-4.9,0.5
					c-0.3,0-0.5,0-0.5-0.3c-0.3-0.3-0.3-0.3-0.5-0.3l0,0c-1.3-0.8-2.6-0.5-2.6-0.5h-0.3l0,0c-1,0-1.8,0.8-2.1,1.6l-11.4,37
					c0,0-0.8,2.1,1.6,2.1h0.8l0,0c0,0,5.9,0.5,8.8-8l8-25.9c0.8,0,1.8,0,3.1,0c6.7,0,7.8,8,4.1,13.7c-2.1,3.4-4.1,4.1-6.5,4.9
					c-0.5,0.3-1.3,0.5-1.8,0.5l0,0c0,0-2.1,0.3-2.1,1c0,0.5,0.5,1,1.6,1c1,0.3,2.3,0.3,3.6,0.3C424.4,459.1,434.2,454.9,435.7,444.6
					C435.7,444.3,435.7,445.1,435.7,444.6"></path>
				<g enable-background="new    ">
					<path fill="$couleur-fond--clair" d="M495.6,451.5c0.8,0.8,1.2,1.8,1.2,3c0,1.5-0.5,2.7-1.5,3.7s-2.2,1.5-3.6,1.5c-1.3,0-2.3-0.4-3-1.2
						c-0.8-0.8-1.2-1.8-1.2-3.1c0-1.5,0.5-2.7,1.4-3.7c1-1,2.2-1.4,3.6-1.4C493.7,450.4,494.8,450.8,495.6,451.5z"></path>
					<path fill="$couleur-fond--clair" d="M532.7,432.3c1.8,1.7,2.7,4,2.7,6.9c0,1-0.1,2-0.3,2.8l-3.5,17.3H522l3.2-15.9c0.1-0.5,0.2-1,0.2-1.4
						c0-1.3-0.4-2.3-1.1-3.1c-0.8-0.7-1.8-1.1-3.1-1.1c-1.6,0-3.1,0.6-4.3,1.8c-1.3,1.2-2.1,2.8-2.5,4.8l-3,14.8h-9.6l5.8-29.2h9.6
						l-0.8,3.9c2.3-2.8,5.4-4.3,9.1-4.3C528.4,429.7,530.9,430.6,532.7,432.3z"></path>
					<path fill="$couleur-fond--clair" d="M562.8,431.4c2.1,1.1,3.8,2.6,4.9,4.6c1.2,2,1.7,4.3,1.7,6.9c0,1.2-0.2,2.7-0.5,4.4h-20.7
						c0.2,1.7,0.8,2.9,1.9,3.8c1.1,0.9,2.5,1.3,4.4,1.3c2.4,0,4.6-0.8,6.7-2.4l4.8,5.2c-3.2,3-7.2,4.4-11.9,4.4c-3.1,0-5.8-0.5-8.1-1.6
						c-2.3-1.1-4.1-2.6-5.3-4.6c-1.3-2-1.9-4.4-1.9-7c0-3.1,0.7-6,2.1-8.5c1.4-2.5,3.4-4.5,5.9-5.9c2.5-1.4,5.3-2.2,8.5-2.2
						C558.1,429.8,560.6,430.3,562.8,431.4z M560.4,441.1c0-1.4-0.4-2.5-1.2-3.3c-0.8-0.8-1.9-1.2-3.3-1.2c-1.5,0-2.9,0.5-4.1,1.5
						c-1.2,1-2.2,2.3-2.8,4h11.4C560.3,441.9,560.4,441.5,560.4,441.1z"></path>
					<path fill="$couleur-fond--clair" d="M584.3,449.2c-0.1,0.3-0.1,0.7-0.1,1.1c0,0.6,0.1,1,0.4,1.3c0.3,0.2,0.7,0.3,1.3,0.3c1.1,0,2.4-0.4,4-1.1
						l1,7.1c-1.1,0.6-2.4,1-3.8,1.3c-1.4,0.3-2.8,0.5-4.2,0.5c-2.6,0-4.7-0.7-6.3-2c-1.5-1.3-2.3-3.2-2.3-5.5c0-0.8,0.1-1.5,0.2-2.2
						l2.4-12.1h-4l1.2-6.4h4l1.6-8.1h9.6l-1.6,8.1h7.6l-1.2,6.4h-7.6L584.3,449.2z"></path>
				</g>
			</svg>
		</a></span>
	</div>

</footer>

' .
interdire_scripts(@$Pile[0]['spip_cron']) .
'
');

	return analyse_resultat_skel('html_3f698b6e2265f25149ed34d17975986c', $Cache, $page, 'squelettes/inclure/inc_pied.html');
}
?>