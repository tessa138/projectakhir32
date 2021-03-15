<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">PERPUSTAKAAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
		<li class="nav-item">
				<a class='nav-link' href="halaman_admin.php?kategori=b">Home</a>
		</li>
		<li class="nav-item">
				<a class='nav-link' href="users.php">Users</a>
		</li>
        <li class="nav-item">
				<a class='nav-link' href="anggota.php">Anggota</a>
		</li>
        <li class="nav-item">
				<a class='nav-link' href="buku.php">Buku</a>
		</li>
        <li class="nav-item">
				<a class='nav-link' href="detailbuku.php">Detail Buku</a>
		</li>
        <li class="nav-item">
				<a class='nav-link' href="pinjam.php">Peminjaman</a>
		</li>
        <li class="nav-item">
				<a class='nav-link' href="kembali.php">Pengembalian</a>
		</li>
        
        </ul>
        <a href="?q=logout" onclick='return confirm("Apakah Yakin Ingin Logout?")' class="btn btn-outline-danger">Keluar</a>
      </div>
    </div>
  </nav>