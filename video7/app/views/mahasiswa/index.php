
<div >
	<h3>Daftar Mahasiswa</h3>
	<br>
	<table border="1px">
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>NIM</th>
			<th>Jurusan</th>
		</tr>
	<?php 
	foreach ($data['mhs'] as $mhs) {
	?>
		<tr>
			<th><?= $mhs['nama'];?></th>
			<th><?= $mhs['email'];?></th>
			<th><?= $mhs['nim'];?></th>
			<th><?= $mhs['jurusan'];?></th>
		</tr>
	<?php
	}

	?>
	</table>

</div>