<?php $this->load->view('templates/header');?>
<div class	= "row">
	<div class = "col-md-12 text-right">
 		
	</div>
</div>
<div class	= "row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID Booking</th>
			<th>Nama Studio</th>
			<th>Judul Film</th>
			<th>username</th>
			<th>No Kursi</th>
			<th>Hari Booking</th>
			<th>Tanggal Booking</th>
			<th>Jam </th>
			<th>harga</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($daftarbooking as $key => $value) {?>
	
		<tr>
			<td><?php echo $value->id_booking; ?></td>
			<td><?php echo $value->nama_studio; ?></td>
			<td><?php echo $value->judul_film; ?></td>
			<td><?php echo $value->username; ?></td>
			<td><?php echo $value->no_kursi; ?></td>
			<td><?php echo $value->hari_booking; ?></td>
			<td><?php echo $value->tanggal_booking; ?></td>
			<td><?php echo $value->jam; ?></td>
			<td><?php echo $value->harga; ?></td>
			
			<td>
				<a href="<?php 
				echo site_url('daftarbooking/delete/'.$value ->id_booking);?>" class="btn btn-danger">
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