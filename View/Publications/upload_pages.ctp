<?php
?>
<?= $this->Javascript->link(array('http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js','https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js',
    'http://bp.yahooapis.com/2.4.21/browserplus-min.js','plupload/js/plupload','plupload/js/plupload.gears','plupload/js/plupload.silverlight','plupload/js/plupload.flash','plupload/js/plupload.html4',
    'plupload/js/plupload.html5','plupload/js/jquery.ui.plupload/jquery.ui.plupload')); ?>


<div id="form-wrap">
		<label>Upload Publication pages</label>
<form method ="post" action="publications/dump">
	<div id="uploader">
		<p>You browser doesn't have HTML5 support. Change Browser to continue</p>
	</div>
<form>
    </div>

<script type="text/javascript">
// Convert divs to queue widgets when the DOM is ready
$(function() {
	$("#uploader").plupload({
		// General settings
		runtimes : 'html5,html4',
		url : 'pages_uploader',
		max_file_size : '2000mb',
		max_file_count: 200, // user can add no more then 20 files at a time
		chunk_size : '100mb',
		unique_names : false,
		multiple_queues : true,
                
                // adding this for redirecting to page once upload complete
                    //    preinit: attachCallbacks,
                        
		// Resize images on clientside if we can
		//resize : {width : 320, height : 240, quality : 90},
		
		// Rename files by clicking on their titles
		rename: true,
		
		// Sort files
		sortable: true,

		// Specify what files to browse for
		filters : [
			{title : "Image files", extensions : "jpg,gif,png"},
			{title : "Swf files", extensions : "swf"}
		]
	});

	// Client side form validation
	$('form').submit(function(e) {
		var uploader = $('#uploader').plupload('getUploader');

		// Validate number of uploaded files
		if (uploader.total.uploaded == 0) {
			// Files in queue upload them first
			if (uploader.files.length > 0) {
				// When all files are uploaded submit form
				uploader.bind('UploadProgress', function() {
					if (uploader.total.uploaded == uploader.files.length)
						$('form').submit();
				});

				uploader.start();
			} else
				alert('You must upload one file at least.');

			e.preventDefault();
		}
	});

});
/* added below to redirect after uploaded

    function attachCallbacks(Uploader) {

    Uploader.bind('FileUploaded', function(Up, File, Response) {

      if( (Uploader.total.uploaded + 1) == Uploader.files.length)
      {
        window.location = 'dump';
      }
})};
// added above to redirect after uploaded*/
</script>