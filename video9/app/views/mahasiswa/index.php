
<div >
	<h3>Daftar Mahasiswa</h3>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
  		Tambah 
	</button>

		<!-- Modal -->
	<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="<?= BASEURL;?>/Mahasiswa/tambah" Method="POST">
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Enter name">
				    
				  </div>
				  <div class="form-group">
				    <label for="nim">NIM</label>
				    <input type="number" class="form-control" id="nim" name="nim" aria-describedby="emailHelp" placeholder="Enter NIM">
				    
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email">
				    
				  </div>

				  <div class="form-group">
				    <label for="Jurusan">Jurusan</label>
				    <select class="form-control" id="Jurusan" name="jurusan">
				      <option value="teknik informatika">Teknik Informatika</option>
				      <option value="sistem informasi">Sistem Inforamasi</option>
				      <option value="teknik komputer">Teknik Komputer</option>
				      <option value="komputerisasi akuntansi">Komputerisasi Akuntansi</option>
				      
				    </select>
				  </div>
			

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>


	<br>
	<table border="1px">
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>NIM</th>
			<th>Jurusan</th>
			<th>Aksi</th>
		</tr>
	<?php 
	foreach ($data['mhs'] as $mhs) {
	?>
		<tr>
			<td><?= $mhs['nama'];?></td>
			<td><?= $mhs['email'];?></td>
			<td><?= $mhs['nim'];?></td>
			<td><?= $mhs['jurusan'];?></td>
			<td>
				<a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id'];?>">Detail</a> | 
				<a href="<?= BASEURL; ?>/Mahasiswa/edit/<?= $mhs['id'];?>">Edit</a> |
				<a href="<?= BASEURL; ?>/Mahasiswa/hapus/<?= $mhs['id'];?>">Hapus</a>
			</td>
		</tr>
	<?php
	}

	?>
	</table>

</div>