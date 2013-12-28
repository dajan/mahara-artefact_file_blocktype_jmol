<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2009 Catalyst IT Ltd and others; see:
 *                         http://wiki.mahara.org/Contributors
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage blocktype-jmol
 * @author     James Kerrigan
 * @author     Geoffrey Rowland 
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2011 James Kerrigan and Geoffrey Rowland geoff.rowland@yeovil.ac.uk
 *
 * This plugin uses the Jmol Java applet for interactive 3D rendering of
 * chemical structures
 * http://jmol.sf.net
 */

defined('INTERNAL') || die();

$string['title'] = 'Jmol';
$string['description'] = 'Affiche des structures chimiques issues de fichiers au format Jmol';
$string['showdescription'] = 'Afficher la description du fichier ?';
$string['width'] = 'Largeur';
$string['height'] = 'Hauteur';
$string['jmolscript'] = 'Script de lancement de Jmol';
$string['jmolscriptdescription'] = '<a target="blank" title="Jmol interactive scripting documentation" href="http://chemapps.stolaf.edu/jmol/docs/">Script Jmol</a> optionel à lancer au chargement de l\'applet Jmol pour personnaliser l\'affichage';
$string['controlscript'] = 'Jmol.js JavaScript';
$string['controlscriptdescription'] = 'Librairie <a target="blank" title="Librairie JavaScript Jmol.js" href="http://jmol.sourceforge.net/jslibrary/">JavaScript Jmol.js</a> permettant d\'ajouter des contrôles sous l\'applet Jmol<br />
par exemple : <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolButton">jmolButton</a>, <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolLink">jmolLink</a>, <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolCheckbox">jmolCheckbox</a>, <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolRadioGroup">jmolRadioGroup</a>, <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolMenu">jmolMenu</a>, <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolHtml">jmolHtml</a> et <a target="blank" href="http://jmol.sourceforge.net/jslibrary/#jmolBr">jmolBr</a>.';
$string['jmol'] = 'Jmol';
$string['Style'] = 'Style';
$string['Stick'] = 'Bâton';
$string['Wireframe'] = 'Wireframe';
$string['Ball and stick'] = 'Boules et bâtons';
$string['Spacefill'] = 'Remplissage';
$string['Display style'] = 'Afficher le style';
$string['Hydrogens'] = 'Hydrogènes';
$string['Show/hide hydrogen atoms'] = 'Afficher/cacher les atomes d\'hydrogène';
$string['Spin'] = 'Spin';
$string['Toggle spin on/off'] = 'Commuter le spin sur marche/arrêt';
$string['typeremoved'] = 'Ce bloc contient une structure chimique dont le type a été désactivé par l\'administrateur';
$string['configdesc'] = 'Configurer le type de fichiers que les utilisateurs peuvent inclure dans ce bloc. Si vous désactivez un type de fichier qui a déjà été utilisé dans un bloc, il ne sera plus affiché';
?>
