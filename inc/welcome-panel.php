<?php
/*
 * Welcome Panel
*/

function phuadmin_welcome_panel() { ?>

<div class="custom-welcome-panel-content">
	<svg version="1.1" style="float: left;max-width: 100%;height: 45px;width: 60px;" class="phulogo" id="phulogo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="120px" height="120px" viewBox="0 0 120 120" enable-background="new 0 0 120 120" xml:space="preserve">
		<linearGradient id="phugradient" gradientUnits="userSpaceOnUse" x1="63.2178" y1="114.9785" x2="63.2178" y2="84.5615">
			<stop  offset="0" style="stop-color:#9FA1A4"/>
			<stop  offset="0.8845" style="stop-color:#C9CACC"/>
			<stop  offset="1" style="stop-color:#FFFFFF"/>
		</linearGradient>
		<path class="phu__ball" fill="url(#phugradient)" d="M63.215,114.979c-4.203,0-7.786-1.489-10.753-4.456c-2.967-2.965-4.452-6.551-4.452-10.753
		c0-4.199,1.485-7.782,4.452-10.753c2.967-2.971,6.55-4.455,10.753-4.455c4.202,0,7.785,1.484,10.756,4.455
		c2.968,2.971,4.455,6.554,4.455,10.753c0,4.202-1.487,7.788-4.455,10.753C71,113.489,67.417,114.979,63.215,114.979z"/>
		<path class="phu__arc" fill="#F37223" d="M97.48,97.3c0,1.309-0.071,2.6-0.21,3.869c-1.887-17.23-16.231-30.627-33.648-30.627
		c-17.415,0-31.761,13.396-33.647,30.627c-0.14-1.27-0.211-2.561-0.211-3.869c0-19.053,15.159-34.497,33.858-34.497
		C82.322,62.803,97.48,78.247,97.48,97.3z"/>
		<path class="phu__arc" fill="#F37223" d="M109.725,85.978c0,1.791-0.098,3.561-0.289,5.301c-2.588-23.623-22.256-41.99-46.135-41.99
		c-23.878,0-43.546,18.367-46.132,41.992c-0.191-1.741-0.289-3.51-0.289-5.303c0-26.122,20.783-47.298,46.421-47.298
		C88.939,38.68,109.725,59.855,109.725,85.978z"/>
		<path class="phu__arc" fill="#F37223" d="M119.187,70.013c0,2.156-0.118,4.283-0.348,6.377c-3.109-28.4-26.755-50.485-55.463-50.485
		c-28.707,0-52.352,22.085-55.461,50.485c-0.23-2.094-0.348-4.221-0.348-6.377c0-31.404,24.986-56.861,55.809-56.861
		C94.201,13.151,119.187,38.608,119.187,70.013z"/>
	</svg>
	<h3><?php _e( 'Welcome To Your Website!' ); ?></h3>
	<p class="about-description"><?php _e( 'Designed & Developed by Phu Concepts Inc' ); ?></p>
	<div class="welcome-panel-column-container">
		<div class="welcome-panel-column welcome-panel-last">
			<p></p>
		</div>
	</div>
</div>
<?php } ?>