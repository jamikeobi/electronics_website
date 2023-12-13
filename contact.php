<!DOCTYPE html>
<html lang="en">

<?php require "includes/header1.php"; ?>
<script src="https://kit.fontawesome.com/15cef8c93e.js" crossorigin="anonymous"></script>

<body>
    <?php require "includes/header2.php"; ?>
    <div class="title">Contact Us For More Information</div>


    <div class="main_cont">
        <div class="sidebar">
            <div class="product">
                <img src="images/fan2.jpg" alt="">
                <h4>Fan</h4>
            </div>
            <div class="product">
                <img src="images/fridge2.jpg" alt="">
                <h4>Fridge</h4>
            </div>
            <div class="product">
                <img src="images/product/generator.jpeg" alt="">
                <h4>Generator</h4>
            </div>

        </div>
        <div class="main_body">
            <h1 class="heading-contact">Contact Us by Filing The Form Below</h1>
            <div class="comment-box2">
                <p>Contact Us</p>
                <form action="success.php" class="comment-form">
                    <input type="text" placeholder="Name" require>
                    <input type="email" placeholder="Email" require> <button class="sumbit_btn">Submit</button>
                </form>
            </div>

        </div>
    </div>

    <?php include "includes/footer.php";  ?>
    <script src="javascript/script2.js"></script>
    <script src="javascript/script.js"></script>
</body>

</html>