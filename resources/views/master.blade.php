<!DOCTYPE html>
<html>
<head>
	<title>Contoh Template Blade Laravel</title>
</head>
<body>
	<header>
		
		<h2>Halaman Utama Laravel</h2>
		<nav>
			<a href="/blog">Home</a>
			|
			<a href="/blog/tentang">Tentang</a>
			|
			<a href="/blog/kontak">Kontak</a>
			|
			<a href="/blog/DataPegawai">Data Pegawai</a>
			|
			
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
	</footer>

</body>
</html>