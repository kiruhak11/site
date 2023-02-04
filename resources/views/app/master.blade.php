<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>kovalenko-k</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
</head>
<body>

<section id="title" class="parallax-window ignore" data-parallax="scroll" data-image-src="img/sh.jpg"></section>
<!-- <img id="title" class="ignore" src="img/sh.jpg" alt=""> -->
<main>
    <div class="container" >
        @component('components.header')
        @endcomponent
        @section('content')
        @show
    </div>
</main>
</body>
</html>
