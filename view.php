<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <style>
        body { font-family: 'Times New Roman', serif; padding: 20px; }
        .table-simple th, .table-simple td { border: none; padding: 4px 20px 4px 0; }
    </style>
</head>
<body>

    <table class="table table-borderless table-simple w-auto">
        <thead>
            <tr class="fw-bold">
                <th>No</th>
                <th>Prodi</th>
                <th>Nama Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftar ?? [] as $index => $mhs): ?>
                <tr>
                    <td><?= $index + 1 ?>.</td>
                    <td><?= htmlspecialchars($mhs['prodi']) ?></td>
                    <td><?= htmlspecialchars($mhs['nama']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
