<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <div class="stripes">
            <div class="line-one"></div>
            <div class="line-two"></div>
        </div>

        <nav>
            <div class="logo">
                <img src = "images/Logo.png">
            </div>
            <ul>
                <li><a href="">Collection</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">Offers</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <div class="search">
                <i class="fa fa-search"></i>
            </div>
            <div class="menu">
                <i class="fa fa-bars"></i>
            </div>
        </nav>

        <div class="img">
            <img src="images/12.png">
        </div>

        <div class="title">
            <p>We Collaberate </p>
            <span>CONNECT.</span>
        </div>

        <div class="btn">
            <a href="loginpagefinal.php">Login</a>
        </div>

        <div class="media">
            <ul>
                <li><i class="fa fa-facebook"></i></li>
                <li><i class="fa fa-instagram"></i></li>
                <li><i class="fa fa-twitter"></i></li>
            </ul>
        </div>

    </div>
    <script>
        TweenMax.from(".logo", 1, {
            opacity: 0,
            x: -20,
            ease: Expo.easeInOut
        })

        TweenMax.staggerFrom("nav ul li", 1, {
            opacity: 0,
            x: -20,
            ease: Power3.easeInOut
        }, 0.08)

        TweenMax.from(".search", 1, {
            opacity: 0,
            delay: .5,
            x: -20,
            ease: Expo.easeInOut
        })

        TweenMax.from(".menu", 1, {
            opacity: 0,
            delay: .6,
            x: -20,
            ease: Expo.easeInOut
        })

        TweenMax.from(".title", 1, {
            opacity: 0,
            delay: 1,
            y: 20,
            ease: Expo.easeInOut
        })

        TweenMax.from(".btn", 1, {
            opacity: 0,
            delay: 1.6,
            y: 20,
            ease: Expo.easeInOut
        })

        TweenMax.from(".line-one", 1, {
            opacity: 0,
            delay: 2,
            y: -800,
            ease: Expo.easeInOut
        })
        TweenMax.from(".line-two", 1, {
            opacity: 0,
            delay: 2.5,
            y: -800,
            ease: Expo.easeInOut
        })

        TweenMax.from(".img", 2, {
            opacity: 0,
            delay: 2.9,
            y: -800,
            ease: Expo.easeInOut
        })

        TweenMax.from(".year", 1, {
            opacity: 0,
            delay: 1.4,
            y: -20,
            ease: Expo.easeInOut
        })

        TweenMax.staggerFrom(".media ul li", 2, {
            opacity: 0,
            delay: 3.2,
            y: 40,
            ease: Expo.easeInOut
        }, 0.2)
    </script>
</body>

</html>