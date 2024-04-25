<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Blend - Design Your Merchandise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
    while($row=mysqli_fetch_array($query)){
        $userName = $row['firstName'].' '.$row['lastName'];
    }
}
?>

<!-- Navigation -->
<nav class="navbar">
    <div class="container">
        <h1>Custom Blend</h1>
        <ul class="navlist">
            <li><a href="#about">About</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>



<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h2>Create Your Own Custom Merchandise</h2>
        <p>Design personalized products including t-shirts, hats, mugs, and more with ease!</p>
        <a href="customization.html" class="btn btn-primary">Get Started</a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section">
    <div class="container">
        <h2>About Custom Blend</h2>
        <p>In today's market, individuals and businesses seeking to create custom merchandise often face significant challenges navigating the complexities of design, production, and distribution. From finding the right materials to ensuring quality craftsmanship, and from managing inventory to reaching the right audience, the process can be daunting. At Custom Blend, we understand these challenges and aim to provide a seamless solution. Our platform offers intuitive tools, a diverse selection of products, and expert guidance every step of the way, empowering you to bring your unique vision to life effortlessly. Whether you're a small-scale entrepreneur or a large corporation, we're here to streamline the customization process, turning your ideas into tangible, market-ready products that stand out in a crowded marketplace. Let us help you unlock the potential of your creativity and turn your custom merchandise dreams into reality.</p>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="section">
    <div class="container">
        <h2>Our Products</h2>
        <div class="product-list">
            <div class="product">
                <img src="https://5.imimg.com/data5/SELLER/Default/2021/5/QF/HI/HN/18225951/classic-krishna-ji-portrait-print-t-shirt.jpg" alt="Product 1">
            </div>
            <div class="product">
                <img src="https://muslimlane.com/cdn/shop/products/2_1_24ea5c3a-04fd-4abe-bee6-e04be5ea0b1e.png?v=1661436012" alt="Product 2">
            </div>
            <div class="product">
                <img src="https://m.media-amazon.com/images/I/51azRM4b5UL._AC_UY1100_.jpg" alt="Product 3">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Have questions or need assistance? Reach out to our team!</p>
        <form>
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
            <textarea placeholder="Your Message"></textarea>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>
<!-- Content -->
<div class="content">
    <div class="container">
        
       <button> <a href="logout.php" style="display: block; text-align: center;">Logout</a></button>
    </div>
</div>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Custom Blend. All rights reserved.</p>
    </div>
    <ul class="social-links">
        <li><a href="https://www.facebook.com/profile.php?id=100069383474015">Facebook</a></li>
        <li><a href="https://twitter.com/rajputmanav540">Twitter</a></li>
        <li><a href="https://www.linkedin.com/in/manav-rajput-029062242/">LinkedIn</a></li>
    </ul>
</footer>


</body>
</html>
