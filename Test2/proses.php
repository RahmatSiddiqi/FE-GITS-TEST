<?php
if (isset($_POST["jumlah_pemain"]) && isset($_POST["daftar_skor"]) && isset($_POST["jumlah_permainan"]) && isset($_POST["skor_gits"])) {
  $jumlah_pemain = (int)$_POST["jumlah_pemain"];
  $daftar_skor = explode(" ", $_POST["daftar_skor"]);
  $jumlah_permainan = (int)$_POST["jumlah_permainan"];
  $skor_gits = explode(" ", $_POST["skor_gits"]);

  sort($daftar_skor);
  $daftar_skor = array_reverse($daftar_skor);

  for ($i = 0; $i < $jumlah_permainan; $i++) {
    $rangking = 0;
    for ($j = 0; $j < $jumlah_pemain; $j++) {
      if ($daftar_skor[$j] > $skor_gits[$i]) {
        $rangking++;
      }
    }
    echo ($rangking + 1) . " ";
  }
}
?>