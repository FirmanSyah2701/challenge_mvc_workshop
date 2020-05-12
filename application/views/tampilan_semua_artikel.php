<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Smeua Artikel</title>
</head>
<body>
    <?php foreach($semua_artikel as $data) : ?>
        <h1>Judul: <?= $data['judul'] ?></h1>
        <p>Isi: <?= $data['isi'] ?></p>
        <hr>
    <?php endforeach; ?>
</body>
</html>