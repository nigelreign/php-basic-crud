<?php
/**
 * Created by PhpStorm.
 * User: Nigel Reign
 * Date: 21/10/2020
 * Time: 08:38
 */

//Code to update record
if (isset($_POST['update'])) {

    $field1 = $_POST['field1'];
    $field2 = $_POST['field2'];
    $field3 = $_POST['field3'];
    $update_id = $_POST['update_id'];


    $query = DB::update('table_name', array(

        'field1' => $field1,
        'field2' => $field2,
        'field3' => $field3
    ), 'id=%i', $update_id);

    if ($query) {

        header("Location: index.php");
    }
}

// code to insert data to the database

if (isset($_POST['insert'])) {

    $field1 = $_POST['field1'];
    $field2 = $_POST['field2'];
    $field3 = $_POST['field3'];
    $update_id = $_POST['update_id'];


    $query = DB::insert('table_name', array(

        'field1' => $field1,
        'field2' => $field2,
        'field3' => $field3
    ));

    if ($query) {

        header("Location: index.php");
    }
}