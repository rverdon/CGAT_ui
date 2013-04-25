<?php
   header('Content-type: application/json');

   require_once '../db.php';

   $contigsArr = array();
   $contigsArr['valid'] = false;

   if (isset($_GET['project_group'])) {
      $contigsArr = getContigsInProjectGroup($_GET['project_group']);

      if ($contigsArr) {
         $contigsArr['valid'] = true;
      }
   }

   echo json_encode($contigsArr);
?>
