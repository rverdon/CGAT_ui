<?php
   session_start();

   require_once '../db.php';

   if (!isset($_POST['name']) || 
       !isset($_POST['difficulty']) || !isset($_POST['project_group']) ||
       !isset($_POST['sequence'])) {
      die('project group, name, and sequence must be present');
      return;
   }

   // Require that someone is logged in first.
   if (!isset($_SESSION['userId'])) {
      die('Not logged in');
      return;
   }

   insertContig(mongoIdSanitize($_SESSION['userId']),
                mongoUserSanitize($_SESSION['userName']),
                mongoNameSanitize($_POST['name']),
                mongoNameSanitize($_POST['project_group']),
                mongoNumberSanitize($_POST['difficulty']),
                mongoSequenceSanitize($_POST['sequence']));
?>
