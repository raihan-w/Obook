<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-md mt-4">

    <?php
    $cart = $cart->contents();
    if (empty($cart)) {
        echo '<h2>';
        echo 'Opps Keranjang masih kosong';
        echo '</h2>';
    ?>

    <?php } else { ?>
        <div class="row">
            <div class="col-sm-8">
                <?php
                $total = 0;
                foreach ($cart as $key => $value) :
                    $total = $total + $value['subtotal'];
                ?>
                    <ul>
                        <li class="cart-summary">
                            <div class="summary-ctr">
                                <div class="summary-item">
                                    <div class="cart-img">
                                        <img src="/sampul/<?= $value['options']['sampul']; ?> " alt="" width="100">
                                    </div>
                                    <div class="cart-info">
                                        <h6><?= $value['name']; ?></h6>
                                        <p class="author"><?= $value['options']['author']; ?></p>
                                        <p class="price"><?= number_to_currency($value['price'], 'IDR') ?></p>
                                    </div>
                                </div>
                                <div class="summary-qty">
                                    <input type="number" min="1" name="qty" class="form-control qty-input" value="<?= $value['qty']; ?>">
                                </div>
                                <div class="summary-total">
                                    <p>Subtotal</p>
                                    <p><?= number_to_currency($value['subtotal'], 'IDR') ?></p>
                                    <a href="">Hapus</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                <?php endforeach; ?>
            </div>
            <div class="col-sm-4">
                <div class="checkout-area">
                    <p class="total">
                        <span class="total-qty">Total jumlah produk</span>
                        <span class="total-price"><?= number_to_currency($total, 'IDR') ?></span>
                    </p>
                    <button type="button"> LANJUTKAN PEMBAYARAN </button>
                </div>
            </div>
        </div>
    <?php } ?>


</div>

<?= $this->endSection(); ?>