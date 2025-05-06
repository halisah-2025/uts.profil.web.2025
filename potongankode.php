<?php

// Periksa apakah parameter 'nama' ada dalam URL
if (isset($_GET['nama'])) {
    // Ambil nilai dari parameter 'nama'
    $nama = $_GET['nama'];

    // Tampilkan pesan halo dengan nama yang diterima
    echo "Halo, " . htmlspecialchars($nama) . "!";
} else {
    // Jika parameter 'nama' tidak ada, tampilkan pesan default
    echo "Halo!";
}

?>