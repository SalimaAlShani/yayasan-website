<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $divisi = $_POST['divisi'];

    $message = "Nama: $nama\nAsal Sekolah: $asal_sekolah\nEmail: $email\nNo. HP: $no_hp\nAlamat: $alamat\nDivisi: $divisi";
    $whatsapp = "https://wa.me/628982346300?text=" . urlencode($message);

    header("Location: " . $whatsapp);
    exit();
}
?>
