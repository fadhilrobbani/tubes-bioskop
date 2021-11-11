<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $aksi; ?>" method="POST">
	

	<div class = "form-group">
		<label>Nama Studio</label>
		<input type="text" name="nama_studio" class="form-control"
		placeholder="inputan nama " required value="<?php echo $nama_studio;?>">
	</div>

	<div class = "form-group">
		<label>Kapasitas</label>
		<input type="text" name="kapasitas" class="form-control"
		placeholder="inputan kapasitas " required value="<?php echo $kapasitas;?>">
	</div>
	
	<button class= "btn btn-primary" type="submit"><?php echo "$button"; ?></button>
</form>
<?php $this->load->view('templates/footer'); ?>