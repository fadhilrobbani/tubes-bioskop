<?php $this->load->view('templates/header');?>
<div class	= "row">
	<div class = "col-md-1 text-right">
 		
	</div>
</div>
<div class	= "row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			
			<th>Username</th>
			<th>Nama Pemesan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($daftarpemesan as $key => $value) {?>
	
		<tr>
			<td><?php echo $value->username; ?></td>
			<td><?php echo $value->nama_pemesan; ?></td>
			
			<td>
				<a href="<?php 
				echo site_url('daftarpemesan/delete/'.$value ->username);?>" class="btn btn-danger">
					<i class = "fa fa-trash"></i>
				</a>
				
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>
 </div>

<?php $this->load->view('templates/footer');?>
<script type="text/javascript">
	$(document).ready(function(){
	$('#example').DataTable();
	});
	</script>
