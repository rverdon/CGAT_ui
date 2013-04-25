<?php
   require_once('header.php');
   makeHeader('CGAT', 'Claim A Contig',array('claim.css'), array('claim.js'));
?>

<div id='content' class='top-level-area'>

   <div id='search-options-info' class='second-level-area'>
      <h2 onclick='toggleCollapse("search-options-info-collapse-button", "search-options-info-area");'>
         <div class='collapse-button' id='search-options-info-collapse-button'></div>
         Search Options
      </h2>
      <div id='search-options-info-area' class='collapsing-area'>
         <span>Project group</span>
         <select id ='project-group'>
            <option value ='D. ananassae 3L Control'>D. ananassae 3L Control</option>
            <option value ='D. ananassae Dot'>D. ananassae Dot</option>
            <option value ='D. ananassae Bio 4342'>D. ananassae Bio 4342</option>
            <option value ='D. biarmipes Dot'>D. biarmipes Dot</option>
            <option value ='D. erecta Dot'>D. erecta Dot</option>
            <option value ='D. erecta 3L Control'>D. erecta 3L Control</option>
            <option value ='D. erecta 3L Extended'>D. erecta 3L Extended</option>
            <option value ='D. erecta 2nd 3L Control'>D. erecta 2nd 3L Control</option>
            <option value ='D. mojavensis Dot'>D. mojavensis Dot</option>
            <option value ='D. mojavensis 3L Control'>D. mojavensis 3L Control</option>
            <option value ='D. virilis Dot'>D. virilis Dot</option>
            <option value ='D. virilis Dot Walkthrough'>D. virilis Dot Walkthrough</option>
            <option value ='D. grimshawi Dot'>D. grimshawi Dot</option>
            <option value ='D. grimshawi Dot (Apr.2010)'>D. grimshawi Dot (Apr.2010)</option>
         </select>

         <button onclick='searchContigs();'>Search</button>
      </div>
   </div>

   <div id='results' class='second-level-area'>
       <h2 onclick='toggleCollapse("notifications-collapse-button", "notifications-area");'>
         <div class='collapse-button' id='notifications-collapse-button'></div>
         Results
      </h2>
      <div id='results-area' class='collapsing-area'></div>
   </div>

</div>

<?php
   require('footer.php');
?>
