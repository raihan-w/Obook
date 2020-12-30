<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- iklan bill board-->
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/iklan/buku.PNG" class="d-block" alt="..." style="width: 750px; height: 400px;">
                    </div>
                    <div class="carousel-item">
                        <img src="/iklan/buku1.PNG" class="d-block" alt="..." style="width: 750px; height: 400px;">
                    </div>
                    <div class="carousel-item">
                        <img src="/iklan/buku.PNG" class="d-block" alt="..." style="width: 750px; height: 400px;">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col">
            <img src="/iklan/25.PNG" alt="" style="width: 300px;">
            <br>
            <img src="/iklan/buku1.PNG" alt="" style="width: 200px;margin-top: 30px; margin-left: 50px;">
        </div>

    </div>
</div>

<!-- hightlighted menu -->
<div class="container">
    <div class="hightlighted-menu">
        <div class="wraper">
            <a href="">
                <img src="/icon/Group 1.png" alt="">
                <p class="icon-title">Menu apa ya?</p>
            </a>
        </div>
        <div class="wraper">
            <a href="">
                <img src="/icon/Group 2.png" alt="">
                <p class="icon-title">Menu apa ya?</p>
            </a>
        </div>
        <div class="wraper">
            <a href="">
                <img src="/icon/Group 3.png" alt="">
                <p class="icon-title">Menu apa ya?</p>
            </a>
        </div>
        <div class="wraper">
            <a href="">
                <img src="/icon/Group 4.png" alt="">
                <p class="icon-title">Menu apa ya?</p>
            </a>
        </div>
        <div class="wraper">
            <a href="">
                <img src="/icon/Group 5.png" alt="">
                <p class="icon-title">Menu apa ya?</p>
            </a>
        </div>
        <div class="wraper">
            <a href="">
                <img src="/icon/Group 6.png" alt="">
                <p class="icon-title">Menu apa ya?</p>
            </a>
        </div>
    </div>
</div>

<!-- icon flashsahle -->
<div class="container">

    <div class="row">
        <div class="col-md3">
            <h3 style="color: rgb(248, 9, 9);"> Exclusive sale</h3>
        </div>

        <div class="col-md3 ml-3 mt-2 ">
            <table style="border: 2px solid rgb(107, 32, 32); ">
                <tr>
                    <th style="border: 1px solid rgb(107, 32, 32); background-color: rgb(85, 45, 196);">
                        <p id="hours" style=" font-size: 14px; color: white; margin: 0%;"></p>
                    </th>
                    <th style="border: 1px solid rgb(107, 32, 32);  background-color:rgb(85, 45, 196);">
                        <p id="minute" style=" font-size: 14px; color: white;  margin: 0%; ">
                        </p>
                    </th>
                    <th style="border: 1px solid rgb(107, 32, 32);  background-color:rgb(85, 45, 196);">
                        <p id="second" style=" font-size: 14px; color: white;  margin: 0%; "></p>
                    </th>
                </tr>
            </table>

        </div>

    </div>

    <div class="row mt-3" style="background-image: url('/banner/bg-2.jpg'); ">

        <div class="col-md3 mt-3" style="margin-left: 100px;">
            <div class="card" style="width: 150px;">
                <img src="/sampul/12.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" style="font-size: 8px; text-align: center;">Some quick example <br> i'ts oke
                        <br>nevermind
                    </p>
                </div>
            </div>
        </div>


        <div class="col-md3  ml-3" style="margin-top: 150px;">
            <div class="card" style="width: 150px;">
                <img src="/sampul/13.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" style="font-size: 8px; text-align: center;">Some quick example <br> i'ts oke
                        <br>nevermind
                    </p>
                </div>
            </div>
        </div>
        <a href="detail.html" style="color: black;">
            <div class="col-md3 mt-3 ml-3">
                <div class="card" style="width: 150px;">
                    <img src="/sampul/steeve.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: 8px; text-align: center;">Some quick example <br> i'ts oke
                            <br>nevermind
                        </p>
                    </div>
                </div>
            </div>
        </a>

        <div class="col-md3  ml-3" style="margin-top: 150px;">
            <div class="card" style="width: 150px;">
                <img src="/sampul/8.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" style="font-size: 8px; text-align: center;">Some quick example <br> i'ts oke
                        <br>nevermind
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md3 mt-3 ml-3">
            <div class="card" style="width: 150px;">
                <img src="/sampul/5.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" style="font-size: 8px; text-align: center;">Some quick example <br> i'ts oke
                        <br>nevermind
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md3  ml-3" style="margin-top: 150px;">
            <div class="card" style="width: 150px;">
                <img src="/sampul/7.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" style="font-size: 8px; text-align: center;">Some quick example <br> i'ts oke
                        <br>nevermind
                    </p>
                </div>
            </div>
        </div>

        <button onclick="window.location.href='exclusive-sale.html'" class="btn" type="submit" style="margin-left: 50px; margin-bottom: 50px;  background-color: palevioletred; color: blue; font-weight: bold; font-family: 'Times New Roman', Times, serif; border-radius: 20px;">Lihat
            Semua</button>

    </div>
</div>

<!-- Katalog -->
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h4 class="catalog-menu">Rekomendasi</h4>
            <div class="row">
                <div class="colsm-2">
                    <div class="card">
                        <img src="/sampul/3.PNG" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="price"> Rp.100.000 </p>
                            <p class="judul"> Buku Bodo Amat </p>
                            <div class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card">
                        <img src="/sampul/10.PNG" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="discount"> Rp.87.000 </p>
                            <p class="price"> Rp.50.000 </p>
                            <p class="judul"> Andromeda </p>
                            <div class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h4 class="catalog-menu">Buku Terbaru</h4>
            <div class="row">
                <div class="colsm-2">
                    <div class="card">
                        <img src="/sampul/10.PNG" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="discount"> Rp.99.000 </p>
                            <p class="price"> Rp.50.000 </p>
                            <p class="judul"> Buku Bodo Amat </p>
                            <div class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card">
                        <img src="/sampul/3.PNG" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="discount"> Rp.87.000 </p>
                            <p class="price"> Rp.50.000 </p>
                            <p class="judul"> Andromeda </p>
                            <div class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h4 class="catalog-menu">Novel Terbaru</h4>
            <div class="row">
                <div class="colsm-2">
                    <div class="card">
                        <img src="/sampul/3.PNG" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="discount"> Rp.87.000 </p>
                            <p class="price"> Rp.50.000 </p>
                            <p class="judul"> Buku Bodo Amat </p>
                            <div class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card">
                        <img src="/sampul/10.PNG" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="discount"> Rp.100.000 </p>
                            <p class="price"> Rp.60.000 </p>
                            <p class="judul"> Andromeda </p>
                            <div class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>