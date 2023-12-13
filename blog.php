<!DOCTYPE html>
<html lang="en">

<?php require "includes/header1.php"; ?>
<script src="https://kit.fontawesome.com/15cef8c93e.js" crossorigin="anonymous"></script>

<body>
    <?php require "includes/header2.php"; ?>
    <div class="title">Latest News About Our Company</div>


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

            <div class="blog-container">
                <div class="main-blog">
                    <div
                        style="background-image: url('images/blog_post/mainblog.jpg'); height: 300px;background-size: cover; background-position: center; background-repeat: no-repeat;">

                        <h2 class="heading">Welcome to Our Blog</h2>
                        <p id="par1">
                            Follow us as we enlighthen you on interesting products we offer.
                        </p>
                        <a href="https://www.electronics-lab.com/blog/" id="btn2">Read More</a>
                    </div>
                </div>
                <div class="container4">
                    <div class="row">
                        <div class="col">
                            <img src="images/blog_post/smartphone.jpg" alt="" width="300px">
                            <h2 class="head">The Evolution Of Smartphones</h2>
                            <p>
                                From the First Mobile to 5G Connectivity.
                            </p>
                            <a href="https://www.phoneismobile.com/apple.html" class="btn">Read More</a>
                        </div>
                        <div class="col">
                            <img src="images/blog_post/laptop.jpg" alt="" width="300px">
                            <h2 class="head">Choosing the Right Laptop for Your Needs</h2>
                            <p>
                                Follow us as we enlighthen you on interesting products we offer.
                            </p>
                            <a href="https://www.pclaptops.com/blog.html" class="btn">Read More</a>
                        </div>
                        <div class="col">
                            <img src="images/blog_post/iot.jpeg" alt="" width="300px">
                            <h2 class="head">Demystifyiing IOT: A Guide to the Internet of things</h2>
                            <p>
                                Follow us as we enlighthen you on interesting products we offer.
                            </p>
                            <a href="https://unstop.com/blog/characteristics-of-iot" class="btn">Read More</a>
                        </div>
                    </div>
                    <div class="col">
                        <img src="images/blog_post/pcb.webp" alt="" width="300px">
                        <h2 class="head">Understanding the Basics of PCB Design for Electronics</h2>
                        <p>
                            Follow us as we enlighthen you on interesting products we offer.
                        </p>
                        <a href="https://resources.pcb.cadence.com/blog/2023-an-introduction-to-printed-circuit-boards"
                            class="btn">Read More</a>
                    </div>
                    <div class="col">
                        <img src="images/blog_post/AI.jpg" alt="" width="300px">
                        <h2 class="head">The Role of Artificial Intelligence in Electronics</h2>
                        <p>
                            Follow us as we enlighthen you on interesting products we offer.
                        </p>
                        <a href="https://www.britannica.com/technology/artificial-intelligence#:~:text=Artificial%20intelligence%20(AI)%20is%20the,require%20human%20intelligence%20and%20discernment."
                            class="btn">Read More</a>
                    </div>
                    <div class="col">
                        <img src="images/blog_post/security.jpg" alt="" width="300px">
                        <h2 class="head">Electronic Security Systems</h2>
                        <p>
                            Follow us as we enlighthen you on interesting products we offer.
                        </p>
                        <a href="https://www.commerce.gov/osy/programs/physical-security/electronic-security-systems"
                            class="btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="comment-box" style="background-color: darkred; background: transparent;">
                <p>Leave a Comment</p>
                <form action="comment.php" class="comment-form" onsubmit="return(validateF())">
                    <input type="text" placeholder="Name" id="uname" require>
                    <input type="email" placeholder="Email" id="mail" require>
                    <textarea name="" id="comment" cols="30" rows="10" placeholder="Write Your Comment"
                        require></textarea>
                    <button class="sumbit_btn">Post Comment</button>
                </form>
            </div>
        </div>\
    </div>
    </div>
    </div>

    <?php include "includes/footer.php";  ?>
    <script src="javascript/script2.js"></script>
    <script src="javascript/script.js"></script>

</body>

</html>