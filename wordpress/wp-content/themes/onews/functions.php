<?php

remove_action('wp_head', 'wp_generator');

function onews_scripts()
{
  // Je déclare à WP l'existance d'une feuille de style
  wp_enqueue_style(
    'style', // Petit nom de la feuille de style (on lui donne le nom qu'on veux)
    get_theme_file_uri('/css/style.css'), // Chemin de la feuille de style
    ['reset'], // Lister les dépendances de la feuille de style
    // ma feuille sera donc automatiquement ajoutée APRES la feuille dont elle dépend
    '1.0.0' // Numéro de version
  );

  wp_enqueue_style(
    'reset', // Petit nom de la feuille de style (on lui donne le nom qu'on veux)
    get_theme_file_uri('/css/reset.css'), // Chemin de la feuille de style
    [], // Lister les dépendances de la feuille de style
    // ma feuille sera donc automatiquement ajoutée APRES la feuille dont elle dépend
    '1.0.0' // Numéro de version
  );
}

// Je vais désormais demander à WordPress d'executer mon code au bon moment...
add_action('wp_enqueue_scripts', 'onews_scripts');

function onews_setup()
{
  // Je demande à WordPress de générer pour moi la balise title
  add_theme_support('title-tag');

  // Je déclare à WordPress que mon thème va supporter la fonctionnalité de "menu"
  // Cela ma permet d'activer l'option dans le back office
  add_theme_support('menus');

  // Je vais déclarer à WordPress les emplacements de mes menus...
  register_nav_menus([
    'main' => 'Menu principal, affiché en bas dans la partie de gauche'
  ]);
}

add_action('after_setup_theme', 'onews_setup');