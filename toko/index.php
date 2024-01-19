<?php
$host = "127.0.0.1";
$db = "dbtoko";
$user = "root";
$password = "";

$koneksi = new mysqli($host, $user, $password, $db);

$sql = "SELECT * FROM barang ";

$hasil = mysqli_query($koneksi, $sql);

var_dump($hasil);

echo "
    <table border='1px'>
    <thead>
    <tr>
    <th>BARANG</th>
    <th>HARGA</th>
    <th>STOK</th>
    </tr>
    </thead>
    <tbody>
    ";

while ($row = mysqli_fetch_array($hasil)) {

    echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
}

echo "
    </tbody>

    </table>
    ";

$sql = "SELECT * FROM pelanggan";
$hasils = mysqli_query($koneksi, $sql);

echo "
    <table border='1px'>
    <thead>
    <tr>
    <th>BARANG</th>
    <th>HARGA</th>
    <th>STOK</th>
    </tr>
    </thead>
    <tbody>
    ";

while ($row = mysqli_fetch_array($hasils)) {

    echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
}

echo "
    </tbody>

    </table>
    ";

?>