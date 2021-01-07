<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-md mt-4">
    <div class="row">
        <div class="col-sm-8">
            <ul>
                <li class="cart-summary">
                    <div class="summary-ctr">
                        <div class="summary-item">
                            <div class="cart-img">
                                <img src="/sampul/13.PNG" alt="" width="100">
                            </div>
                            <div class="cart-info">
                                judul
                            </div>
                        </div>
                        <div class="summary-qty">
                            <input class="qty-input" type="number" min="1" name="qty">
                        </div>
                        <div class="summary-total">
                            <p>Subtotal</p>
                            <p>50000</p>
                            <a href="">Hapus</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-sm-4">
            <div class="checkout-area">
                <p class="total">
                    <span class="total-qty">Total jumlah produk</span>
                    <span class="total-price"> Rp. duit</span>
                </p>
                <button type="button"> LANJUTKAN PEMBAYARAN </button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>