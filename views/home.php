<?php
require 'frontendheader.php';
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/banner/ac.jpg" class="d-block w-100 bannerImg" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/banner/giordano.jpg" class="d-block w-100 bannerImg" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/banner/garnier.jpg" class="d-block w-100 bannerImg" alt="...">
        </div>
    </div>
</div>


<!-- Content -->
<div class="container mt-5 px-5">
    <!-- Category -->
    <div class="row">
        <?php
        foreach ($randomcategories as $randomcategory){
            $rcid = $randomcategory['id'];
            $rcname = $randomcategory['name'];
            $rclogo = $GLOBALS['view_path'].$randomcategory['logo'];


        ?>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
            <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center  h-75">
                <img src="<?php echo $rclogo ?>" class="card-img-top  h-75" alt="...">
                <div class="card-body">
                    <p class="card-text font-weight-bold text-truncate"><?php echo $rcname?></p>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
    <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

    <!-- Discount Item -->
    <div class="row mt-5">
        <h1> Discount Item </h1>
    </div>
    <!-- Disocunt Item -->
    <div class="row">
        <div class="col-12">
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    <?php
                        foreach ($discountitem as $dsi){
                            $di = $dsi['id'];
                            $dicodene = $dsi['codeno'];
                            $diname = $dsi['name'];
                            $diphoto =  $GLOBALS['view_path'].$dsi['photo'];
                            $diprice = $dsi['price'];
                            $didprice = $dsi['discount'];
                    ?>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $diphoto ?>" class="img-fluid w-100">
                            <p class="text-truncate"><?php echo $diname ?></p>
                            <p class="item-price">

                                <strike> <?php echo $diprice ?></strike>
                                <span class="d-block"><?php echo $didprice ?></span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                        <?php } ?>
                </div>
                <button class="btn btnMain leftLst"><</button>
                <button class="btn btnMain rightLst">></button>
            </div>
        </div>
    </div>

    <!-- Flash Sale Item -->
    <div class="row mt-5">
        <h1> Flash Sale </h1>
    </div>

    <!-- Flash Sale Item -->
    <div class="row">
        <div class="col-12">
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/saisai_one.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks</span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/saisai_two.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/saisai_three.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/saisai_four.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/giordano_one.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/giordano_two.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/giordano_three.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/giordano_four.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/apple_four.jpeg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/apple_one.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks</span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/apple_three.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/apple_two.png" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>

                </div>
                <button class="btn btnMain leftLst"><</button>
                <button class="btn btnMain rightLst">></button>
            </div>
        </div>
    </div>

    <!-- Random Catgory ~ Item -->
    <div class="row mt-5">
        <h1> Fresh Picks </h1>
    </div>

    <!-- Random Item -->
    <div class="row">
        <div class="col-12">
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/saisai_one.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks</span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/saisai_two.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/saisai_three.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/saisai_four.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/giordano_one.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/giordano_two.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/giordano_three.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/giordano_four.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/apple_four.jpeg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/apple_one.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks</span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/apple_three.jpg" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/item/apple_two.png" class="img-fluid">
                            <p class="text-truncate">Multi Item Carousel</p>
                            <p class="item-price">
                                <strike>250,000 Ks </strike>
                                <span class="d-block">230,000 Ks </span>
                            </p>

                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                </ul>
                            </div>

                            <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                        </div>
                    </div>

                </div>
                <button class="btn btnMain leftLst"><</button>
                <button class="btn btnMain rightLst">></button>
            </div>
        </div>
    </div>


    <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

    <!-- Brand Store -->
    <div class="row mt-5">
        <h1> Top Brand Stores </h1>
    </div>

    <!-- Brand Store Item -->
    <section class="customer-logos slider mt-5">
        <div class="slide">
            <a href="">
                <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/brand/loacker_logo.jpg">
            </a>
        </div>

        <div class="slide">
            <a href="">
                <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/brand/lockandlock_logo.png">
            </a>
        </div>

        <div class="slide">
            <a href="">
                <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/brand/apple_logo.png">
            </a>
        </div>

        <div class="slide">
            <a href="">
                <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/brand/giordano_logo.png">
            </a>
        </div>

        <div class="slide">
            <a href="">
                <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/brand/saisai_logo.png">
            </a>
        </div>

        <div class="slide">
            <a href="">
                <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/brand/brands_logo.png">
            </a>
        </div>

        <div class="slide">
            <a href="">
                <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/brand/acer_logo.png">
            </a>
        </div>

        <div class="slide">
            <a href="">
                <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/brand/bella_logo.png">
            </a>
        </div>

        <div class="slide">
            <a href="">
                <img src="<?php echo $GLOBALS['view_path']?>template/frontend/image/brand/ariel_logo.png">
            </a>
        </div>
    </section>

    <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

</div>

<?php
require 'frontendfooter.php'
?>