<?php
if (isset($_POST['nama'])) {
    $nama = $_POST['Nama'];
    echo "Halo " . $nama;
} else {
    echo "Nama belum diisi!";
}
?>