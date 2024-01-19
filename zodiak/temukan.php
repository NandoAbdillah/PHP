<div class="text-center ">
    <h1 class="mb-3">Temukan</h1>

    <form class="" method="post">
        <legend>Inputkan Tanggal Lahir Anda</legend>
        <div class="row g-2  my-3" style="margin-left : 25%">
            <div class="col-auto">
                <input type="nama" name="nama" class="form-control w-100 " id="inputPassword2" placeholder="Nama">
            </div>
            <div class="col-auto">
                <input type="date" name="birthdate" id="" class="form-control w-100 ">
            </div>

        </div>

        <div class="">
            <input type="submit" name="kirim" class="btn btn-primary" value="Periksa">
        </div>
    </form>

    <div class="zodiak text-center " style="display: flex; flex-direction: row; margin-left : 25%"">
        <h1>C</h1>
        <h1>A</h1>
        <h1>N</h1>
        <h1>C</h1>
        <h1>E</h1>
        <h1>R</h1>
    </div>

</div>

<script>
    // function makeElement () {
    //     let wrap =document.querySelector('.zodiak');
    //     let h1 =document.createElement('p');
    //     for(let i=0; i<panjangHuruf; i++) {

    //     }
    // }
</script>

<!-- 
    Aries -> 21 Maret - 19 April
    Taurus -> 20 April - 20 Mei
    Gemini -> 21 Mei - 20 Juni
    Cancer -> 21 Juni - 22 Juli
    Leo -> 23 Juli - 22 Agustus
    Virgo -> 23 Agustus - 22 September
    Libra -> 23 September - 22 Oktober
    Scorpio -> 23 Oktober - 21 November
    Sagitarius -> 22 November - 21 Desember
    Capicorn -> 22 Desember - 19 Januari
    Aquarius -> 20 Januari - 18 Februari
    Pisces -> 19 Februari - 20 Maret
 -->

<?php

function cariZodiak($tanggal = 23, $bulan = 8)
{
    $dataZodiak = array(
        // Masih ada kessalahan di Aries

        'Aries' => [21, 3, 19, 4],
        'Taurus' => [20, 4, 20, 5],
        'Gemini' => [21, 5, 20, 6],
        'Cancer' => [21, 6, 22, 7],
        'Leo' => [23, 7, 22, 8],
        'Virgo' => [23, 8, 22, 9],
        'Libra' => [23, 9, 22, 10],
        'Scorpio' => [23, 10, 21, 11],
        'Sagitarius' => [22, 11, 21, 12],
        'Capicorn' => [22, 12, 19, 1],
        'Aquarius' => [20, 1, 18, 2],
        'Pisces' => [19, 2, 20, 3],
    );

    $dataZodiakBaru = array();
    $dataIndeks = array();

    foreach ($dataZodiak as $data => $key) {
        // echo "<br> $data";
        $panjang = count($key);

        for ($i = 0; $i < $panjang; $i++) {
            if (($i % 2) != 0) {
                if ($key[$i] == $bulan) {
                    array_push($dataZodiakBaru, $data);
                    array_push($dataIndeks, $i - 1);
                }
            }
        }
    }

    for ($i = 0; $i < 2; $i++) {
        $zodiak = $dataZodiakBaru[$i];
        $index = $dataIndeks[$i];

        if ($index == 0) {
            if ($tanggal >= $dataZodiak[$zodiak][0]) {
                echo "$zodiak";
                break;
            }
        } else if ($index == 2) {
            if ($tanggal <= $dataZodiak[$zodiak][2]) {
                echo "$zodiak";
                break;
            }
        }
    }


}




if (isset($_POST['kirim'])) {
    $data = $_POST['birthdate'];
    $dataNew = explode('-', $data);

    $tahun = $dataNew[0];
    $bulan = $dataNew[1];
    $tanggal = $dataNew[2];

    echo "$tanggal -> $bulan -> $tahun";
    cariZodiak($tanggal, $bulan);
}

?>