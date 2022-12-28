<?php 
require_once("config.php");
require_once("./controllers/appointmentController.php");

if(isset($_GET['m'])) {
    $method = $_GET["m"];
    if(method_exists('appointmentController', $method)) {
        appointmentController::$method();
    }
} else {
    appointmentController::index();
}