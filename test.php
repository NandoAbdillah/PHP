<h1>ꦧꦼꦭꦗꦂPHPꦢꦱꦂ</h1>
<form action="" method="get">
    ꦭꦼꦧꦏ꧀ꦤꦗꦼꦤꦼꦁꦩꦸ : <input type="text" name="nama" placeholder="ꦗꦼꦤꦼꦁꦩꦸ">
    <input type="submit" name="tombol" value="Simpan">
</form>

<a href="?coba=rpl&siswa=nando">COBA</a>

<?php 
    if(isset($_GET['nama'])) {
        $isi = $_GET['nama'];
        echo "<h2>$isi</h2>";
        var_dump($isi);

    }

    //atau
    // echo '<h2>'.$isi.'</h2>';

    function persegi($s) {
        $luas = $s*$s;
        return $luas;
    }

    function lingkaran($r) {
        $luas = 3.14*$r**2;
        return $luas;
    }

    function tabung ($r, $t) {
        $luas = 3.14*$r**2*$t;
        return $luas;
    }

    function bola ($r) {
        $volume = pi()*$r*3*3/4;
        return $volume;
    }

    echo '<h3>'.persegi(10).'</h3>';
    echo '<h3>'.lingkaran(7).'</h3>';
    echo '<h3>'.tabung(7, 15).'</h3>';
    echo '<h3>'.bola(7).'</h3>';
?>

<p>ꦫꦸꦏꦸꦤ꧀ꦲꦶꦱ꧀ꦭꦩ꧀ꦲꦢ꧇꧕꧇ꦪꦲꦶꦠꦸ</p>
<ol>
    <p>꧑</p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
</ol>




