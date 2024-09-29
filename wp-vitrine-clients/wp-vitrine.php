<?php
/**
 * Plugin Name:       clients de l'entreprise
 * Description:       Module de gestion et affichage des clients de l'entreprise
 * Requires PHP:      7.4
 * Version:           1.0.0
 * Author:            WP Vitrine
 * Author URI:        https://wp-vitrine.fr
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

 
// Register custom post type
// Post type: Client
function create_client_post_type() {
 $labels = array(
   'name' => _x('Clients', 'Post Type General Name', 'text-domain'),
   'singular_name'         => _x('Client', 'Post Type Singular Name', 'text-domain'),
   'menu_name'             => _x('Clients', 'Admin Menu text', 'text-domain'),
   'name_admin_bar'        => _x('Client', 'Add New on Toolbar', 'text-domain'),
   'archives'              => __('Client', 'text-domain'),
   'attributes'            => __('Client', 'text-domain'),
   'parent_item_colon'     => __('Client', 'text-domain'),
   'all_items'             => __('Tous les Clients', 'text-domain'),
   'add_new_item'          => __('Ajouter un Client', 'text-domain'),
   'add_new'               => __('Ajouter un', 'text-domain'),
   'new_item'              => __('Nouveau Client', 'text-domain'),
   'edit_item'             => __('Modifier Client', 'text-domain'),
   'update_item'           => __('Enregistrer Client', 'text-domain'),
   'view_item'             => __('Voir Client', 'text-domain'),
   'view_items'            => __('Voir Clients', 'text-domain'),
   'search_items'          => __('Rechercher Client', 'text-domain'),
   'not_found'             => __('Pas de résultats', 'text-domain'),
   'not_found_in_trash'    => __('Pas de résultats', 'text-domain'),
   'featured_image'        => __('Image mise en avant', 'text-domain'),
   'set_featured_image'    => __('Insérer image mise en avant', 'text-domain'),
   'remove_featured_image' => __('Supprimer image mise en avant', 'text-domain'),
   'use_featured_image'    => __('Utiliser image mise en avant', 'text-domain'),
   'insert_into_item'      => __('Ajouter au client', 'text-domain'),
   'uploaded_to_this_item' => __('Télécharger au client', 'text-domain'),
   'items_list'            => __('Liste de clients', 'text-domain'),
   'items_list_navigation' => __('Navigation dans la liste des clients', 'text-domain'),
   'filter_items_list'     => __('Filtrer la liste des clients', 'text-domain'),
 );
 
 $args = array(
   'label' => __('Client', 'text-domain'),
   'description'           => __('CPT de client', 'text-domain'),
   'labels'                => $labels,
   'menu_icon'             => 'dashicons-businessman',
   'supports'              => array('title', 'custom-fields'),
   'taxonomies'            => array(),
   'hierarchical'          => true,
   'exclude_from_search'   => false,
   'publicly_queryable'    => true,
   'has_archive'           => true,
   'public'                => true,
   'show_ui'               => true,
   'show_in_menu'          => true,
   'show_in_admin_bar'     => true,
   'can_export'            => false,
   'show_in_nav_menus'     => true,
   'menu_position'         => 5,
   'capability_type'       => 'post',
   'show_in_rest'          => true,
   'rest_base'             => '',
   'rest_controller_class' => '',
   'rewrite'               => true,
   'query_var'             => '',
 );
 register_post_type('client', $args);
}
add_action('init', 'create_client_post_type', 0);