<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data['mhs']['nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=  $data['mhs']['nim'];?></h6>
    <p class="card-text">
    	<?=  $data['mhs']['email'];?><br>
    	<?=  $data['mhs']['jurusan'];?>
    </p>
    <a href="<?= BASEURL;?>/Mahasiswa" class="card-link">Kembali</a>
  </div>
</div>