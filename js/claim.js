"use strict";

document.addEventListener('DOMContentLoaded', function() {

   window.cgat = {};
   window.cgat.disableSearchButton = false;

});

function searchContigs() {
   if (window.cgat.disableSearchButton) {
      return;
   }

   // Don't let people spam the button.
   window.cgat.disableSearchButton = true;

   $.ajax({
      url: 'api/claim',
      type: 'GET',
      data: {'project_group': document.getElementById('project-group').value},
      error: function(jqXHR, textStatus, errorThrown) {
         enableErrorConfirmModal('Searching Contigs', 'claim');
         window.cgat.disableSearchButton = false;
      },
      success: function(data, textStatus, jqXHR) {
         window.cgat.disableSearchButton = false;
  	 if (data.contigs) {
            var contigsHtml = '';
            data.contigs.forEach(function(contig) {
               contigsHtml += makeContig(contig);
            });
            $('#results-area').html(contigsHtml);
         } else {
            $('#results-area').remove();
         }
      }  
   });
}


function makeContig(contig) {
   var contigId = contig['_id']['$id'];
   return "<div class='notification profile-entry' id='contig-" + contigId + "'>" +
          "<span>Contig: <a href='contig?id=" + contigId + "'>" +
                contig.meta.name + "</a></span>" +
          "<span>Project Group: <a href='search?project+group=" + contig.meta.project_group + "'>" +
                contig.meta.project_group + "</a></span>" +
          "<span>Difficulty: " + contig.meta.difficulty + "</span>" +
          "<div class='annotate-button' onclick='createAnnotation(\"" +
                contigId + "\");'></div>" +
          "</div>";
}


function createAnnotation(contigId) {
   enableLoadingModal('claim');
   $.ajax({
      url: 'api/create_annotation',
      type: 'POST',
      dataType: 'json',
      data: {contig: contigId},
      error: function(jqXHR, textStatus, errorThrown) {
         enableErrorConfirmModal('Creating Annotation', 'claim');
         return;
      },
      success: function(data, textStatus, jqXHR) {
         if (!data.valid) {
            enableErrorConfirmModal('Creating Annotation', 'claim');
            return;
         }

         beginAnnotation(data.annotationId['$id']);
      }
   });
}

// Work on an annotation.
function beginAnnotation(annotationId) {
   window.location.href = 'annotation?id=' + annotationId;
}
