<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\RestProfilsController' => 
  array (
  ),
),
  'controllers\\RestProfilsController' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "/rest/profils","inherited"=>true,"automated"=>true),
    array('#name' => 'rest', '#type' => 'Ubiquity\\annotations\\rest\\RestAnnotation', "resource"=>"models\Profil")
  ),
);

