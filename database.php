<?php
    function makeconnection(){
        $host = "localhost";
        $username ="root";
        $password = "";
        $dbname ="todolist";

        $connect = new mysqli($host,$username,$password, $dbname);
        if ($connect->connect_error) {  
            echo "error in db connection";
        }
        return $connect;
    }

    function add_items($value){
        $con = makeconnection();
        $query = "INSERT INTO todolist (id,item,status) VALUES (NULL,'$value','0')";
        $con->query($query);
    }

    function get_items(){
        $con = makeconnection();
        $query = "SELECT id,item FROM todolist WHERE status = 0 ";
        $result = $con->query($query);
        return $result;
    }

    function get_itemss(){
        $con = makeconnection();
        $query = "SELECT id,item FROM todolist WHERE status = 1 ";
        $result = $con->query($query);
        return $result;
    }

    function update_items($value){
        $con = makeconnection();
        $query = "UPDATE todolist SET status = 1 WHERE id = ".$value." ";
        $con->query($query);
    }

    function unchecked_items($value){
        $con = makeconnection();
        $query = "UPDATE todolist SET status = 0 WHERE id = ".$value." ";
        $con->query($query);
    }

    function delete_items($value){
        $con = makeconnection();
        $query = "DELETE FROM todolist WHERE id = ".$value." ";
        $con->query($query);
    }
?>