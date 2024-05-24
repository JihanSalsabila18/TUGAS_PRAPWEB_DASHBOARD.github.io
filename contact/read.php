<?php
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM dashboard");


if ($result) {

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['NoID'] . "</td>";
            echo "<td>" . $row['NoHP'] . "</td>";
            echo "<td>" . $row['owner'] . "</td>";
            echo "<td>";
            echo "<a href='#editModal' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>";
            echo "<a href='#deleteModal' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Tidak ada data yang ditemukan.</td></tr>";
    }
} else {
  
    echo "<tr><td colspan='4'>Gagal menjalankan kueri: " . mysqli_error($mysqli) . "</td></tr>";
}
?>
