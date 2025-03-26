<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeiru Flower Shop</title>
    <link rel="stylesheet" href="../../css/app.css">
    <link rel="stylesheet" href="../../fonts/all.css">
    <script src="script.js" ></script>
</head>

<body>
    <!--Header Section-->
    <header id="home">
       <div id="contDiv">
        <div id="divLogo">
            <span><img id="imgBrandLogo" src="../../images/logoNewFS.png" alt="logo" ></span>
        </div>

        <div id="divNav">

            <div id="navHidden">
                <span class="classNav"></span>
                    <h4 class="h4Header" onclick="goHome()">HOME</h4>
                </span>

                <span class="classNav">
                    <h4 class="h4Header" onclick="goAboutUs()">ABOUT US</h4>
                </span>
    
                <span class="classNav">
                    <h4 class="h4Header" onclick="goOccassions()">OCASSIONS</h4>
                </span>
    
                <span class="classNav">
                    <h4 class="h4Header" onclick="goFlowerSection()">FLOWERS</h4>
                </span>        
            </div>

            <span class="classNav">
                <i class="fas fa-shopping-cart"></i>
            </span>

            <span id="bars" onclick="switchMenu()">
                <i id="menuBtn" class="fas fa-bars"></i>
            </span>
        </div>
       </div>
    </header>

    <!--Banner Section-->

    <div id="divBanner">
        <div id="contBannerText">
            <h3>ZEIRU</h3><br>
                <h3>FLOWER SHOP</h3>
                <p id="bannerParagraph">Flower arrangement to mark a fresh start and bring renewed joy to life’s moments.</p>
                <button id="shopNowBtn">SHOP NOW</button>
        </div>
    </div>

    <!--About Us Section-->

    <section id="aboutUsSection">
        <h1>CRAFTING FRESH STARTS WITH EVERY FLOWER</h1>
        <p >Welcome to Zeiru, where every floral arrangement is more than just a bouquet—it's an opportunity to embrace new beginnings. At Zeiru, we believe that each flower has the power to mark a fresh start and bring renewed joy to life’s moments. Our skilled florists carefully craft every arrangement with passion and precision, ensuring that each bloom symbolizes a new chapter and a touch of elegance.
    </section>

    <!--Ocassion Section-->

    <section id="occassionSection">
        <h1>PERFECT BOUQUET FOR SPECIAL MOMENTS</h1>
        <div id="contOccasion">
            <div class="itemOccassion">
                <img class="imgOccassion" src="../../images/weddingBouquet.jpeg" alt="">
                <h5 class="occassionCategory">WEDDING</h5>
            </div>

            <div class="itemOccassion">
                <img class="imgOccassion" src="../../images/birthday.jpg" alt="">
                <h5 class="occassionCategory">BIRTHDAY</h5>
            </div>

            <div class="itemOccassion">
                <img class="imgOccassion" src="../../images/aniverssary.jpg" alt="">
                <h5 class="occassionCategory">ANIVERSSARY</h5>
            </div>

            <div class="itemOccassion">
                <img class="imgOccassion" src="../../images/weddingBouquet.jpeg" alt="">
                <h5 class="occassionCategory">SYMPATHY</h5>
            </div>

        </div>
    </section>

    <!--Flower Section-->

    <section id="flowerSection">
        <div id="contFS">

            <div id="contBgFlower">
                <p id="flowerParagraph">
                    Browse  our wide selection of fresh, vibrant flowers available by the piece or in bundles of a dozens.
                    Whether you're looking for a single elegant stem or a beautiful bouquet, we have the perfect 
                    blooms to brighten any occassion. Customize your order to suit your needs, from intimate gesture to 
                    grand floral displays.
                </p>
                <button id="selectYourBlooms">Select Your Blooms</button>
            </div>
        
        </div>
    </section>

    <!--Assurance Section-->

    <div id="divAssurance">
        <h1 id="hAssurance">WHY CHOOSE OUR SERVICE?</h1>
        <div id="contAssurance">
            <div class="itemAssurance">
                <h1 class="hIcon">
                    <i class="fas fa-crown"></i>
                </h1>
                <h5 class="assuranceItemHeading">Premium Quality Blooms</h5>
                <p class="assuranceParagraph">At Zeiru Flower Shop, we source only the freshest and 
                    highest-quality flower to ensure every bouquet is vibrant, long-lasting, and 
                    makes a lasting impression.
                </p>
            </div>

            <div class="itemAssurance">
                <h1 class="hIcon">
                    <i class="fas fa-palette"></i>
                </h1>
                <h5 class="assuranceItemHeading">Unique and Custom Design</h5>
                <p class="assuranceParagraph">We belive in creating floral arrangement as unique as our 
                    customer. Our expert florists work with you to craft stunning, personalized
                    designs tailored to your preferences.
                </p>
            </div>

            <div class="itemAssurance">
                <h1 class="hIcon">
                    <i class="fas fa-tags"></i>
                </h1>
                <h5 class="assuranceItemHeading">Affordable Flower Arrangements</h5>
                <p class="assuranceParagraph">Beautiful flowers shouldn't breal the bank. Zeiru Flower 
                    Shopoffers exquisite arrangements at competative prices, providing luxury without 
                compromising your budget.</p>
            </div>

            <div class="itemAssurance">
                <h1 class="hIcon">
                    <i class="fas fa-truck"></i>
                </h1>
                <h5 class="assuranceItemHeading">Reliable and Timely Service</h5>
                <p class="assuranceParagraph">We understand the importantce of timing in every occasion. That's
                    why we are committed to delivering your flowers promptly, ensuring
                    your special moments are celebrated right on time.
                </p>
            </div>
        </div>
    </div>

    <!--Footer Section-->

    <footer>
        <div id="disclaimer">
            <p id="disclaimerParagraph">
                This website is created for educational purpose only and is not
                intended for commercial use.
            </p>
        </div>
        <div id="displaySocialMedia">
            <h1 class="hIcon"><i class="fab fa-facebook"></i></h1>
            <h1 class="hIcon"><i class="fab fa-instagram"></i></h1>
            <h1 class="hIcon"><i class="fas fa-envelope"></i></h1>
            
        </div>
    </footer>

    <script>
        function goHome()
        {
            window.location.href="#home"
        }

        function goAboutUs()
        {
            window.location.href="#aboutUsSection"
        }

        function goOccassions()
        {
            window.location.href="#occassionSection"
        }

        function goFlowerSection()
        {
            window.location.href="#flowerSection"
        }
    </script>

</body>
</html>