<!DOCTYPE html>
<html lang="en">

<head>
	<!--projecttitle-->
	<title>CANDIKIDAL</title><!--projecttitle-end-->
	<!--projectdescription-->
	<meta name="description" content="Baruuuuurururuurru"><!--projectdescription-end-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="{{ asset('CANDIKIDAL/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('CANDIKIDAL/style.css') }}">

	<!-- Insert this line above script imports  -->
	<script>
		if (typeof module === 'object') {
			window.module = module;
			module = undefined;
		}
	</script>

	<script src="{{ asset('CANDIKIDAL/imagedata.js') }}"></script>
	<script src="{{ asset('CANDIKIDAL/jquery.js') }}"></script>
	<script src="{{ asset('CANDIKIDAL/three.min.js') }}"></script>
	<script src="{{ asset('CANDIKIDAL/panolens.min.js') }}"></script>

	<!-- Insert this line after script imports -->
	<script>
		if (window.module) module = window.module;
	</script>

	<style>
		/* SCROLLBAR STYLING */
		/* width */
		::-webkit-scrollbar {
			width: 0.25em;
			height: 0.25em;
		}

		/* Track */
		::-webkit-scrollbar-track {
			background: #2c3643;
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
			background: #0d9e59;
			transition: background .5s;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: #00e075;
		}


		html,
		body {
			margin: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
			background-color: #000;
			color: black;
		}

		a:link,
		a:visited {
			color: #bdc3c7;
		}

		.fullwrapper {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: black;
		}

		#container {
			width: 100%;
			height: 100%;
		}

		#tmp {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			padding: 3em;
			background-color: rgba(0, 0, 0, .5);
			backdrop-filter: blur(5px);
			display: none;
		}
	</style>
</head>

<body id="body">
	<div id="container" style="color: black;"></div>



	<!--customhtml-->
	<div class='customhotspot' id='CK1copy'>
		<div onclick='chclickinfospotCK1copy3();' id='infospotCK1copy3' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKIDAL/customhotspots/Lokasi.png') }}" style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotCK1copy4();' id='infospotCK1copy4' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKIDAL/customhotspots/Introduction.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='CK2copy'>
		<div onclick='chclickinfospotCK2copy2();' id='infospotCK2copy2' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKIDAL/customhotspots/Video.png') }}" style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotCK2copy3();' id='infospotCK2copy3' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKIDAL/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='CK3'>
		<div onclick='chclickinfospotCK32();' id='infospotCK32' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKIDAL/customhotspots/Image.png') }}" style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotCK33();' id='infospotCK33' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKIDAL/customhotspots/Image.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='CK4copy'>
		<div onclick='chclickinfospotCK4copy2();' id='infospotCK4copy2' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKIDAL/customhotspots/Image.png') }}" style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotCK4copy3();' id='infospotCK4copy3' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKIDAL/customhotspots/Image.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='CK5'>
		<div onclick='chclickinfospotCK52();' id='infospotCK52' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKIDAL/customhotspots/Image.png') }}" style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotCK53();' id='infospotCK53' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKIDAL/customhotspots/Image.png') }}" style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotCK54();' id='infospotCK54' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKIDAL/customhotspots/Putarsuara.png') }}" style='width: 64px; height: 64px;'></div>
	</div><!--customhtml-end-->

	<div id="tmp">
		<div style="width: 100%; height: 100%; overflow: hidden; overflow-y: auto; box-sizing: border-box; position: relative;" id="tmpcontent"></div>
		<div class="mediaclosebutton" onclick="hideTemp()"><i class="fa fa-times-circle"></i></div>
	</div>


	<div id="loading" class="fullwrapper" style="display: table; width: 100%; height: 100%;">
		<div style="display: table-cell; vertical-align: middle; text-align: center; color: white; font-size: 30px; padding: 50px;">
			<!--loadingtext-->Loading...<!--loadingtext-end-->
		</div>
	</div>

	<script>
		var container = document.querySelector('#container');
		/*panolens*/

		var viewer = new PANOLENS.Viewer({
			container: container,
			controlBar: false,
			output: 'console',
			autoHideInfospot: false,
		});

		/*panolens-end*/

		viewer.addUpdateCallback(function() {});

		/*panoramas*/

		var CK1copy = new PANOLENS.ImagePanorama("{{ asset('CANDIKIDAL/panoramas/CK1copy.jpg') }}");
		CK1copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CK1copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CK1copy.addEventListener('click', function(e) {});


		var infospotCK1copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCK1copy0.position.set(4929.49, -818.94, 31.23);
		CK1copy.add(infospotCK1copy0);

		infospotCK1copy0.addEventListener('click', function() {

			ChangePanorama('CK2copy');

		});

		var infospotCK1copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCK1copy1.position.set(4556.24, -215.81, -2037.58);
		CK1copy.add(infospotCK1copy1);

		infospotCK1copy1.addEventListener('click', function() {

			ChangePanorama('CK5');

		});

		var infospotCK1copy2 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCK1copy2.position.set(4429.42, -218.09, 2286.28);
		CK1copy.add(infospotCK1copy2);

		infospotCK1copy2.addEventListener('click', function() {

			ChangePanorama('CK3');

		});

		var infospotCK1copy3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCK1copy3.position.set(4729.49, -767.66, 1410.45);
		infospotCK1copy3.visible = false;
		CK1copy.add(infospotCK1copy3);

		infospotCK1copy3.addEventListener('click', function() {

			window.open('https://goo.gl/maps/NZyC8xqbzDCMKzZp7', '_blank');

		});

		var infospotCK1copy4 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCK1copy4.position.set(4877.08, -808.22, 699.76);
		infospotCK1copy4.visible = false;
		CK1copy.add(infospotCK1copy4);

		infospotCK1copy4.addEventListener('click', function() {

			window.open('https://id.padlet.com/miaandrianingsih1234/8bd8ts48e3pmb60w', '_blank');

		});

		viewer.add(CK1copy);

		var CK2copy = new PANOLENS.ImagePanorama("{{ asset('CANDIKIDAL/panoramas/CK2copy.jpg') }}");
		CK2copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CK2copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CK2copy.addEventListener('click', function(e) {});


		var infospotCK2copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCK2copy0.position.set(3393.91, -107.60, 3661.50);
		CK2copy.add(infospotCK2copy0);

		infospotCK2copy0.addEventListener('click', function() {

			ChangePanorama('CK3');

		});

		var infospotCK2copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCK2copy1.position.set(-4926.18, -701.27, 416.63);
		CK2copy.add(infospotCK2copy1);

		infospotCK2copy1.addEventListener('click', function() {

			ChangePanorama('CK1copy');

		});

		var infospotCK2copy2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCK2copy2.position.set(4951.51, 663.25, 19.31);
		infospotCK2copy2.visible = false;
		CK2copy.add(infospotCK2copy2);

		infospotCK2copy2.addEventListener('click', function() {

			window.open('https://youtu.be/4EE9bZUUFAk', '_blank');

		});

		var infospotCK2copy3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCK2copy3.position.set(4964.75, -502.13, -130.37);
		infospotCK2copy3.visible = false;
		CK2copy.add(infospotCK2copy3);

		infospotCK2copy3.addEventListener('click', function() {

			window.open('https://id.padlet.com/miaandrianingsih1234/53g9t4g4gcd35jdg', '_blank');

		});

		viewer.add(CK2copy);

		var CK3 = new PANOLENS.ImagePanorama("{{ asset('CANDIKIDAL/panoramas/CK3.jpg') }}");
		CK3.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CK3.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CK3.addEventListener('click', function(e) {});


		var infospotCK30 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCK30.position.set(3838.31, 291.27, -3176.11);
		CK3.add(infospotCK30);

		infospotCK30.addEventListener('click', function() {

			ChangePanorama('CK2copy');

		});

		var infospotCK31 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCK31.position.set(3460.51, 229.90, 3588.11);
		CK3.add(infospotCK31);

		infospotCK31.addEventListener('click', function() {

			ChangePanorama('CK4copy');

		});

		var infospotCK32 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCK32.position.set(4831.72, -16.18, -1257.35);
		infospotCK32.visible = false;
		CK3.add(infospotCK32);

		infospotCK32.addEventListener('click', function() {

			window.open('https://drive.google.com/file/d/1lumq9-ZqIJtiaWCwn8W3MfhGzY4goa8l/view?usp=share_link', '_blank');

		});

		var infospotCK33 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCK33.position.set(4827.09, -94.02, 1262.86);
		infospotCK33.visible = false;
		CK3.add(infospotCK33);

		infospotCK33.addEventListener('click', function() {

			window.open('https://drive.google.com/file/d/1E8KF0igCo9jwJywd5gEPFzuifLuyAcBt/view?usp=share_link', '_blank');

		});

		viewer.add(CK3);

		var CK4copy = new PANOLENS.ImagePanorama("{{ asset('CANDIKIDAL/panoramas/CK4copy.jpg') }}");
		CK4copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CK4copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CK4copy.addEventListener('click', function(e) {});


		var infospotCK4copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCK4copy0.position.set(2383.25, -290.98, -4376.80);
		CK4copy.add(infospotCK4copy0);

		infospotCK4copy0.addEventListener('click', function() {

			ChangePanorama('CK3');

		});

		var infospotCK4copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCK4copy1.position.set(4552.28, 400.76, 2027.89);
		CK4copy.add(infospotCK4copy1);

		infospotCK4copy1.addEventListener('click', function() {

			ChangePanorama('CK5');

		});

		var infospotCK4copy2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCK4copy2.position.set(4726.06, -1016.38, -1236.89);
		infospotCK4copy2.visible = false;
		CK4copy.add(infospotCK4copy2);

		infospotCK4copy2.addEventListener('click', function() {

			window.open('https://drive.google.com/file/d/1XrqUJ7L3DNvXgaqtCs-r16XlEbRK3qzP/view?usp=share_link', '_blank');

		});

		var infospotCK4copy3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCK4copy3.position.set(4916.64, -845.55, -175.39);
		infospotCK4copy3.visible = false;
		CK4copy.add(infospotCK4copy3);

		infospotCK4copy3.addEventListener('click', function() {

			window.open('https://drive.google.com/file/d/1JxQAhnnoPbfQv5_QMdcene6H-lZUBDtR/view?usp=share_link', '_blank');

		});

		viewer.add(CK4copy);

		var CK5 = new PANOLENS.ImagePanorama("{{ asset('CANDIKIDAL/panoramas/CK5.jpg') }}");
		CK5.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CK5.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CK5.addEventListener('click', function(e) {});


		var infospotCK50 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCK50.position.set(629.16, 137.47, 4950.28);
		CK5.add(infospotCK50);

		infospotCK50.addEventListener('click', function() {

			ChangePanorama('CK1copy');

		});

		var infospotCK51 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCK51.position.set(4078.10, -335.78, -2863.90);
		CK5.add(infospotCK51);

		infospotCK51.addEventListener('click', function() {

			ChangePanorama('CK4copy');

		});

		var infospotCK52 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCK52.position.set(4849.84, -365.03, 1136.85);
		infospotCK52.visible = false;
		CK5.add(infospotCK52);

		infospotCK52.addEventListener('click', function() {

			window.open('https://drive.google.com/file/d/15fijei0705L3se5ZbyKFa9qDF-j7Z_li/view?usp=share_link', '_blank');

		});

		var infospotCK53 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCK53.position.set(4883.32, 81.49, -1054.89);
		infospotCK53.visible = false;
		CK5.add(infospotCK53);

		infospotCK53.addEventListener('click', function() {

			window.open('https://drive.google.com/file/d/1u5oQD3G5qpUf-oyzMPBg8erIUxuj7Rxi/view?usp=share_link', '_blank');

		});

		var infospotCK54 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCK54.position.set(3852.55, -371.25, 3153.54);
		infospotCK54.visible = false;
		CK5.add(infospotCK54);

		infospotCK54.addEventListener('click', function() {

			showMedia(3, "{{ asset('CANDIKIDAL/audios/PemugaranCandiKidal.mp3') }}");

		});

		viewer.add(CK5);

		$(document).ready(function() {
			ChangePanorama('CK5');
		});


		/*panoramas-end*/


		function hideTemp() {
			$("#tmp").fadeOut();
			setTimeout(function() {
				$("#tmpcontent").html("");
			}, 1000);
		}

		function showMedia(type, content) {
			switch (type) {
				case 1:
					//Image
					$("#tmpcontent").html("<img src='" + content + "' style='width: 100%;'>");
					$("#tmp").fadeIn();
					break;
				case 2:
					//Video
					$("#tmpcontent").html("<video id='webvideo' controls autoplay style='width: 100%; height: 100%;'><source src='" + content + "' type='video/mp4'> Your browser does not support the video tag. </video>");
					$("#tmp").fadeIn();
					break;
				case 3:
					//Audio
					$("#tmpcontent").html("<audio controls style='width: 100%;'><source src='" + content + "' type='audio/ogg'>Your browser does not support the audio tag.</audio>");
					$("#tmp").fadeIn();
					break;
				case 4:
					//PDF
					$("#tmpcontent").html("<iframe src='pdfjs/web/viewer.html?file=../../" + content + "' style='width: 100%; height: 99%;'></iframe>");
					$("#tmp").fadeIn();
					break;
			}
		}



		//Update Callback
		viewer.addUpdateCallback(function() {

			/*viewerupdatecallback*/
			if (viewer.panorama == CK1copy) {
				ShowMyInfospot(infospotCK1copy3, 'infospotCK1copy3');
				ShowMyInfospot(infospotCK1copy4, 'infospotCK1copy4');
			}

			if (viewer.panorama == CK2copy) {
				ShowMyInfospot(infospotCK2copy2, 'infospotCK2copy2');
				ShowMyInfospot(infospotCK2copy3, 'infospotCK2copy3');
			}

			if (viewer.panorama == CK3) {
				ShowMyInfospot(infospotCK32, 'infospotCK32');
				ShowMyInfospot(infospotCK33, 'infospotCK33');
			}

			if (viewer.panorama == CK4copy) {
				ShowMyInfospot(infospotCK4copy2, 'infospotCK4copy2');
				ShowMyInfospot(infospotCK4copy3, 'infospotCK4copy3');
			}

			if (viewer.panorama == CK5) {
				ShowMyInfospot(infospotCK52, 'infospotCK52');
				ShowMyInfospot(infospotCK53, 'infospotCK53');
				ShowMyInfospot(infospotCK54, 'infospotCK54');
			}
			/*viewerupdatecallback-end*/


		});



		var hotspotsvisible = true;

		function ShowMyInfospot(hs, elid) {
			var thehs = toScreenPosition(hs);
			if (thehs.z < 1) {
				$("#" + elid).css({
					"top": (thehs.y - ($("#" + elid).height() / 2)) + "px",
					"left": (thehs.x - ($("#" + elid).width() / 2)) + "px",
				});
				if (hotspotsvisible)
					$("#" + elid).show();
			} else {
				$("#" + elid).hide();
			}

		}

		function toScreenPosition(obj) {
			var vector = new THREE.Vector3();
			var widthHalf = 0.5 * innerWidth;
			var heightHalf = 0.5 * innerHeight;

			//obj.updateMatrixWorld();				
			vector.setFromMatrixPosition(obj.matrixWorld);


			vector.project(viewer.camera);

			vector.x = (vector.x * widthHalf) + widthHalf;
			vector.y = -(vector.y * heightHalf) + heightHalf;


			return {
				x: vector.x,
				y: vector.y,
				z: vector.z,
			};

		};

		var currentPanorama;

		function ChangePanorama(panorama) {
			currentPanorama = panorama;
			HideInfospots();
			$("#loading").fadeIn();
			//$(".customhotspot").fadeOut();
			setTimeout(function() {
				viewer.setPanorama(window[panorama]);
			}, 100);
			setTimeout(function() {
				$("#" + panorama).fadeIn();
				$("#loading").fadeOut();
			}, 1000);

		}



		function HideInfospots() {
			$(".customhotspot").fadeOut();
		}

		/*customjs*/
		function chclickinfospotCK1copy3() {
			window.open('https://goo.gl/maps/NZyC8xqbzDCMKzZp7', '_blank');

		}

		function chclickinfospotCK1copy4() {
			window.open('https://id.padlet.com/miaandrianingsih1234/8bd8ts48e3pmb60w', '_blank');

		}

		function chclickinfospotCK2copy2() {
			window.open('https://youtu.be/4EE9bZUUFAk', '_blank');

		}

		function chclickinfospotCK2copy3() {
			window.open('https://id.padlet.com/miaandrianingsih1234/53g9t4g4gcd35jdg', '_blank');

		}

		function chclickinfospotCK32() {
			window.open('https://drive.google.com/file/d/1lumq9-ZqIJtiaWCwn8W3MfhGzY4goa8l/view?usp=share_link', '_blank');

		}

		function chclickinfospotCK33() {
			window.open('https://drive.google.com/file/d/1E8KF0igCo9jwJywd5gEPFzuifLuyAcBt/view?usp=share_link', '_blank');

		}

		function chclickinfospotCK4copy2() {
			window.open('https://drive.google.com/file/d/1XrqUJ7L3DNvXgaqtCs-r16XlEbRK3qzP/view?usp=share_link', '_blank');

		}

		function chclickinfospotCK4copy3() {
			window.open('https://drive.google.com/file/d/1JxQAhnnoPbfQv5_QMdcene6H-lZUBDtR/view?usp=share_link', '_blank');

		}

		function chclickinfospotCK52() {
			window.open('https://drive.google.com/file/d/15fijei0705L3se5ZbyKFa9qDF-j7Z_li/view?usp=share_link', '_blank');

		}

		function chclickinfospotCK53() {
			window.open('https://drive.google.com/file/d/1u5oQD3G5qpUf-oyzMPBg8erIUxuj7Rxi/view?usp=share_link', '_blank');

		}

		function chclickinfospotCK54() {
			showMedia(3, 'audios/PemugaranCandiKidal.mp3');

		}
		/*customjs-end*/
	</script>
</body>

</html>