<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $aksi; ?>" method="POST">
	
	<div class = "form-group">
		<label>Judul Film</label>
		<input type="text" name="judul_film" class="form-control"
		placeholder="inputan judul" required value="<?php echo $judul_film;?>">
	</div>
	<div class = "form-group">
		<label>Kategori Film</label>
		<input type="text" name="kategori_film" class="form-control"
		placeholder="inputan kategori " required value="<?php echo $kategori_film;?>">
	</div>
	<div class = "form-group">
		<label>Genre Film</label>
		<input type="text" name="genre_film" class="form-control"
		placeholder="inputan genre " required value="<?php echo $genre_film;?>">
	</div>
	
	
	<button class= "btn btn-primary" type="submit"><?php echo "$button"; ?></button>
</form>
<?php $this->load->view('templates/footer'); ?>