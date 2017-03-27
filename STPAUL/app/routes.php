<?php
/**
 * Created by PhpStorm.
 * User: 15hellioj
 * Date: 27/03/2017
 * Time: 15:00
 */
//Retourne tous les séjours
$app->get('/', function() {

    require '../src/model.php';
    $sejours = getSejour();

    ob_start();                 // start buffering HTML output
    require '../views/view.php';
    $view = ob_get_clean();      // assign HTML output to $view
    return $view;
});


?>