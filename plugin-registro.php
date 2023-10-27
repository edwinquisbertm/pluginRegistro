<?php
/*
 * Plugin Name:       Registro Wordpress
 * Plugin URI:        http://localhost/
 * Description:       Este plugin sirve para crear un formulario de registro para wordpress
 * Version:           1.0.0
 * Requires at least: 6.1
 * Requires PHP:      7.4
 * Author:            Edwin Quisbert Montalvo
 * Author URI:        https://github.com/edwinquisbertm
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


 //API REST
 require_once plugin_dir_path( __FILE__)."/includes/API/api-registro.php";

 //Shortcodes
 require_once plugin_dir_path( __FILE__)."public/shortcode/form-registro.php";