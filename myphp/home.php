<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images\TechHive_favicon.png">
    <script src="index.js" defer></script>
    <title>TechHive's Homepage</title>
</head>

<body>
    <style>
        #signin_btn {
            padding: 12px 25px;
            margin-right: 0px;
        }
    </style>

    <!-- navigation bar -->
    <?php include("navbar.php"); ?>

    <main>
        <!--banner-->
        <div class="banner">
            <div class="banner_text">
                <p style="font-weight: 900;">TechHive</p>
                <p style="font-weight: lighter;">We simplify<br>your tech life</p>
            </div>
            <button id="shopbutton">Shop All</button>
        </div>

        <!-- categories -->
        <p class="gallery-title" id="shopall">Shop by categories</p>
        <div class="container gallery">
            <a href="desktop.php">
                <div class="image desktop">
                    <button>Desktop</button>
                </div>
            </a>
            <a href="laptop.php">
                <div class="image laptop">
                    <button>Laptop</button>
                </div>
            </a>
            <a href="phone.php">
                <div class="image phone">
                    <button>Phone</button>
                </div>
            </a>
            <a href="tablet.php">
                <div class="image tablet">
                    <button>Tablet</button>
                </div>
            </a>
        </div>

        <!--Products Advertisement-->
        <p class="gallery-title advertise">Discover the Power of Balance: Computers & Tablets for Work, Fun, and All That's In Between</p>
        <p class="advertise">Computers have become an indispensable aspect of our daily lives, be it shopping via your laptop, accomplishing work tasks on a desktop,
            or enjoying amusing cat videos on your tablet (because let's face it, we all need more lighthearted feline fun).
            When it comes to snagging the best deals on computing devices in Canada, TechHive is usually the go-to choice for most people,
            and it's easy to see why. With our vast array of computers and accessories, coupled with our incredible sales and promotions,
            TechHive is the perfect one-stop-shop for your next digital gadget.</p>
        <p class="gallery-title advertise">Unlock Your Potential and Embrace Efficiency with a Laptop</p>
        <p class="advertise">
            A laptop is an indispensable tool for enhancing your digital life and maximizing productivity. With today's powerful laptops,
            you can effortlessly tackle any task, whether it's intensive gaming, video editing, or simply browsing the web and organizing your photo collection.
            The beauty of laptops lies in their portability, allowing you the freedom to use them wherever you desire. Whether you're comfortably lounging on the couch,
            enjoying your favorite TV shows, sipping a delicious beverage at a coffee shop while completing an important report, or sharing incredible travel memories with friends,
            a laptop provides the flexibility to meet your needs.
        </p>

        <p class="gallery-title advertise">Experience Seamless Work and Entertainment with a Tablet</p>
        <p class="advertise">
            The perfect blend of form and functionality, tablets offer a delightful user experience. Compact enough to fit in your bag, yet boasting a generous screen size,
            tablets are ideal for enjoying videos, reading eBooks or articles, and more. Some tablet models even come with laptop-grade hardware and operating systems,
            such as Windows 10. With the ability to connect a keyboard, mouse, or stylus, you can effortlessly transform your tablet into a fully-functional computer.
            This versatility allows you to play, work, and create on the go, making it an invaluable companion in all your endeavors.
        </p>

        <p class="gallery-title advertise">Unleash Maximum Power and Productivity with a Desktop Computer</p>
        <p class="advertise">
            When it comes to robust performance and dedicated workstations, a desktop computer reigns supreme. Designed for those who prefer working at a desk or require
            heavy-duty capabilities, desktops offer unparalleled power and customization options. With an affordable price tag and upgradeable components, desktops provide
            an investment that can adapt to your evolving needs. Whether you're a passionate gamer seeking top-notch graphics capabilities or someone in need of a compact
            yet customizable solution, there's a desktop computer perfectly suited to your requirements.
        </p>


    </main>
    <footer>
        <div>
            Coded by Team A1 with ❤️ All rights reserved.
        </div>
    </footer>
</body>


</script>

</html>