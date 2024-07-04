<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengiriman</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Data Pengiriman</h1>
        <pre><?php
        // Periksa apakah file shipping-details.txt ada
        if (file_exists('shipping-details.txt')) {
            // Tampilkan isi file shipping-details.txt
            echo htmlspecialchars(file_get_contents('shipping-details.txt'));
        } else {
            echo "Tidak ada data pengiriman.";
        }
        ?></pre>
    </div>
</body>
</html>
