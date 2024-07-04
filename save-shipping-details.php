<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senderName = $_POST['sender-name'];
    $senderAddress = $_POST['sender-address'];
    $recipientName = $_POST['recipient-name'];
    $recipientAddress = $_POST['recipient-address'];
    $packageDistance = $_POST['package-distance'];

    // Harga per KM
    $pricePerKm = 15000;
    $price = $packageDistance * $pricePerKm;

    $data = "Nama Pengirim: $senderName\nAlamat Pengirim: $senderAddress\nNama Penerima: $recipientName\nAlamat Penerima: $recipientAddress\nJarak Paket: $packageDistance KM\nHarga: Rp " . number_format($price, 0, ',', '.') . "\n\n";

    // Simpan data ke file shipping-details.txt
    file_put_contents('shipping-details.txt', $data, FILE_APPEND);

    // Arahkan ke halaman thank-you.html
    header("Location: thank-you.html");
    exit();
}
?>
