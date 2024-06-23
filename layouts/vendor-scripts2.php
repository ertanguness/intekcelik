<?php

echo "sayfa adı : " . $page;
?>
<!-- <script src="/assets/js/jquery-3.7.1.min.js"></script> -->
<?php if ($page == 'admin-dashboard') {   ?>
	<!-- Chart JS -->
	<script src="/assets/plugins/morris/morris.min.js"></script>
	<script src="/assets/plugins/raphael/raphael.min.js"></script>
	<script src="/assets/js/chart.js"></script>
	<script src="/assets/js/greedynav.js"></script>

<?php }


if ($page == 'projects/add') { ?>
	<!-- Select2 -->
	<script src="/assets/plugins/select2/js/select2.min.js"></script>



<?php } 