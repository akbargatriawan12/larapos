<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Rumpun Mahasiswa Akuntansi di Politeknik TEDC Bandung</title>
	</head>
	<body style="background-color: #a6001a;color: black;font-family: sans-serif;">
		<h1>Rumpun Mahasiswa Akuntansi di Politeknik TEDC Bandung</h1>
		<div style="display: flex;flex-direction: row;width: 900px;">
			<div style="background-color: #e06000;flex: 1 200px;">
				<ul style="display: flex;flex-direction: column;justify-content: space-between;list-style-type: none;height: 200px;width: 160px;">
					<li style="flex-basis: 50px;">
						Produk
					</li>
					<li style="flex-basis: 50px;">
						Kategori
					</li>
					<li style="flex-basis: 50px;">
						Merek
					</li>
				</ul>
			</div>
			<div style="background-color: #ee9600;flex: 1 600px;">
				<p>Tambah data baru</p>
				@yield('konten')
			</div>
		</div>
	</body>
</html>