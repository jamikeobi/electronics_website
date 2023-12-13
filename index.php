<!DOCTYPE html>
<html lang="en">

<?php require "includes/header1.php"; ?>
<script src="https://kit.fontawesome.com/15cef8c93e.js" crossorigin="anonymous"></script>

<body>
    <?php require "includes/header2.php"; ?>
    <div class="slider_container">
        <figure>
            <img src="images/slider/slider3.jpg" alt="">
            <img src="images/slider/slider4.jpeg" alt="">
            <img src="images/slider/slider5.webp" alt="">
            <img src="images/slider/slider6.png" alt="">
            <img src="images/slider/slider3.jpg" alt="">
        </figure>
    </div>
    <div class="homepage_container">

        <div class="product_container">
            <div class="product" data-aos="fade-right">
                <div class="product-image">
                    <img src="images/fan2.jpg" alt="" width="300px" height="200px">
                </div>
                <h4>Fan</h4>
            </div>
            <div class="product" data-aos="fade-right">
                <div class="product-image">
                    <img src="images/fridge2.jpg" alt="" width="300px" height="200px">
                </div>
                <h4>Fridge</h4>
            </div>
            <div class="product" data-aos="fade-right">
                <div class="product-image">
                    <img src="images/product/generator.jpeg" alt="" width="300px" height="200px">
                </div>
                <h4>Generator</h4>
            </div>
            <div class="product" data-aos="fade-right">
                <div class="product-image">
                    <img src="images/product/iron.png" alt="" width="300px" height="200px">
                </div>
                <h4>Iron</h4>
            </div>
        </div>

        <div class="product_container">
            <div class="product">
                <div class="product-image">
                    <img src="images/product/microwave.png" alt="" width="300px" height="200px">
                </div>
                <h4>Microwave</h4>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/product/product1.jpeg" alt="" width="300px" height="200px">
                </div>
                <h4>Air Conditioner</h4>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/product/tv.jpeg" alt="" width="300px" height="200px">
                </div>
                <h4>Television</h4>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/product/hot plate.jpeg" alt="" width="300px" height="200px">
                </div>
                <h4>Hot Plate</h4>
            </div>


        </div>
        <div>
            <a href="product.php"><button type="submit" class="product_button">More Prodcuts <i
                        class="fa-solid fa-right-long"></i></button></a>
        </div>

        <div class="new-box">
            <div class="new-heading">
                <h2>Sign Up for Our Newsletter</h2>
                <p>Fill out your information below to be signed up for our information newsletter.</p>
            </div>
            <form class="row g-3">
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefaultUsername" class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="text" class="form-control" id="validationDefaultUsername"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault03" class="form-label">City</label>
                    <input type="text" class="form-control" id="validationDefault03" required>
                </div>
                <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">State</label>
                    <select class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Anambra</option>
                        <option>Ogun</option>
                        <option>Lagos</option>
                        <option>Edo</option>
                        <option>Delta</option>
                        <option>Abia</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="validationDefault05" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="validationDefault05" required>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Agree to terms and conditions
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="product_button2" type="submit" style="background-color: red; color: white;">Sign Up
                        Now!!</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>


    <?php include "includes/footer.php";  ?>
    <script src="javascript/script2.js"></script>
    <script src="javascript/script.js"></script>


    <!-- AOS script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 200,
        duration: 1000,
    });
    </script>
</body>

</html>