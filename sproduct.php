<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pcmart - Get Your Dream Pc</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section id="header">
        <a href="index.php"><img id="Logo" src="img/logo.png" alt="Reload"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-cart-shopping cart"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>

        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-cart-shopping cart"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/products/f1.jpg" width="100%" id="MainImg" alt="">
            <div class="small-img-group">

                <div class="small-img-col">
                    <img src="img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>

            </div>

        </div>

        <div class="single-pro-details">
            <h6>Home / Cpu</h6>
            <h4>Asus Zen 2</h4>
            <h2>Rs. 70000</h2>

            <select>
                <option>Select items</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>Product Descriptions - The Asus Zen 2 is a powerful and versatile computer that is designed to handle
                the most demanding tasks with ease. Powered by the latest AMD Ryzen processors, this device boasts
                incredible speed and performance that can rival even the most expensive gaming laptops on the market.
                Its sleek and modern design features a thin bezel display that provides a large viewing area for an
                immersive visual experience. The device also comes equipped with a range of connectivity options,
                including Wi-Fi 6 and Bluetooth 5.0, allowing users to stay connected and productive wherever they go.
                With its premium features and exceptional performance, the Asus Zen 2 is a top choice for anyone looking
                for a high-quality and reliable computer.</span>
        </div>
    </section>


    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Some Featured our Products</p>
        <div class="pro-container">

            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>Asus Gaming</span>
                    <h5>Asus Zen 2</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 85000</h4>
                </div>
                <a href="#"><i class=" fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/f2.jpg" alt="">
                <div class="des">
                    <span>Hp</span>
                    <h5>Hp Office 5</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 45000</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/f3.jpg" alt="">
                <div class="des">
                    <span>Acer Gaming</span>
                    <h5>Acer spike 4</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 70300</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/f4.jpg" alt="">
                <div class="des">
                    <span>Aorus Gaming</span>
                    <h5>Aosus white edition</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 75600</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

        </div>
    </section>


    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Newsletter</h4>
            <p>Get E-mial updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> add</p>
            <p><strong>Phone:</strong> 91 999999999</p>
            <p><strong>Hours::</strong> 10:00 -18:00, mon - sat</p>
            <div class="follow">
                <h4>Follow</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">view Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From app Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2023, Pcmart - Get Your Dream Pc</p>
        </div>
    </footer>

    <script src="script.js"></script>

</body>

</html>