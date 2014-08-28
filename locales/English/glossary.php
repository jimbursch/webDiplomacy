<?php
/*
    Copyright (C) 2004-2010 Kestas J. Kuliukas

	This file is part of webDiplomacy.

    webDiplomacy is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    webDiplomacy is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with webDiplomacy.  If not, see <http://www.gnu.org/licenses/>.
 */

defined('IN_CODE') or die('This script can not be run by itself.');

/**
 * @package Base
 * @subpackage Static
 */


$glossary = array();

/* #############################
NOTES



'' => '???',
'' => '???',



*/ ###################################

$glossaryentries = array(

"A to H" => "Sub-section",

'Anonymous' => 'A game option wherein the identity of the players is not shown.',
'Bet' => 'The "Bet" is the number of points that each players contributes to the "Pot" at the beginning of a game. At the end of the game, the Pot is either given to the winner or distributed among the survivors. See also <a href="glossary.php?term=Winner%20Takes%20All%20(WTA)#Winner%20Takes%20All%20(WTA)">Winner Take All (WTA)</a>, <a href="glossary.php?term=Points%20Per%20Supply%20Center%20(PPSC)#Points%20Per%20Supply%20Center%20(PPSC)">Points Per Supply Center (PPSC)</a>.',
'Bounce' => 'A bounce occurs when two units attempt to enter the same province at the same time. Since only one unit can occupy a province, two units that try to occupy the same province end up remaining in their original territoty.',
'Civil Disorder (CD)' => 'Civil Disorder occurs after two NMRs. See also <a href="glossary.php?term=No%20Moves%20Received%20(NMR)#No%20Moves%20Received%20(NMR)">No Moves Received (NMR)</a>.',
'Cut Support' => 'When a unit is supporting the movement of another unit, that support is cut if the supporting unit is attacked by another unit.',
'Demilitarized Zone (DMZ)' => 'A province into which two or more players agree not to move. A DMZ can create a reassuring buffer between players who don\'t fully trust one another, and may be part of a <a href="glossary.php?term=Non-Aggression%20Pact%20(NAP)#Non-Aggression%20Pact%20(NAP)">Non-Aggression Pact (NAP)</a>.',
'Diplomacy A-Z' => 'Diplomacy A-Z is an exhaustive glossary of terms used in Diplomacy, the game and the hobby. It was first published 1989-1990 in a zine for those who played Diplomacy by mail. It can be found on the web in <a href="http://badpets.net/Diplomacy/AtoZ/">html</a> and <a href="http://badpets.net/Diplomacy/AtoZ/AtoZ.pdf">pdf</a> format.',
'Draw' => 'A draw occurs when all surviving players vote to declare a draw and end the game. A draw usually occurs when all surviving players agree that neither maneuver nor negotiation can make a meaningful difference to the arrangement of units on the board. See also <a href="glossary.php?term=Solo%20Win#Solo%20Win">Solo Win</a>.',
'End of Game (EoG)' => 'As in, "Each player gave an EoG report in the forum after the tournament," or "Because EoG conditions have not been met, the game will continue."',
'Face-to-Face (FTF, F2F)' => 'Refers to in-person meeting or playing the board game.',
'Full Press' => 'A game which includes both private and global in-game messaging. See also <a href="glossary.php?term=Public%20Press#Public%20Press">Public Press</a>, <a href="glossary.php?term=Gunboat%20(GB)#Gunboat%20(GB)">Gunboat</a>.',
'Ghost-Rating' => 'Ghost-Rating is an unofficial rating system that measures the ability of players over time. It is considered a more accurate measure of ability than the webDiplomacy point system. For more, visit the <a href="https://sites.google.com/site/phpdiplomacytournaments/theghost-ratingslist">Ghost-Rating web site</a>.',
'Global Message' => 'A global message is a message that all players can see. Global messaging may also be referred to as public press.',
'Gunboat (GB)' => 'A variant in which there is no in-game messaging. See also <a href="glossary.php?term=Public%20Press#Public%20Press">Public Press</a>, <a href="glossary.php?term=Full%20Press#Full%20Press">Full Press</a>.',
'Home Supply Center (HSC)' => 'An HSC is a supply center located in a player\'s home country. Only HSCs can create new units (army or fleet).',

"I to P" => "Sub-section",

'Intentional Bounce' => 'Also known as Self Bounce. A player may purposely order two units to the same province (which bounce) to prevent an enemy unit from moving into the same province. A player does this when the player does not want to occupy a province, but also wants to keep an enemy out of the province.',
'Intentional Disband' => 'An intentional disband usually occurs during the retreat phase when a player chooses to disband a unit instead of retreat. Two players may orchestrate an intentional disband in order to move a unit by disbanding it and then reforming the unit at a home supply center.',
'Malicious Support' => 'Similar to <a href="glossary.php?term=Unwanted%20Support#Unwanted%20Support">Unwanted Support</a>, except the intent of the supporting (third party) is to create increased friction between two parties which agreed to bounce, in the hopes of disrupting an alliance.',
'Metagaming' => 'Metagaming occurs when a player uses a communication channel or information obtained outside of a game to further play in the game. For example, players who email one another to discuss a game are considered metagaming because they are not using in-game communication channels. Some forms of metagaming are considered cheating.',
'Moderator (Mod)' => 'Moderators are people with admin access to the game site and can assist with technical or rules problems.',
'No Moves Received (NMR)' => 'An NMR occurs when no orders are entered for a phase. When two NMRs occur in a row, the player goes into <a href="glossary.php?term=Civil%20Disorder%20(CD)#Civil%20Disorder%20(CD)">Civil Disorder (CD)</a>.',
'Non-Aggression Pact (NAP)' => 'An agreement by which two or more players promise not to attack one another, sometimes including a <a href="glossary.php?term=Demilitarized%20Zone%20(DMZ)#Demilitarized%20Zone%20(DMZ)">Demilitarized Zone (DMZ)</a>.',
'Pause' => 'Games can be paused if all surviving players vote for a pause by clicking on the pause button. Games are un-paused in the same manner. Also, site <a href="glossary.php?term=Moderator%20(Mod)#Moderator%20(Mod)">moderators (mods)</a> can pause/un-pause a game.',
'Phase' => 'Diplomacy play takes place over the course of game years (beginning in 1901 in classic Diplomacy). Each year comprises two seasons (spring, autumn) which are in turn broken down into two phases: diplomacy/orders and retreats. Autumn has a third phase: build.',
'Points' => 'The webDiplomacy point system is designed to reward active players and help weed out players who are less reliable. For more on the points system, see <a href="./points.php">Intro to webDiplomacy Points</a>. ',
'Points Per Supply Center (PPSC)' => 'A game in which points are divided per supply center possessed at the end of the game. See also <a href="glossary.php?term=Winner%20Takes%20All%20(WTA)#Winner%20Takes%20All%20(WTA)">Winner Takes All (WTA)</a>.',
'Pot' => 'In order to enter a game, a player must contribute points (<a href="glossary.php?term=Bet#Bet">bet</a>) to the pot. The points in the pot are distributed to the winner (<a href="glossary.php?term=Winner%20Takes%20All%20(WTA)#Winner%20Takes%20All%20(WTA)">WTA</a>) or winners (<a href="glossary.php?term=Points%20Per%20Supply%20Center%20(PPSC)#Points%20Per%20Supply%20Center%20(PPSC)">PPSC</a>) at the end of the game.',
'Private Message (PM)' => 'Private messages, as opposed to <a href="glossary.php?term=Global%20Message#Global%20Message">public or global messages</a>, are private communications between two players.',
'Public Press' => 'A variant in which there is no private in-game messaging, but global messaging is allowed. See also <a href="glossary.php?term=Gunboat%20(GB)#Gunboat%20(GB)">Gunboat</a>, <a href="glossary.php?term=Full%20Press#Full%20Press">Full Press</a>.',
'Ready Button' => 'The Ready button saves orders to the game server and the orders are executed when every other player has also pressed the Ready button. When the Ready button  is pressed, it is replaced by a Not Ready button, which changes the status of the orders to saved, but not ready for execution. See also <a href="glossary.php?term=Save%20Button#Save%20Button">Save Button</a>',
'Save Button' => 'The save button saves orders to the game server, but the orders are not executed until the phase time has expired. See also <a href="glossary.php?term=Ready%20Button#Ready%20Button">Ready Button</a>.',
'Solo Win' => 'When one player is able to capture 18 supply centers, that player has achieved a solo win. Most games end in a <a href="glossary.php?term=Draw#Draw">draw</a>, where more that one player is a winner.',
'Tap' => 'A move intended to cut support only, not take the province in question.',



"Q to Z" => 'Sub-section',

'Reliability Rating (RR)' => '???',
'Sitter' => 'A sitter is a player who temporarily substitutes for another player. See also <a href="glossary.php?term=Substitute#Substitute">Substitute</a>.',
'Special Rules Game (SRG)' => '???',
'Stab' => 'In the game of Diplomacy, when it is said that one player "stabbed" another, it means that one player betrayed the trust of another player. It comes from the term "backstab" which is to attack someone unfairly or in a deceitful manner. In the game of Diplomacy it is considered a common tactic and entirely within the rules of the game.',
'Substitute' => '???',
'Supply Center (SC)' => 'Indicated provinces that supply an army or fleet. There are 34 in classic Diplomacy and 18 must be captured for a solo win.',
'Tournament Director (TD)' => '???',
'Unwanted Support' => 'Unwanted Support occurs when a player supports another player\'s move into a province when the second player\'s intention was for the unit to bounce. See also <a href="glossary.php?term=Intentional%20Bounce#Intentional%20Bounce">Intentional Bounce</a>, <a href="/glossary.php?term=Malicious%20Support#Malicious%20Support">Malicious Support</a>.',
'Variant' => 'In addition to classic Diplomacy, many variants in both maps and rules have been developed, including global maps, past and future scenarios, and fictional worlds.',
'Winner Takes All (WTA)' => 'A game in which the winner takes all the points. See also <a href="glossary.php?term=Points%20Per%20Supply%20Center%20(PPSC)#Points%20Per%20Supply%20Center%20(PPSC)">Points Per Supply Center (PPSC)</a>.',
'' => ''
);

foreach($glossaryentries as $term=>$definition)
	$glossary[$term]=$definition;

$i=1;

print libHTML::pageTitle('Glossary','Commonly used terms and their definition.');


$sections = array();
$section=0;
foreach( $glossary as $t => $d )
	if ( $d == "Sub-section" )
		$sections[] = '<a href="#glossary_'.$section++.'" class="light">'.$t.'</a>';
print '<div style="text-align:center; font-weight:bold"><strong>Sections:</strong> '.implode(' - ', $sections).'</div>
	<div class="hr"></div>';

$section=0;
foreach( $glossary as $t => $d)
{
	if ( $d == "Sub-section" )
	{
		if( $section ) print '</ul></div>';

		print '<div><p><a name="glossary_'.$section.'"></a><strong>'.$t.'</strong></p><ul>';

		$termnumber=1;
		$section++;
	}
	else
	{
		print '<li><div id="glossary_definition_'.$section.'_'.$termnumber.'"><a class="glossary_term" name="'.htmlentities($t).'" href="./glossary.php?term='.htmlentities($t).'#'.htmlentities($t).'">'.$t.'</a>';

		if (isset($_GET['term']) && $_GET['term']==htmlentities($t)) {
			print '<div class="glossary_definition" style="margin-top:5px; margin-bottom:15px;"><ul><li>'.$d.'</li></ul></div>';
			}

		print '</div></li>';
		$termnumber++;
	}
}
print '</ul></div>
</div>';

?>

