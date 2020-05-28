
<div >
	<h3>Daftar Mahasiswa</h3>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  		Tambah 
	</button>

		<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        ...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
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