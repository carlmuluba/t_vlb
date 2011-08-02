<?= $javascript->link(array('http://bp.yahooapis.com/2.4.21/browserplus-min.js','http://www.google.com/jsapi',
        'plupload/js/plupload.full.min','plupload/js/jquery.plupload.queue.min','plupload/js/gears_init')) ?>
	<script type="text/javascript">
	    google.load("jquery", "1.3");
	</script>
   <?php echo $this->Html->scriptBlock(
            'baseUrl = "' .$this->Html->url('/').'";' .
           'uploadUrl = "' . $this->Html->url('/webroot/'.$publisher['Publisher']['publisher_name'].'/pages/') . '";'
           );
    ?>    
		<script type="text/javascript">
          $(function(){

	// Setup html5 version
	$("#html5_uploader").pluploadQueue({
		// General settings
		runtimes : 'html5',
		url : 'publications/pages_uploader',
		max_file_size : '10mb',
		chunk_size : '1mb',
		unique_names : true,

		// Resize images on clientside if we can
		resize : {width : 320, height : 240, quality : 90},

		// Specify what files to browse for
		filters : [
			{title : "Image files", extensions : "jpg,gif,png"},
			{title : "Zip files", extensions : "zip"},
			{title : "Swf files", extensions : "swf"}
		]
	});

	// Client side form validation
	$('form').submit(function(e) {
		var uploader = $('#html5_uploader').pluploadQueue();

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
				alert('You must at least upload one file.');

			e.preventDefault();
		}
	});
       

	});

    </script>
<div id="form-wrap">
<div id="html5_uploader">
        <p>You browser doesn't support native upload. Try Firefox 3.+ or Safari 4.+.</p>
    </div>
</div>
	