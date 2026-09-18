
<?php

function hitungTotalNilaiStok($products)
{
    $total = 0;

    foreach ($products as $product) {
        $total += $product["harga"] * $product["stok"];
    }

    return $total;
}

function isStokKritis($stok)
{
    return $stok < 3;
}

?>