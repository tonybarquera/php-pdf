<?php

  require_once '../model/actors.php';

  $MODEL = new Model_Actor();
  $query = $MODEL->getActors();
  if($query) {
    echo json_encode($query);
  } else {
    echo 0;
  }