<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $aksi; ?>" method="POST">

	<div class = "form-group">
		<label>Nama Studio</label><br> 
		<select class="form-control" name="nama_studio">
			<?php foreach($nama_studio as $row => $value) { ?>
			<option value="<?php echo $value->nama_studio;?>"><?php echo $value->nama_studio;?></option>
			<?php } ?>
		</select>    
	</div>
	
	<div class = "form-group">
		<label>Judul Film</label>
		<select class="form-control" name="judul_film">
			<?php foreach($judul_film as $row => $value) { ?>
			<option value="<?php echo $value->judul_film;?>"><?php echo $value->judul_film;?></option>
			<?php } ?>
		</select>    
	</div>

	<div class = "form-group">
		<label>Tanggal Tayang</label>
		<input type="date" name="tanggal_tayang" class="form-control"
		placeholder="tanggal " required value="<?php echo $tanggal_tayang;?>">
	</div>

	<div class = "form-group">
		<label>Jam Tayang</label>
		<input type="text" name="jam_tayang" class="form-control"
		placeholder="00:00 " required value="<?php echo $jam_tayang;?>">
	</div>

	<div class = "form-group">
		<label>Hari Tayang</label>
		<input type="text" name="hari_tayang" class="form-control"
		placeholder="hari " required value="<?php echo $hari_tayang;?>">
	</div>
	<input type="hidden" name="id_tayang"  value="<?php echo $id_tayang;?>">
	<button class= "btn btn-primary" type="submit"><?php echo "$button"; ?></button>
</form>
<?php $this->load->view('templates/footer'); ?>