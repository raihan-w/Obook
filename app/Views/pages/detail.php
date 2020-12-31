<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container product">
    <div class="product-view">
        <div class="img-container"onclick="window.location.href=''">
            <img src="/sampul/<?= $product['sampul']; ?>" alt="">
        </div>
        <div class="container">
            <button class="btn-product" onclick="window.location.href=''"> Beli Sekarang </button>
            <button class="btn-product" onclick="window.location.href=''"> Keranjang Belanja </button>
        </div>
    </div>
    <div class="product-info">
        <div class="detail">
            <div class="row">
                <div class="col-md">
                    <p class="discount"> Rp.87.000 </p>
                </div>
                <div class="col-md">
                    <p class="price"> Rp.50.000 </p>
                </div>
            </div>
            <h2>
                <?= $product['judul']; ?>
            </h2>
            <div style="margin: 5%;">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <div class="detail">
            <p>
                <?= $product['deskripsi']; ?>
            </p>

            <table align="center" border="0" width="500">
                <tr>
                    <td> Pengarang </td>
                    <td> <?= $product['pengarang']; ?> </td>
                </tr>
                <tr>
                    <td> ISBN </td>
                    <td> <?= $product['ISBN']; ?> </td>
                </tr>
                <tr>
                    <td> Kategori </td>
                    <td> <?= $product['kategori']; ?> </td>
                </tr>
                <tr>
                    <td> Penerbit </td>
                    <td> <?= $product['penerbit']; ?> </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>