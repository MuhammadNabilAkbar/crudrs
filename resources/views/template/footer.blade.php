 <!-- All Jquery -->
 <script src="{{ asset('template/js/lib/jquery/jquery.min.js') }}"></script>
 <!-- Bootstrap tether Core JavaScript -->
 <script src="{{ asset('template/js/lib/bootstrap/js/popper.min.js') }}"></script>
 <script src="{{ asset('template/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
 <!-- slimscrollbar scrollbar JavaScript -->
 <script src="{{ asset('template/js/jquery.slimscroll.js') }}"></script>
 <!--Menu sidebar -->
 <script src="{{ asset('template/js/sidebarmenu.js') }}"></script>
 <!--stickey kit -->
 <script src="{{ asset('template/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
 <!--Custom JavaScript -->
 <script src="{{ asset('template/js/custom.min.js') }}"></script>


 <script src="{{ asset('template/js/lib/datatables/datatables.min.js') }}"></script>
 <script src="{{ asset('template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
 <script src="{{ asset('template/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
 <script src="{{ asset('template/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
 <script src="{{ asset('template/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
 <script src="{{ asset('template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('template/js/lib/datatables/datatables-init.js') }}"></script>

 <script type="text/javascript">
 	$(document).ready(function(){
 		$('#example23').dataTable({
 			dom: 'Bfrtip',
 			buttons: [
 			'copy', 'csv', 'excel', 'pdf', 'print'
 			]
 		});
 	});
 </script>