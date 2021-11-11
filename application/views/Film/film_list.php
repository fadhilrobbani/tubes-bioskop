<?php $this->load->view('templates/header');?>
<div class	= "row">
	<div class = "col-md-12 text-right">
 		<a href="<?php echo site_url('film/tambah'); ?>" 
 		class = "btn btn-primary" style="margin-top:20px;margin-bottom:20px"><i class="fa fa-plus"></i>Tambah</a>
	</div>
</div>
<div class	= "row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			
			<th>Judul Film</th>
			<th>Kategori Film</th>
			<th>Genre Film</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($film as $key => $value) {?>
	
		<tr>
			<td><?php echo $value->judul_film; ?></td>
			<td><?php echo $value->kategori_film; ?></td>
			<td><?php echo $value->genre_film; ?></td>
			
			
			<td>
				<a href="<?php 
				echo site_url('film/delete/'.$value ->judul_film);?>" class="btn btn-danger">
					<i class = "fa fa-trash"></i>
				</a>
				<a href="<?php 
				echo site_url('film/update/'.$value ->judul_film);?>" class="btn btn-warning">
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