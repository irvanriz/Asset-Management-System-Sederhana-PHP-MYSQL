		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. IT Operation</p>
		</footer>
	</div>
	<!--end wrapper-->
	
	<!-- Bootstrap JS -->
	<script src="tema/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="tema/assets/js/jquery.min.js"></script>
	<script src="tema/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="tema/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="tema/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="tema/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="tema/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="tema/assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="tema/assets/plugins/chartjs/js/Chart.extension.js"></script>
	<script src="tema/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<!--notification js -->
	<script src="tema/assets/plugins/notifications/js/notifications.min.js"></script>
	<script src="tema/assets/js/index.js"></script>
	<!--app JS-->
	<script src="tema/assets/js/app.js"></script>
	<script src="tema/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="tema/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<script src="tema/assets/plugins/select2/js/select2.min.js"></script>
	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>
</body>

</html>