<table border=1>
    <caption><h1>List Jenis</h1></caption>
    <thead>
        <th>Nomor</th>
        <th>Jenis</th>
        <th>Ket</th>
        <th colspan=2>Tools</th>
    </thead>
    <?php
        $no=1;
    foreach ($data['jenis'] as $jenis){
    ?>
    <tbody>
        <td><?= $no ?></td>
        <td><?= $jenis['jenisbarang'] ?></td>
        <td><?= $jenis['ket'] ?></td>
        <td><a href="<?= $base_url.'jenis/edit/'.$jenis['idjenis']?>Ubah</td>
        <td>Hapus</td>
    </tbody>
    <?php
        $no++;
        }
    ?>
</table>