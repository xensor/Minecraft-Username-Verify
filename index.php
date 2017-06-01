<?php
defined( 'ABSPATH' ) or die( 'Idiot, this is a unauthorize access. Do it again and you get banned.' );
/**
*
* @link              http://lostwebdesigns.com
* @since             1.0.0
* @package           Wp_Cbf
*
* @wordpress-plugin
* Plugin Name:       Xensor Minecraft Username Checker
* Plugin URI:        http://www.pixelmonmemories.ml
* Description:       Ability to put website into minerenance and redirect banned members to a page
* Version:           1.0.1
* Author:            Xensor, ChuChuYokai
* Author URI:        http://www.pixelmonmemories.ml
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
* Text Domain:       xensor-minerenance
* Domain Path:       /languages
*/


function miner_admin()
{
  include('miner_admin.php');
}
function miner_admin_actions()
{
  add_options_page("Minecraft Miner", "Minecraft Miner", 1, "minecraft_miner", "miner_admin");
}



add_action('admin_menu', 'miner_admin_actions');

?>