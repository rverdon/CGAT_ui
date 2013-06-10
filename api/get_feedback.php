<?php
   header('Content-type: application/json');

   require_once '../db.php';

   $feedback = array();
   $feedback['valid'] = false;
   if (isset($_GET['id'])) {
      $feedback = getFeedback($_GET['id']);

      if ($feedback) {
         $feedback['valid'] = true;
      }
   }

   echo json_encode($feedback);
?>
