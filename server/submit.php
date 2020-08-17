<?php
require 'rb.php';
include_once('conf.php');
R::setup( "mysql:host=localhost;"."dbname=".$dbName, $username, $password ); 
  if( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $formfields = R::dispense('formfields');
          $formsubmit = R::dispense('formsubmit');
          $formsubmitdata = R::dispense('formsubmitdata');
          $name =  $_POST['name'];
          $surname = $_POST['surname'];
          $country = $_POST['country'];
          $telephone = $_POST['telephone'];
          $email = $_POST['email'];
          $formsubmit->date = R::isoDateTime();
          $formsubmitdata->name = $name ;
          $formsubmitdata->value = "surname: ".$surname.", Country: ".$country. ", Telephone: ". $telephone. ", emal: ". $email ;
          $formsubmitdata->form_submit = $formsubmit;
          $id = R::store( $formsubmit );
          $id = R::store( $formsubmitdata );
  }
R::close();