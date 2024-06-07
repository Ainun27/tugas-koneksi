<html>
    <head>
        <title>Menampilkan Data Tabel MySQL</title>
        <style>
            body {font-family:tahoma, arial}
            table {border-collapse: collapse}
            th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
            th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
        </style>
    </head>
    <body>
        <center><h1>Database uts_312310013</h1></center>
        <h3>Tabel Anggota</h3>
        <table>
            <thead>
                <tr>
                    <th>ID Anggota</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Nomer Telephone</th>
                    <th>Status Anggota</th>
                    <th>Tanggal Bergabung</th>
                </tr>
            </thead>
        <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM anggota';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
                ?>
            <tbody>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                    <td><?php echo $row[4] ?></td>
                    <td><?php echo $row[5] ?></td>
                </tr>
            </tbody>
        <?php
        }
            ?>
        </table>
        <h3>Tabel Jenis Pinjaman</h3>
        <table>
            <thead>
                <tr>
                    <th>ID Jenis Pinjaman</th>
                    <th>Nama Jenis Pinjaman</th>
                    <th>Bunga</th>
                </tr>
            </thead>
        <?php
            $sql = 'SELECT  * FROM jenis_pinjaman';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                </tr>
            </tbody>
        <?php
        }
            ?>
        </table>
        <h3>Tabel Keanggotaan</h3>
        <table>
            <thead>
                <tr>
                    <th>ID Keanggotaan</th>
                    <th>ID Anggota</th>
                    <th>Status Anggota</th>
                    <th>Tanggal Bergabung</th>
                </tr>
            </thead>
        <?php
            $sql = 'SELECT  * FROM keanggotaan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                </tr>
            </tbody>
        <?php
        }
            ?>
        </table>
        <h3>Tabel Pegawai</h3>
        <table>
            <thead>
                <tr>
                    <th>ID Pegawai</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Nomer Telephone</th>
                </tr>
            </thead>
        <?php
            $sql = 'SELECT  * FROM pegawai';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                </tr>
            </tbody>
        <?php
        }
            ?>
        </table>
        <h3>Tabel Pinjaman</h3>
        <table>
            <thead>
                <tr>
                    <th>ID Pinjaman</th>
                    <th>ID Anggota</th>
                    <th>ID Pegawai</th>
                    <th>ID Jenis Pinjaman</th>
                    <th>Tanggal Pinjaman</th>
                    <th>Jumlah Pinjaman</th>
                </tr>
            </thead>
        <?php
            $sql = 'SELECT  * FROM pinjaman';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                    <td><?php echo $row[4] ?></td>
                    <td><?php echo $row[5] ?></td>
                </tr>
            </tbody>
        <?php
        }
            ?>
        </table>
        <h3>Tabel Simpanan</h3>
        <table>
            <thead>
                <tr>
                    <th>ID Simpanan</th>
                    <th>ID Anggota</th>
                    <th>ID Pegawai</th>
                    <th>Tanggal Simpanan</th>
                    <th>Jumlah Simpanan</th>
                </tr>
            </thead>
        <?php
            $sql = 'SELECT  * FROM simpanan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                    <td><?php echo $row[4] ?></td>
                </tr>
            </tbody>
        <?php
        }
            ?>
        </table>
    </body>
</html>
