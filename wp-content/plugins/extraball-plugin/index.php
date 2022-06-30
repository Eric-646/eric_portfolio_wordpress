<?php
/*
Plugin Name: ExtraBall Plugin  
Plugin URI:
Description: Un plugin pour ExtraBall
Version: 1.0
Author: Eric
Author URI: http://www.eric.fr
*/

add_action("admin_menu", "addMenu");
function addMenu() {
    add_menu_page("Options de paramétrage", "Options de paramétrage", 4, "exemple-options", "exempleMenu");
    add_submenu_page("exemple-options", "Option 1", "Config 1", 4, "exemple-option-1", "option1");
    add_submenu_page("exemple-options", "Option 2", "Config 2", 4, "exemple-option-2", "option2");
    add_submenu_page("exemple-options", "Option 3", "Config 3", 4, "exemple-option-3", "option3");
}

function exempleMenu() {
    echo "<h1>Exemple Options</h1>";
    echo "<p>Ceci est un exemple de menu dans l'administration</p>";
}
function option1() {
    echo "<h1>Config 1</h1>";
    echo "<p>Ceci est un exemple de page dans l'administration</p>";
}
function option2() {
    echo "<h1>Config 2</h1>";
    echo "<p>Ceci est un exemple de page dans l'administration</p>";
}
function option3() {
    echo "<h1>Config 3</h1>";
    echo "<p>Ceci est un exemple de page dans l'administration</p>";
}

?>