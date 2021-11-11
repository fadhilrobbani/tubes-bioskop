<?php $this->load->view('templates/header');?>
<div class	= "row">
	<div class = "col-md-12 text-right">
 		<a href="<?php echo site_url('tayang/tambah'); ?>" 
 		class = "btn btn-primary" style="margin-top:20px;margin-bottom:20px"><i class="fa fa-plus"></i>Tambah</a>
	</div>
</div>
<div class	= "row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID Tayang</th>
			<th>Judul Film</th>
			<th>Nama Studio</th>
			<th>Tanggal Tayang</th>
			<th>Jam Tayang</th>
			<th>Hari Tayang</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($tayang as $key => $value) {?>
	
		<tr>
			<td><?php echo $value->id_tayang; ?></td>
			<td><?php echo $value->judul_film; ?></td>
			<td><?php echo $value->nama_studio; ?></td>
			<td><?php echo $value->tanggal_tayang; ?></td>
			<td><?php echo $value->jam_tayang; ?></td>
			<td><?php echo $value->hari_tayang; ?></td>
			
			<td>
				<a href="<?php 
				echo site_url('tayang/delete/'.$value ->id_tayang);?>" class="btn btn-danger">
					<i class = "fa fa-trash"></i>
				</a>
				<a href="<?php 
				echo site_url('tayang/update/'.$value ->id_tayang);?>" class="btn btn-warning">
					<i class = "fa fa-pencil"></i>
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