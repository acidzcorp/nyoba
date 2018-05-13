<?php
	//	 Buat Koneksi dengan MYSQL
	$link = mysqli_connect("localhost", "root", "", "web1");
	// Jalankan Query
	$result = mysqli_connect($link, "SELECT * FROM berita_tbl");

	?>