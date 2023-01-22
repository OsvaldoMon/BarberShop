<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\CitaController;
use Controllers\LoginController;
use Controllers\APIController;
use Controllers\ServicioController;
use MVC\Router;

$router = new Router();

// Iicio de sesión 
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

//Recuperar password
$router->get('/olvide-password', [LoginController::class, 'olvide']);
$router->post('/olvide-password', [LoginController::class, 'olvide']);
$router->get('/recuperar-password', [LoginController::class, 'recuperar']);
$router->post('/recuperar-password', [LoginController::class, 'recuperar']);

//Crear cuenta
$router->get('/crearCuenta', [LoginController::class, 'crear']);
$router->post('/crearCuenta', [LoginController::class, 'crear']);

//confirmar Cuenta
$router->get('/confirmar-cuenta', [LoginController::class, 'confirmar']);
$router->get('/mensaje', [LoginController::class, 'mensaje']);

//Area de Citas
$router->get('/cita', [CitaController::class, 'index']);
$router->get('/admin', [AdminController::class, 'index']);

//API
$router->get('/api/servicios', [APIController::class, 'index']);
$router->post('/api/citas', [APIController::class, 'guardar']);
$router->post('/api/eliminar', [APIController::class, 'eliminar']);


//CRUD
$router ->get('/servicios', [ServicioController::class, 'index']);
$router ->get('/servicios/crear', [ServicioController::class, 'crear']);
$router ->post('/servicios/crear', [ServicioController::class, 'crear']);
$router ->get('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router ->post('/servicios/actualizar', [ServicioController::class, 'acualizar']);
$router ->get('/servicios/eliminar', [ServicioController::class, 'eliminar']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
