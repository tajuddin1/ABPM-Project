<?php
$dirArr = explode("/", $_SERVER['SCRIPT_NAME']);

$path = '';
if (in_array('pages', $dirArr)) {
	$path = '../';
}
?>
<!-- footer  -->
<script src="<?= $path ?>js/jquery-3.4.1.min.js?v=<?= time(); ?>"></script>
<!-- popper js -->
<script src="<?= $path ?>js/popper.min.js?v=<?= time(); ?>"></script>
<!-- bootstarp js -->
<script src="<?= $path ?>js/bootstrap.min.js?v=<?= time(); ?>"></script>
<!-- sidebar menu  -->
<script src="<?= $path ?>js/metisMenu.js?v=<?= time(); ?>"></script>
<!-- waypoints js -->
<script src="<?= $path ?>vendors/count_up/jquery.waypoints.min.js?v=<?= time(); ?>"></script>
<!-- waypoints js -->
<script src="<?= $path ?>vendors/chartlist/Chart.min.js?v=<?= time(); ?>"></script>
<!-- counterup js -->
<script src="<?= $path ?>vendors/count_up/jquery.counterup.min.js?v=<?= time(); ?>"></script>

<!-- nice select -->
<script src="<?= $path ?>vendors/niceselect/js/jquery.nice-select.min.js?v=<?= time(); ?>"></script>
<!-- owl carousel -->
<script src="<?= $path ?>vendors/owl_carousel/js/owl.carousel.min.js?v=<?= time(); ?>"></script>

<!-- responsive table -->
<script src="<?= $path ?>vendors/datatable/js/jquery.dataTables.min.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/datatable/js/dataTables.responsive.min.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/datatable/js/dataTables.buttons.min.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/datatable/js/buttons.flash.min.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/datatable/js/jszip.min.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/datatable/js/pdfmake.min.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/datatable/js/vfs_fonts.js"></script>
<script src="<?= $path ?>vendors/datatable/js/buttons.html5.min.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/datatable/js/buttons.print.min.js?v=<?= time(); ?>"></script>

<!-- datepicker  -->
<script src="<?= $path ?>vendors/datepicker/datepicker.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/datepicker/datepicker.en.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/datepicker/datepicker.custom.js?v=<?= time(); ?>"></script>

<script src="<?= $path ?>js/chart.min.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/chartjs/roundedBar.min.js?v=<?= time(); ?>"></script>

<!-- progressbar js -->
<script src="<?= $path ?>vendors/progressbar/jquery.barfiller.js?v=<?= time(); ?>"></script>
<!-- tag input -->
<script src="<?= $path ?>vendors/tagsinput/tagsinput.js?v=<?= time(); ?>"></script>
<!-- text editor js -->
<script src="<?= $path ?>vendors/text_editor/summernote-bs4.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/am_chart/amcharts.js?v=<?= time(); ?>"></script>

<!-- scrollabe  -->
<script src="<?= $path ?>vendors/scroll/perfect-scrollbar.min.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/scroll/scrollable-custom.js?v=<?= time(); ?>"></script>

<!-- vector map  -->
<script src="<?= $path ?>vendors/vectormap-home/vectormap-2.0.2.min.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/vectormap-home/vectormap-world-mill-en.js?v=<?= time(); ?>"></script>

<!-- apex chrat  -->
<script src="<?= $path ?>vendors/apex_chart/apex-chart2.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/apex_chart/apex_dashboard.js?v=<?= time(); ?>"></script>

<script src="<?= $path ?>vendors/echart/echarts.min.js?v=<?= time(); ?>"></script>


<script src="<?= $path ?>vendors/chart_am/core.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/chart_am/charts.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/chart_am/animated.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/chart_am/kelly.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>vendors/chart_am/chart-custom.js?v=<?= time(); ?>"></script>
<!-- custom js -->
<script src="<?= $path ?>js/dashboard_init.js?v=<?= time(); ?>"></script>
<script src="<?= $path ?>js/custom.js?v=<?= time(); ?>"></script>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function() {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function(msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	} else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>