<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>
    <header class="header  bg" id="navBar">
    <div class=" navBar">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-2 col-6">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo.png" class="imgFluid" alt="image">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-6 header">
                            <div class="open-nav">
                                <span></span>
                            </div>
                            <div class="menu-overlay">
                            </div>
                            <nav class="nav-menu d-xl-flex justify-content-around align-items-center">
                                <div class="close-nav">
                                    <img src="images/close.png" class="imgFluid" alt="image">
                                </div>
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                   <!-- <li class="menu-item menu-item-has-children">
                                        <a href="javascript:;" data-toggle="sub-menu">Services <i class="plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="products.php">Logo Design </a></li>
                                            <li class="menu-item"><a href="brand-development.php">Brand Development</a>
                                            </li>
                                            <li class="menu-item"><a href="marketing-collateral.php">Marketing
                                                    Collaterals</a></li>
                                            <li class="menu-item"><a href="web-development.php">Web Design &
                                                    Development</a></li>
                                            <li class="menu-item"><a href="app-development.php">App Design &
                                                    Development</a></li>
                                            <li class="menu-item"><a href="illustrator-animation.php">2D & 3D
                                                    Illustration</a></li>
                                            <li class="menu-item"><a href="motion-graphics.php">Motion Graphics</a>
                                            </li>
                                            <li class="menu-item"><a href="creative-copywriting.php">Creative
                                                    Copywriting</a></li>
                                            <li class="menu-item"><a href="digital-marketing.php">Digital Marketing</a>
                                            </li>
                                            <li class="menu-item"><a href="seo-services.php">SEO</a></li>
                                            <li class="menu-item"><a href="social-media-marketing.php">Social Media
                                                    Marketing</a></li>
                                            <li class="menu-item"><a href="back-end-development.php">Back-End
                                                    Development</a></li>
                                            <li class="menu-item"><a href="website-management.php">Website
                                                    Management</a></li>
                                            <li class="menu-item"><a href="domain-registration.php">Domain
                                                    Registration</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="menu-item">
                                        <a href="About-us.php">About Us</a>
                                    </li>


                                    <li class="menu-item menu-item-has-children">
                                        <a href="javascript:;" data-toggle="sub-menu">Products <i class="plus"></i></a>
                                        <ul class="sub-menu">

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <ul>
                                                    <li class="menu-item meganav">
                                                <a href="Products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12">
                                                <ul>
                                                    <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12">
                                                <ul>
                                                    <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-12">
                                                <ul>
                                                    <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12">
                                                <ul>
                                                    <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12">
                                                <ul>
                                                    <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                <li class="menu-item meganav">
                                                <a href="products.php">Title Goes Here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                            <!-- <li class="menu-item">
                                                <a href="products.php">Logo Design </a></li>
                                            <li class="menu-item"><a href="brand-development.php">Brand Development</a>
                                            </li>
                                            <li class="menu-item"><a href="marketing-collateral.php">Marketing
                                                    Collaterals</a></li>
                                            <li class="menu-item"><a href="web-development.php">Web Design &
                                                    Development</a></li>
                                            <li class="menu-item"><a href="app-development.php">App Design &
                                                    Development</a></li>
                                            <li class="menu-item"><a href="illustrator-animation.php">2D & 3D
                                                    Illustration</a></li>
                                            <li class="menu-item"><a href="motion-graphics.php">Motion Graphics</a>
                                            </li>
                                            <li class="menu-item"><a href="creative-copywriting.php">Creative
                                                    Copywriting</a></li>
                                            <li class="menu-item"><a href="digital-marketing.php">Digital Marketing</a>
                                            </li>
                                            <li class="menu-item"><a href="seo-services.php">SEO</a></li>
                                            <li class="menu-item"><a href="social-media-marketing.php">Social Media
                                                    Marketing</a></li>
                                            <li class="menu-item"><a href="back-end-development.php">Back-End
                                                    Development</a></li>
                                            <li class="menu-item"><a href="website-management.php">Website
                                                    Management</a></li>
                                            <li class="menu-item"><a href="domain-registration.php">Domain
                                                    Registration</a></li> -->
                                        </ul>
                                    </li>



                                    <li class="menu-item"><a href="Contact-us.php">Contact Us</a></li>
                                   
                                  
                                </ul>
                                <div class="btn-style me-3 pt-3 pb-3 cursor transition">
                                <i class="fa-sharp fa-solid fa-cart-shopping">
                                    <span>0 Items</span>
                                </i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </header>


    <div class="mychat">
      <a href="https://wa.me/+923117782560">
      <img src="images/Chat.png" class="imgFluid" alt="">
      </a>  
    </div>

    
    <div class="login-popup d-none">
                <div class="box">
                    <div class="login-form">
                        <div class="close">
                            &times;
                        </div>
                        <h1>Get in touch</h1>

                        <form class=""  method="POST" id="quoteForm" autocomplete="off">
                            <div class="group-form">
                                <input type="text" name="quote[name]" placeholder="First Name" class="form-controls">
                                <input type="text" name="quote[name]" placeholder="Last Name" class="form-controls">
                            </div>
                            <div class="group-form">
                                <input type="email" name="quote[email]" placeholder="Email" class="form-controls">
                                <input type="number" name="quote[phone]" placeholder="Phone Number" class="form-controls">
                            </div>
                            <div class="group-form">
                                <textarea cols="30" rows="10" name="quote[message]" placeholder="Comment"
                                    class="form-controls"></textarea>
                            </div>
                            <div class="btn-style mt-4 cursor transition mx-auto">
                                <div class="btn-styleIcon">
                                    <img data-src="assets/images/arrow-icon.png" alt="image" class="imgFluid lazy">
                                </div>
                                <i class="chat-ion pt-3 pb-3 transition"></i>
                                <button type="submit" name="quote" class="btn btn-submit">Submit now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



