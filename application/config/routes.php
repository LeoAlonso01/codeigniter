<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'producto'; // Controlador por defecto
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



// Tus rutas personalizadas
$route['producto'] = 'producto/index'; // Lista de productos
$route['producto/create'] = 'producto/create'; // Formulario para agregar
$route['producto/store'] = 'producto/store'; // Guardar producto
$route['producto/edit/(:num)'] = 'producto/edit/$1'; // Editar producto
$route['producto/update/(:num)'] = 'producto/update/$1'; // Actualizar producto
$route['producto/delete/(:num)'] = 'producto/delete/$1'; // Eliminar producto



