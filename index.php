<?php

$showcase = "https://raw.githubusercontent.com/bradtraversy/bootstrap-bootcamp-website/7656406f5e7b5cb1ac5879df8fd93f1182e215bf/img/showcase.svg";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Learn Bootstrap5</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container">
            <a class="navbar-brand" href="#">OVICKO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#learn">What To learn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#questions">Questions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#instructors">Your Teacher</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="bg-dark text-light p-5 text-center text-sm-start" id="section1">
        <div class="container">
            <div class="d-sm-flex aligh-items-center justify-content-betweens">
                <div>
                    <h1>Learn to be <span class="text-warning">Great Developer</span></h1>
                    <p class="lead my-4">Navbars are responsive by default, but you can easily modify
                        them to change that. Responsive behavior depends on our Collapse JavaScript plugin.</p>
                    <button type="button" class="btn btn-primary btn-lg">Enroll Now!</button>

                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="<?= $showcase; ?>">
            </div>
        </div>

    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>