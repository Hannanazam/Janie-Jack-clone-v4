<title>Janie & Jack Clone</title>
<link rel="stylesheet" href="./asset/css/style.css">
<link rel="stylesheet" href="./asset/css/bootstrap.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<section class="checkout">
    <div class="text-center mainImg">
    <a href="index.php">
    <img
      src="https://www.janieandjack.com/on/demandware.static/Sites-JanieAndJack-Site/-/default/dw55dc3487/images/Logo.png"
      alt="">
    </a>
    </div>
    <div class="payments_options">
        <div class="d-flex justify-content-between m-auto step_group">
            <a href="checkout.php" class="step_title active">
                <span>Customer Info</span>
            </a>
            <a href="shipping.php" class="step_title active">
                <span>Shipping Method</span>
            </a>
            <a href="payment.php" class="step_title">
                <span>Payment Info</span>
            </a>
        </div>
    </div>

    <div class="customer_info padding_x_5_lg padding_0_sm my-5 shipping">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <form action="">
                    <p class="form_text mt-5">Shipping Address</p>
                    <p class="form_text mt-2 mb-0 text-secondary">PAK</p>
                    <p><a href="">Edit</a></p>
                    <p class="form_text mt-5">Shipping Method</p>

                    <div class="method_radio_button">
                        <div class="d-flex justify-content-between">
                            <div class="method_sec">
                                <div class="methods">
                                    <input type="radio" checked name="address" id="address1">
                                    <label for="address1">International Express Delivery (1-4 Business Days) <br>
                                        <span>Estimated Delivery: <span>2/2/21</span></span></label>
                                </div>
                            </div>

                            <div class="price_area my-auto">
                                <p class="mb-0">4,414.05 PKR</p>
                            </div>
                        </div>

                    </div>

                    <p class="form_text mt-2 mb-0 text-secondary bottom_text"><i class="fas fa-chevron-left"></i> <a
                            href="checkout.php">Return to Customer Information</a></p>
                    <input type="submit" class="btn btn-warning px-5 float-right" value="Continue">
                </form>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="checkout_info">
                    <div class="card_sec_main py-4">
                        <div class="card_sec">
                            <p class="main_heading">
                                YOUR CART
                            </p>
                            <hr>
                            <div class="cart_item_sec">
                                <div class="d-flex justify-content-between">
                                    <div class="imgsec">
                                        <img src="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$CUSTOM$" alt="">
                                        <span class="item_count">1</span>
                                    </div>
                                    <div class="text_area">
                                        <p>Reindeer Fair Isle Pom Beanie <br>
                                            ColorBradbury Red Fair Isle <br>
                                            Size0-6m</p>
                                    </div>

                                    <div class="text_area">
                                        <p>4,669.55 PKR</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p class="desc">
                                Subtotal <span class="float-right">PKR 3,268.12</span>
                            </p>
                            <p class="desc">
                                Estimated Shipping <span class="float-right">-</span>
                            </p>
                            <p class="desc">
                                Estimated Tax <span class="float-right">-</span>
                            </p>
                            <hr>
                            <p class="desc">
                                Estimated Order Total <span class="float-right">PKR 3,268.12</span>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

</section>