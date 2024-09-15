<!-- resources/views/dashboard.blade.php 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/png" href="{{ asset('logo3.png') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ompoc" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <title>Port</title>
        <style>

            html {
                    scroll-behavior: smooth;
                }

            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                text-decoration: none;
                background: transparent;
                font-family: 'Poppins', sans-serif;
            }
            body {
                background: rgb(30, 30, 30);
                color: white;
                overflow: hidden;
                overflow-y: scroll;
            }
            @media screen and (max-width: 840px){
                .bg{
                    right: -20vw;
                }
                
            }
        </style>
    </head>
    <body>
      Include Navbar 
      @include('navbar')

      @include('intro')

      @include('skill')

      @include('portfolio)

      @include('work')

      @include('contact')

      @include('footer')
    </body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/png" href="{{ asset('logo3.png') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <title>Portfolio</title>
        <style>
            html {
                scroll-behavior: smooth;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                text-decoration: none;
                font-family: 'Poppins', sans-serif;
            }
            body {
                background: rgb(30, 30, 30);
                color: white;
            }
        </style>
    </head>
    <body>
        <!-- Include Navbar -->
        @include('navbar')

        <!-- Section IDs for smooth scrolling -->
        <section id="home">
            @include('intro')
        </section>

        <section id="about">
            @include('skill')
        </section>

        <section id="portfolio">
            @include('work')
        </section>

        <section id="contact">
            @include('contact')
        </section>

        @include('footer')
    </body>
</html>
