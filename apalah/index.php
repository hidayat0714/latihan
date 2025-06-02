<!DOCTYPE html>
<html>
<head>
    <title>Digital Talent</title>
</head>
<body>
    <h2>List Mahasiswa</h2>

    <!-- Tombol untuk tambah data -->
    <p>
        <a href="form-input.php">
            <button>+ Tambah Mahasiswa</button>
        </a>
    </p>

    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>JURUSAN</th>
            <th>AKSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        $no = 1;
        while ($row = mysqli_fetch_assoc($mahasiswa)) {
            $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki';
            echo "<tr>
                <td>$no</td>
                <td>" . $row['nim'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>$jenis_kelamin</td>
                <td>" . $row['jurusan'] . "</td>
                <td>
                    <a href='form-edit.php?id_mhs=" . $row['id_mhs'] . "'>Edit</a>
                    <a href='delete.php?id_mhs=" . $row['id_mhs'] . "' onclick='return confirm(\"Yakin ingin hapus?\")'>Delete</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>