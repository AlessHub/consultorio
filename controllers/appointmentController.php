<?php
require_once("./models/appointment.php");
class appointmentController{
    public $model;
    function __construct()
    {
        $this->model= new Appointment();
    }

    // SHOW PLEASE
    static function index(){
        $appointment = new Appointment();
        $data=$appointment->show("appointments", "1");
        require_once("view/index.php");
    }

    // INSERT???
    static function new(){
        $errorMessage = '';
        require_once("view/new.php");
    }
    static function save(){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $reason = $_REQUEST['reason'];
        $data = "'" . $name . "','" . $email . "','" . $reason . "'";
        $appointment = new Appointment();
        $existing_appointment = $appointment->show("appointments", "email='$email'");
        if (!empty($existing_appointment)) {
            // If the email already exists, show a bootstrap alert
            echo '<div class="alert alert-danger" role="alert">This email is already registered. Please use a different email.</div>';
        } else {
            // If the email doesn't exist, insert the new appointment into the database
            $data = "'$name','$email','$reason'";
            $appointment->insert("appointments", $data);
            header("location:".urlsite);
        }
        }

    // UPDATE

    static function edit(){
        $id=$_REQUEST['id'];
        $appointment = new Appointment();
        $data = $appointment->show("appointments", "id=".$id);
        require_once("view/edit.php");
    }

    static function update(){
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $reason = $_REQUEST['reason'];
        $condition = "id=".$id;
        $data = "name='" . $name . "',email='". $email . "',reason='". $reason ."'";
        $appointment = new Appointment();
        $data = $appointment->update("appointments", $data, $condition);
        header("location:".urlsite);
    }

    // DELETE

    static function delete(){
        $id = $_REQUEST['id'];
        $condition = "id=".$id;
        $appointment = new Appointment();
        $data = $appointment->delete("appointments", $condition);
        header("location:".urlsite);
    }
}