<?php $this->load->view('templates/mheader2') ?>

	<div class="card">
	<h2>Register</h2>
	<form action="<?php echo $aksi; ?>" method="POST">

				<div class = "form-group">
					<!-- <label>Username</label> -->
					<input type="text" name="username" class="form-control"
					placeholder="Masukkan Username" required value="<?php echo $username;?>">
				</div>
				<div class = "form-group">
					<!-- <label>Nama Pemesan</label> -->
					<input type="text" name="nama_pemesan" class="form-control"
					placeholder="Masukkan Nama" required value="<?php echo $nama_pemesan;?>">
				</div>
				<div class = "form-group">
					<!-- <label>Password</label> -->
					<input type="password" name="password" class="form-control"
					placeholder="Masukkan Password " required value="<?php echo $password;?>">
				</div>
		
				<button class="btn btn-lg btn-success btn-block" type="submit"><?php echo "$button"; ?></button>
				
			</form>
</div>

