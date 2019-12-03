<html>
	<head>
		<title>CRUD Codeigniter</title>
	</head>
	<body>
		<h1>Data siswa UMBandung</h1>
		<hr>

		<a href='<?php echo base_url("siswa/tambah"); ?>'>Tambah Data</a><br><br>

		<table border="1" cellpadding="7">
			<tr>
				<th>NPM</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Telepon</th>
				<th>Alamat</th>
				<th colspan="2">Aksi</th>
			</tr>

			<?php
			if( ! empty($siswa)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
				foreach($siswa as $data){
					echo "<tr>
					<td>".$data->nis."</td>
					<td>".$data->nama."</td>
					<td>".$data->jenis_kelamin."</td>
					<td>".$data->telp."</td>
					<td>".$data->alamat."</td>
					<td><a href='".base_url("siswa/detail/".$data->nis)."'>Detail</a></td>
					<td><a href='".base_url("siswa/ubah/".$data->nis)."'>Ubah</a></td>
					<td><a href='".base_url("siswa/hapus/".$data->nis)."'>Hapus</a></td>
					</tr>";
				}
			}else{ // Jika data siswa kosong
				echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
			}
			?>
		</table>
	</body>
</html>
