<?php

echo "
            <form method=post>
                <table border=1>
                        <tr>
                            <td>Baris</td>
                            <td><input type=number name='baris'</td>
                        </tr>
                        <tr>
                            <td>Kolom</td>
                            <td><input type=number name=kolom></td>
                        </tr>
                        <tr>
                            <td colspan=2><input type=submit name=submit value='submit'>
                        </tr>
                </table>
            
            </form>


    ";

if ($_POST['submit']) {
    $angka_awal = 0;
    $angka_berikut = 1;

    $table .= "<table border=1>";

    for ($i = 1; $i <= $_POST['baris']; $i++) {
        $table .= "<tr>";
        for ($j = 1; $j <= $_POST['kolom']; $j++) {
            $hasil = $angka_awal + $angka_berikut;
            $table .= "<td>$hasil</td>";

            $angka_awal = $angka_berikut;
            $angka_berikut = $hasil;
        }
        $table .= "</tr>";
    }

    $table .= "</table>";

    echo $table;
}
