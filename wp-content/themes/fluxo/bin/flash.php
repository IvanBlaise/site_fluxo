<script src="<?php bloginfo('template_url')?>/bin/js/swfobject.js"></script>
	<script>
		var flashvars = {
		};
		var params = {
			menu: "false",
			scale: "noScale",
			allowFullscreen: "true",
			allowScriptAccess: "always",
			bgcolor: "",
			wmode: "direct" // can cause issues with FP settings & webcam
		};
		var attributes = {
			id:"FLUXO"
		};
		swfobject.embedSWF(
			"<?php bloginfo('template_url')?>/bin/FLUXO.swf", 
			"altContent", "750", "287", "10.0.0", 
			"expressInstall.swf", 
			flashvars, params, attributes);
	</script>