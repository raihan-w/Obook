<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title; ?> </title>
</head>

<body>
<h2>My Collection</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Sampul</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Baca</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($collection as $c) : ?>
                <tr>
                    <td> <img src="/sampul/<?= $c['sampul']; ?>" alt="" width="200"> </td>
                    <td> <?= $c['nmProduct']; ?> </td>
                    <td> <?= $c['nmPengarang']; ?> </td>
                    <td> <button class="btn-product" onclick=" window.open('https://raihan-w.github.io/display/samples/<?= $c['display']; ?>','_blank')"> BACA </button> </td>
                    <td> <a href="koleksi/delete/<?= $c['id']; ?>"> Delete </a> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>