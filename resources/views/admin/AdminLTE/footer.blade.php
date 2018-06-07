<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; <a href="#"></a>.</strong> All rights reserved.
</footer><!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div></div><!-- ./wrapper --><!-- jQuery 3.1.1 -->
<script src={{ asset("AdminLTE/plugins/jQuery/jquery-3.1.1.min.js") }}></script><!-- Bootstrap 3.3.7 -->
<script src={{ asset("AdminLTE/bootstrap/js/bootstrap.min.js") }}></script><!-- SlimScroll --><!-- AdminLTE App -->
<script src={{ asset("AdminLTE/dist/js/adminlte.min.js") }}></script><!-- AdminLTE for demo purposes -->
<script src={{ asset("AdminLTE/dist/js/demo.js") }}></script>
<script src={{ asset("AdminLTE/plugins/datatables/jquery.dataTables.min.js") }}></script>
<script>
	$(document).ready(function () {
		$('.sidebar-menu').tree()
	});
	$(document).ready(function () {
		$('#list').DataTable(
            {
				"pagingType": "full_numbers",
                "iDisplayLength": 4,

            }
        );
	});
</script>
</body></html>