<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
  'Profil' => 'models\\Profil',
),
  '#traitMethodOverrides' => array (
  'controllers\\RestProfilesController' => 
  array (
  ),
),
  'controllers\\RestProfilesController' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "/rest/profils","inherited"=>true,"automated"=>true),
    array('#name' => 'rest', '#type' => 'Ubiquity\\annotations\\rest\\RestAnnotation', "resource"=>"models\Profil")
  ),
  'controllers\\RestProfilesController::getAll' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "methods"=>["get"])
  ),
  'controllers\\RestProfilesController::addProfil' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "methods"=>["post"])
  ),
  'controllers\\RestProfilesController::updateProfil' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "methods"=>["put"])
  ),
);

