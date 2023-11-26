<?php

/*
 * Plugin Name:       Calendar Reservation
 * Description:       My calendar for reservation.
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

defined('ABSPATH') or die('');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php'))
    require_once dirname(__FILE__) . '/vendor/autoload.php';

define('PLUGIN_ROOT_PATH', plugin_dir_path(__FILE__) );
define('PLUGIN_URL',plugin_dir_url((__FILE__)));

use Inc\Base\Activation;
use Inc\Base\Deactivation;
function activate_calendar_plugin(){
    Activation::activation();
}

register_activation_hook(__FILE__, 'activate_calendar_plugin' );

function deactivate_calendar_plugin(){
    Deactivation::deactivation();
}


register_deactivation_hook(__FILE__, 'deactivate_calendar_plugin' );

if(class_exists('Inc\\Init')){
        Inc\Init::started_services();
    }


// Fonction pour afficher les réservations par heure
// function afficher_reservations()
// {
//     // Code pour récupérer et afficher les réservations par heure
//     // (par exemple, à partir d'une base de données ou d'une source de données fictive)
//     $disponibilites = array(
//         '09:00 - 10:00',
//         '10:00 - 11:00',
//         '11:00 - 12:00',
//         // ... d'autres plages horaires disponibles
//     );

//     // Affichage des plages horaires disponibles
//     $output = '';
//     foreach ($disponibilites as $horaire) {
//         $output .= '<form method="post" action="' . esc_url(admin_url('admin-post.php')) . '">';
//         $output .= '<input type="hidden" name="action" value="choisir_horaire">';
//         $output .= '<input type="hidden" name="horaire" value="' . esc_attr($horaire) . '">';
//         $output .= '<p>' . $horaire . ' <input type="submit" value="Réserver"></p>';
//         $output .= '</form>';
//     }
//     return $output;
// }

// // Fonction pour gérer la réservation et la redirection
// function choisir_horaire()
// {
//     // Vérification et traitement de la réservation
//     if (isset($_POST['horaire'])) {
//         // Code pour enregistrer la réservation dans la base de données
//         // Redirection vers la page d'options après la réservation
//         wp_redirect(site_url('/page-options-de-reservation'));
//         exit;
//     }
// }
// // Fonction pour ajouter un élément à la barre de menu
// function ajouter_element_menu()
// {
    // global $wp_admin_bar;

    // // Remplace "Mon Élément" par le libellé que tu souhaites afficher
    // $wp_admin_bar->add_menu(array(
    //     'id' => 'mon_element_menu',
    //     'title' => 'Mon Élément',
    //     'href' => '#', // Ajoute ici le lien vers la page ou l'action souhaitée
    //     'meta' => array(
    //         'target' => '_blank', // Optionnel : ouvre le lien dans un nouvel onglet
    //     ),
    // ));
// }

// // Action pour ajouter l'élément au menu
// add_action('admin_menu', 'ajouter_element_menu');
// // Enregistrement des actions WordPress
// add_shortcode('reservations', 'afficher_reservations');
// add_action('admin_post_choisir_horaire', 'choisir_horaire');
// add_action('admin_post_nopriv_choisir_horaire', 'choisir_horaire');
