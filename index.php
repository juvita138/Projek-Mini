
<?php

require_once "products.php";
require_once "functions.php";

$totalAset = hitungTotalNilaiStok($products);

function rupiah($angka)
{
    return "Rp " . number_format(
        $angka,
        0,
        ",",
        "."
    );
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Product Information System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 30px;
            color: #1e293b;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        h1 {
            color: #d9a2f8;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .total {
            color: #15803d;
            font-size: 28px;
            font-weight: bold;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background: #d9a2f8;
            color: white;
        }

        .kritis {
            background: #fee2e2;
            color: #991b1b;
        }

        .aman {
            background: white;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 12px;
        }

        .badge-kritis {
            background: #fecaca;
            color: #991b1b;
        }

        .badge-aman {
            background: #dcfce7;
            color: #166534;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Product Information System</h1>
    <p>Sistem Informasi Data Produk</p>

    <div class="card">
        <h3>Total Nilai Aset Stok</h3>

        <div class="total">
            <?= rupiah($totalAset); ?>
        </div>

        <p>
            Jumlah produk:
            <?= count($products); ?> jenis
        </p>
    </div>

    <div class="card">
        <h2>Daftar Informasi Produk</h2>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($products as $product): ?>

                        <?php
                        $kritis = isStokKritis(
                            $product["stok"]
                        );
                        ?>

                        <tr class="<?= $kritis
                            ? 'kritis'
                            : 'aman'; ?>">

                            <td>
                                <?= htmlspecialchars(
                                    $product["id"]
                                ); ?>
                            </td>

                            <td>
                                <?= htmlspecialchars(
                                    $product["nama"]
                                ); ?>
                            </td>

                            <td>
                                <?= htmlspecialchars(
                                    $product["kategori"]
                                ); ?>
                            </td>

                            <td>
                                <?= rupiah(
                                    $product["harga"]
                                ); ?>
                            </td>

                            <td>
                                <?= $product["stok"]; ?>
                            </td>

                            <td>
                                <?= htmlspecialchars(
                                    $product["deskripsi"]
                                ); ?>
                            </td>

                            <td>
                                <?php if ($kritis): ?>

                                    <span class="badge badge-kritis">
                                        Stok Kritis
                                    </span>

                                <?php else: ?>

                                    <span class="badge badge-aman">
                                        Stok Aman
                                    </span>

                                <?php endif; ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>