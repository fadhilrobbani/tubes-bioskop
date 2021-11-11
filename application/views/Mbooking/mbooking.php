<?php $this->load->view('templates/mheader') ?>

<div class="container">
  <div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">FORM PEMESANAN TIKET</h2>

        <hr class="divider"> 

        <?= $this->session->flashdata('message') ?> 
        <script>
          function tampilkan(){
            var hari=document.getElementById("form1").hari.value;
            if (hari=="senin")
            {
              document.getElementById("harga").value = '25.000';

            }
            else if (hari=="selasa")
            {
             document.getElementById("harga").value = '25.000';

           }
           else if (hari=="rabu")
           {
             document.getElementById("harga").value = '25.000';

           }
           else if (hari=="kamis")
           {
             document.getElementById("harga").value = '25.000';

           }
           else if (hari=="jumat")
           {
             document.getElementById("harga").value = '30.000';

           }
           else if (hari=="sabtu")
           {
             document.getElementById("harga").value = '50.000';

           }
           else if (hari=="minggu")
           {
             document.getElementById("harga").value = '50.000';

           }
         }
       </script>

       <form action="<?php echo $aksi; ?>" method="POST" name="form1" id="form1">

         <div class = "form-group">
         <label>Hari</label>
         <select class="form-control" id="hari" name="hari_booking" onchange="tampilkan()">
          <option value='0' disabled="disabled" selected/>Pilih</option>
          <option value="senin">Senin</option>
          <option value="selasa">Selasa</option>
          <option value="rabu">Rabu</option>
          <option value="kamis">Kamis</option>
          <option value="jumat">Jumat</option>
          <option value="sabtu">Sabtu</option>
          <option value="minggu">Minggu</option>
        </select>
      </div>

        <div class = "form-group">
        <label>Harga </label>
        <input readonly type="text" id="harga" name="harga" class="form-control"
        placeholder="harga " required value="<?php echo $harga;?>">
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
          <label>Nama Studio</label><br> 
          <select class="form-control" name="nama_studio">
            <?php foreach($nama_studio as $row => $value) { ?>
            <option value="<?php echo $value->nama_studio;?>"><?php echo $value->nama_studio;?></option>
            <?php } ?>
          </select>    
        </div>


        <div class = "form-group">
          <label>username</label>
          <font color="grey"><h5><i>"pilih username yang telah anda inputkan"</i></h5></font>
          <select class="form-control" name="username">
            <?php foreach($username as $row => $value) { ?>
            <option value="<?php echo $value->username;?>"><?php echo $value->username;?></option>
            <?php } ?>
          </select>   
        </div>

        <div class = "form-group">
          <label>No Kursi</label>
          <select class="form-control" name="no_kursi">
            <option>Pilih</option>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
            <option value="A4">A4</option>
            <option value="A5">A5</option>
            <option value="A6">A6</option>
            <option value="A7">A7</option>
            <option value="A8">A8</option>
            <option value="A9">A9</option>
            <option value="A10">A10</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="B3">B3</option>
            <option value="B4">B4</option>
            <option value="B5">B5</option>
            <option value="B6">B6</option>
            <option value="B7">B7</option>
            <option value="B8">B8</option>
            <option value="B9">B9</option>
            <option value="B10">B10</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
            <option value="C3">C3</option>
            <option value="C4">C4</option>
            <option value="C5">C5</option>
            <option value="C6">C6</option>
            <option value="C7">C7</option>
            <option value="C8">C8</option>
            <option value="C9">C9</option>
            <option value="C10">C10</option>
            <option value="D1">D1</option>
            <option value="D2">D2</option>
            <option value="D3">D3</option>
            <option value="D4">D4</option>
            <option value="D5">D5</option>
            <option value="D6">D6</option>
            <option value="D7">D7</option>
            <option value="D8">D8</option>
            <option value="D9">D9</option>
            <option value="D10">D10</option>
            <option value="E1">E1</option>
            <option value="E2">E2</option>
            <option value="E3">E3</option>
            <option value="E4">E4</option>
            <option value="E5">E5</option>
            <option value="E6">E6</option>
            <option value="E7">E7</option>
            <option value="E8">E8</option>
            <option value="E9">E9</option>
            <option value="E10">E10</option>
            <option value="F1">F1</option>
            <option value="F2">F2</option>
            <option value="F3">F3</option>
            <option value="F4">F4</option>
            <option value="F5">F5</option>
            <option value="F6">F6</option>
            <option value="F7">F7</option>
            <option value="F8">F8</option>
            <option value="F9">F9</option>
            <option value="F10">F10</option>
            <option value="G1">G1</option>
            <option value="G2">G2</option>
            <option value="G3">G3</option>
            <option value="G4">G4</option>
            <option value="G5">G5</option>
            <option value="G6">G6</option>
            <option value="G7">G7</option>
            <option value="G8">G8</option>
            <option value="G9">G9</option>
            <option value="G10">G10</option>
            <option value="H1">H1</option>
            <option value="H2">H2</option>
            <option value="H3">H3</option>
            <option value="H4">H4</option>
            <option value="H5">H5</option>
            <option value="H6">H6</option>
            <option value="H7">H7</option>
            <option value="H8">H8</option>
            <option value="H9">H9</option>
            <option value="H10">H10</option>
            <option value="I1">I1</option>
            <option value="I2">I2</option>
            <option value="I3">I3</option>
            <option value="I4">I4</option>
            <option value="I5">I5</option>
            <option value="I6">I6</option>
            <option value="I7">I7</option>
            <option value="I8">I8</option>
            <option value="I9">I9</option>
            <option value="I10">I10</option>
            <option value="J1">J1</option>
            <option value="J2">J2</option>
            <option value="J3">J3</option>
            <option value="J4">J4</option>
            <option value="J5">J5</option>
            <option value="J6">J6</option>
            <option value="J7">J7</option>
            <option value="J8">J8</option>
            <option value="J9">J9</option>
            <option value="J10">J10</option>
          </select>
        </div>

        
        <div class = "form-group">
          <label>Tanggal Booking</label>
          <input type="date" name="tanggal_booking" class="form-control"
          placeholder="tanggal " required value="<?php echo $tanggal_booking;?>">
        </div>

        <div class = "form-group">
          <label>Jam</label>
          <font color="grey"><h5><i>"pilih jam sesuai dengan jadwal tayang"</i></h5></font>
          <input type="text" name="jam" class="form-control"
          placeholder="00:00" required value="<?php echo $jam;?>">
        </div>

        <input type="hidden" name="id_booking"  value="<?php echo $id_booking;?>">
        <button class= "btn btn-primary" type="submit"><?php echo "$button"; ?></button>
      </form>
    </div>
  </div>
</div>
</div>

<div class="bg-faded p-4 my-4">

  <?php $this->load->view('templates/mfooter') ?>
