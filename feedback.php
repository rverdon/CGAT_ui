<?php
   require_once('header.php');
   makeHeader('Feedback', '',
              array(),
              array('feedback.js'));
?>

<div id='content' class='top-level-area'>
   <div id='expert-feedback' class='second-level-area'>
      <h2 onclick='toggleCollapse("expert-feedback-collapse-button", "expert-feedback-area");'>
         <div class='collapse-button' id='expert-feedback-collapse-button'></div>
         Reference Annotation Feedback         
      </h2>
      <div id='expert-feedback-area' class='collapsing-area'>
         <span id='expert-results'> text </span>
      </div>
   </div>

   <div id='feedback' class='second-level-area'>
      <h2 onclick='toggleCollapse("feedback-collapse-button", "feedback-area");'>
         <div class='collapse-button' id='feedback-collapse-button'></div>
         Community Annotation Feedback 
      </h2>
      <div id='feedback-area' class='collapsing-area'>
         <span id='community-results'> text </span>
      </div>
   </div>

</div>

<?php
   require('footer.php');
?>
