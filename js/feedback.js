"use strict";

document.addEventListener('DOMContentLoaded', function() {
   window.cgat = {};
   $.ajax({
      url: 'api/get_feedback',
      type: 'GET',
      data: {'id': window.params.id},
      error: function(jqXHR, textStatus, errorThrown) {
         enableErrorConfirmModal('Getting feedback', 'feedback');
      },
      success: function(data, textStatus, jqXHR) {
         var expertOutput = "No reference annotation to compare to!";
         var communityOutput = "No community annotations to compare to!";
         if(data.expert_total != 0) {
            expertOutput = "Matches " + parseFloat(data.expert_feedback).toFixed(1) + "% of the " + data.expert_total + " reference annotations.";
         }
         if(data.community_total != 0) {
            communityOutput = "Matches " + parseFloat(data.community_feedback).toFixed(1) + "% of the " +data.community_total + " community annotations.";
         }
         document.getElementById('expert-results').innerHTML = expertOutput;
         document.getElementById('community-results').innerHTML = communityOutput;
      }
   });
});
