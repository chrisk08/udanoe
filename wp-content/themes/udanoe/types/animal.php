<?php /* Créaton du post Catégorie Portfolio */
add_action( 'init', 'register_animals' );

function register_animals(){

  $label = array(

    'name' => 'Tous les Animaux',
    'singular_name' => 'Animal',
    'add_new' => 'Ajouter un Animal',
    'add_new_item' => 'Ajouter une nouvelle Animal',
    'edit_item' => 'Editer une Animal',
    'new_item' => 'Nouvel Animal',
    'view_item' => 'Voir l\'animal',
    'search_item' => 'Rechercher un Animal',
    'not_found' => 'Aucun Animal',
    'not_found_in_trash' => 'Aucun Animal dans la corbeille',
    'parent_item_colon' => '',
    'menu_name' => 'Animaux'

  );
  
  $args = array(

     'labels' => $label,
     'public' => true,
     'publicly_queryable' => true,
     'show_ui' => true,
     'show_in_menu' => true,
     'query_var' => true,
     'rewrite' => true,
     'capability_type' => 'post',
     'has_archive' => true,
     'hierarchical' => false,
     'menu_position' => 5,
     'supports' => array('title', 'editor', 'author', 'thumbnail')

  ); 

  register_post_type('animals', $args); //id

  // Taxonomie


  $labels = array(

    'name' => 'Catégories',
    'singular_name' => 'Catégorie',
    'search_items' => 'Rechercher une Catégorie',
    'all_items' => 'Toutes les Catégories',
    'parent_item' => 'Catégorie parent',
    'parent_item_colon' => 'Catégorie parent',
    'edit_item' => 'Editer cette Catégorie',
    'update_item' => 'Mettre à jour cette Catégorie',
    'add_new_item' => 'Ajouter une nouvelle Catégorie',
    'new_item_name' => 'Nouvelle Catégorie',
    'menu_name' => 'Catégories'

  );

  register_taxonomy('categorie', array('animals'), array( //id taxonomie
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'categorie'),
  ));



}
?>
