<?php $this->load->view('templates/mheader') ?>

<div class="container">
   <div class="bg-faded p-4 my-4">
      <hr class="divider">
      <h2 class="text-center text-lg text-uppercase my-0">Jadwal Film</h2>
      <hr class="divider">
      <div class  = "row">
         <table id="example" class="table table-striped table-bordered text-center">
            <thead>
               <tr>
                  <th>ID Tayang</th>
                  <th>Judul Film</th>
                  <th>Nama Studio</th>
                  <th>Tanggal Tayang</th>
                  <th>Jam Tayang</th>
                  <th>Hari Tayang</th>
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
               </tr>
               <?php }?>
            </tbody>
         </table>
      </div>
   </div>
</div>
 <div class="bg-faded p-4 my-4">
  <?php $this->load->view('templates/mfooter') ?>
