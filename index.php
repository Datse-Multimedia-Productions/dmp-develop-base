<?php 
/**
 * Main view of the DMP Develop project
 *
 * This is the main view of the DMP Develop Project.  This is the Base of the program.  
 *
 * @copyright 2015 Datse Multimedia Productions
 * @license GNU General Public License, version 3
 * @author Jigme Datse Yli-Rasku <jigme.datse@dmp-develop.com>
 * @version 0.0.1
 * 
 * @pacakge DMP-Develop/base/view
 * 
 */

require_once("view/header.php");
echo "
		<h1>DMP Development</h1>
		<p>If you're here and seeing this, you've got here too soon</p>
		<h2>PHP Version</h2>
		<p>This will only show up if the PHP version is enabled.</p>
		<p>Even if this is showing up, it's still too early</p>
";
require_once("view/footer.php");
?>
