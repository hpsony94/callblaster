<?php
/**
* @file
*
* All Callblaster code is released under the GNU General Public License.
* See COPYRIGHT.txt and LICENSE.txt.
*
*....................
* www.nethram.com
*/

//Database configuration
//.............................................
$db_host="localhost";
$db_name="asterisk";
$db_user="root";
$db_pass="xyengle123";
//.............................................


//caller id and name
$caller_id="800Tigers";
//..............................................


//paths
//..............................................

$basepath="/var/www/html/callblaster/";

$agipath="/var/lib/asterisk/agi-bin/phpagi-2.20/";

$welcomeSound = $basepath."audio/welcome";
//sound file without extension
//..............................................



//agi configurations
$config = parse_ini_file("config.ini",true);
$exten_1=$config['press1']['extension'];
$context_1=$config['press1']['context'];
$priority_1="1";


$exten_2=$config['press2']['extension'];
$context_2=$config['press2']['context'];
$priority_2="1";

?>
