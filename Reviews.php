<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef 4 U Reviews Carousel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background: linear-gradient(to right, #1d2b64,#f8cdda); */
            color: white;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .carousel {
            position: relative;
            max-width: 600px;
            margin: auto;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            /* background-color: rgba(255, 255, 255, 0.9); */
            background: linear-gradient(to right, #1d2b64,#f8cdda);
            color: #333;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-item {
            min-width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .carousel-item h3 {
            margin-top: 10px;
            color: #333;
        }

        .rating {
            color: #f39c12; /* Gold color for stars */
            margin: 10px 0;
        }

        .carousel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 50%;
            color: #333;
        }

        .carousel-control.prev {
            left: 10px;
        }

        .carousel-control.next {
            right: 10px;
        }
    </style>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>
<body>
    <h1>Chef 4 U Reviews</h1>
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <p>"Chef 4 U has transformed my cooking experience! The chefs are amazing!"</p>
                <div class="rating">★★★★★</div>
                <h3>- Sarah J.</h3>
            </div>
            <div class="carousel-item">
                <p>"I love how easy it is to book a chef. Highly recommend Chef 4 U!"</p>
                <div class="rating">★★★★☆</div>
                <h3>- Mike T.</h3>
            </div>
            <div class="carousel-item">
                <p>"Fantastic service! The meals were delicious, and the chefs were professional."</p>
                <div class="rating">★★★★★</div>
                <h3>- Emily R.</h3>
            </div>
        </div>
        <button class="carousel-control prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="carousel-control next" onclick="moveSlide(1)">&#10095;</button>
    </div>

    <script>
        let currentSlide = 0;

        function moveSlide(direction) {
            const slides = document.querySelectorAll('.carousel-item');
            const totalSlides = slides.length;

            // Update current slide index
            currentSlide = (currentSlide + direction + totalSlides) % totalSlides;

            // Update carousel position
            const carouselInner = document.querySelector('.carousel-inner');
            carouselInner.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        // Optional: Auto-slide every 5 seconds
        setInterval(() => {
            moveSlide(1);
        }, 5000);
    </script>
</body>
</html>
