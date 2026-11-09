<?php
    function hitungDiskon($harga, $persen) {
        $potongan = $harga * ($persen / 100);
        return $harga - $potongan;
    }

    $hargaAkhir = hitungDiskon(150000, 10);

    echo "<h3>Perhitungan Diskon</h3>";

    echo "Harga awal: Rp" .
        number_format(150000, 0, ",", ".") . "<br>";

    echo "Diskon: 10%<br>";

    echo "Harga setelah diskon: Rp" .
        number_format($hargaAkhir, 0, ",", ".");
?>