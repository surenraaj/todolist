<?php
include("database.php");
    if ($_SERVER['REQUEST_METHOD']=="POST") {

        if (isset($_POST['add'])) {

            if(($_POST['inputbox'])){

                add_items($_POST['inputbox']);

            }
        }elseif (isset($_POST['checked'])) {

            update_items($_POST['checked']);

        }elseif (isset( $_POST['deleted'])) {

            delete_items($_POST['deleted']);

        }elseif (isset( $_POST['unchecked'])) {

            unchecked_items($_POST['unchecked']);
        }

        header("Location:index.php");
    }
?>