<?php
/**
 * PacCentral Plugin
 *
 * @package     PacCentral
 * @author      Scott Henderson
 * @copyright   2019 Scott Henderson
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: PacCentral-Plugin
 * Plugin URI:  https://www.paccentraljc.org/
 * Description: This plugin interfaces with the Orchid Society Pacific Central Judging Center database and the website
 * Version:     1.0.0
 * Author:      Scott Henderson
 * Author URI:  https://scotthenderson.netlify.app/
 * Text Domain: PacCentral-Plugin
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

 function display_Pac_Central_page() {
    echo 'Welcome to Pac Central Admin page';
  }
  function Pac_Central_admin_menu() {
    add_menu_page(
          'Pac Central Admin',// page title
          'Pac Central Admin',// menu title
          'manage_options',// capability
          'Pac Central Admin',// menu slug
          'display_Pac_Central_page' // callback function
      );
  }
  add_action('admin_menu', 'Pac_Central_admin_menu');