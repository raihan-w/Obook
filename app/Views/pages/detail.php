<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container product">
    <div class="product-view">
        <div class="img-container">
            <img src="/sampul/<?= $product['sampul']; ?>" alt="" width="200">
        </div>
        <div class="container">
            <button class="btn-product" onclick=" window.open('https://raihan-w.github.io/display/samples/<?= $product['link']; ?>','_blank')"> DISPLAY </button>
            <button class="btn-product" data-toggle="modal" data-target="#myModal"> BELI SEKARANG </button>
        </div>
    </div>
    <div class="product-info">
        <div class="detail">
            <div class="row">
                <div class="col-md">
                    <p class="price"> <?= number_to_currency($product['harga'], 'IDR'); ?> </p>
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
                    <td> Kategori </td>
                    <td> <?= $product['kategori']; ?> </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <?php
        echo form_open('Collection/add');
        echo form_hidden('id', $product['id']);
        echo form_hidden('price', $product['harga']);
        echo form_hidden('name', $product['judul']);
        //option
        echo form_hidden('sampul', $product['sampul']);
        echo form_hidden('author', $product['pengarang']);
        echo form_hidden('link', $product['link']);
        ?>

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Jumlah item akan bertambah di keranjang belanja</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="/sampul/<?= $product['sampul']; ?>" width="100">
                        </div>
                        <div class="col-sm-8">
                            <table>
                                <tr>
                                    <td>
                                        <h5>
                                            <?= $product['judul']; ?>
                                        </h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?= $product['pengarang']; ?></td>
                                </tr>
                                <tr>
                                    <td> <?= number_to_currency($product['harga'], 'IDR'); ?> </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit"> Tambah ke keranjang </button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>

<?= $this->endSection(); ?>