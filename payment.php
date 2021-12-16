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
            <a href="payment.php" class="step_title active">
                <span>Payment Info</span>
            </a>
        </div>
    </div>

    <div class="customer_info padding_x_5_lg padding_0_sm my-5 payment">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <form action="">
                    <p>To apply promotion codes, please return to <a href="">cart</a>.</p>
                    <p class="form_text mt-2">Gift Cards</p>

                    <div class="form-row overflow-auto-md">
                        <div class="form-group col-md-5 mb-4">
                            <label for="number" class="sr-only">Number</label>
                            <input type="number" class="form-control" id="number" placeholder="Number (Optional)">
                        </div>

                        <div class="form-group col-md-5 mb-4">
                            <label for="pin" class="sr-only">Pin</label>
                            <input type="number" class="form-control" id="pin" placeholder="Pin (Optional)">
                        </div>
                        <div class="form-group col-md-2 mb-4">
                            <button class="btn btn-warning px-5 py-3">Enter</button>
                        </div>
                    </div>

                    <p class="form_text">Payment Method</p>

                    <div class="method_radio_button">
                        <div class="d-flex justify-content-between">
                            <div class="method_sec">
                                <div class="methods">
                                    <input type="radio" onClick="hideForm()" name="address" checked id="address2">
                                    <label for="address2">Cash On Delivery</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="method_radio_button mt-3">
                        <div class="d-flex justify-content-between">
                            <div class="method_sec">
                                <div class="methods">
                                    <input type="radio" onClick="showForm()" name="address" id="address1">
                                    <label for="address1">Credit Card</label>
                                </div>
                            </div>

                            <div class="image_area my-auto">
                                <img src="https://flowcdn.io/util/logos/payment-methods/visa/60/original.png" alt="">
                                <img src="https://flowcdn.io/util/logos/payment-methods/mastercard/60/original.png"
                                    alt="">
                                <img src="https://flowcdn.io/util/logos/payment-methods/american_express/60/original.png"
                                    alt="">
                            </div>

                        </div>
                        <div class="form_area">
                            <div class="form-group mb-4">
                                <label for="cardnumber" class="sr-only">Card Number</label>
                                <input type="number" class="form-control" id="cardnumber" placeholder="Card Number">
                            </div>

                            <div class="form-group mb-4">
                                <label for="cardname" class="sr-only">Card Holder Name</label>
                                <input type="text" class="form-control" id="cardname" placeholder="Card Holder Name">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4 mb-4">
                                    <label for="expirymonth" class="sr-only">Expiry Month (MM)</label>
                                    <input type="number" class="form-control" id="expirymonth"
                                        placeholder="Expiry Month (MM)">
                                </div>

                                <div class="form-group col-md-4 mb-4">
                                    <label for="expiryyear" class="sr-only">Expiry Year (YYYY)</label>
                                    <input type="number" class="form-control" id="expiryyear"
                                        placeholder="Expiry Year (YYYY)">
                                </div>


                                <div class="form-group col-md-4 mb-4">
                                    <label for="cvv" class="sr-only">CVV</label>
                                    <input type="number" class="form-control" id="cvv" placeholder="CVV">
                                </div>
                            </div>
                        </div>

                    </div>
                    <p class="form_text bottom_text mt-3">By placing this order, I agree to the <a href="">Privacy
                            Policy</a> and <a href="">Terms of Use</a>.</p>
                    <p class="form_text bottom_text mt-3 d-flex"><input type="checkbox" name="" id="accept"
                            class="mr-3"><label for="accept">I would like to receive promotions and special offers from
                            Janie and Jack. You can opt out at any time by following the link at the bottom of these
                            emails or by calling 1-877-449-8800. For more information, including how to exercise your
                            rights to your personal data, please see our <a href="">Privacy Policy</a>.</label></p>

                    <p class="form_text mt-2 mb-0 text-secondary bottom_text"><i class="fas fa-chevron-left"></i> <a
                            href="shipping.php">Return to Shipping Method</a></p>
                    <input type="submit" class="btn btn-warning px-5 float-right" value="Complete Order">
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


