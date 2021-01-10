<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ximi Store</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- Logo --}}
    <link rel="icon" href="images/Ximi Store (New Logo).png" type="image/x-icon">
</head>

<body>
    <header class="main-header" data-aos="fade-out">
        <h1><span>Ximi</span> Store</h1>
        <p>We sell all gaming account ! </p>
        <small class="text-danger">We focused on Genshin Impact ! </small>
    </header>

    <main class="container">
        <section class="card" data-aos="flip-up">
            <img src="images/Diluc.png" alt="" />
            <div>
                <h3 class="text-danger">Diluc</h3>
                <p style="text-align:justify;">
                    Born into the affluent Ragnvindr Family, <span class="text-danger">Diluc</span> is the current owner
                    of the Dawn Winery and a
                    nobleman of high esteem in Mondstadt society. While a past incident caused <span
                        class="text-danger"> him </span> to split ways with
                    the Knights of Favonius, <span class="text-danger"> he </span> continues to protect Mondstadt in
                    <span class="text-danger"> his </span> own way.
                </p>
                <a href="#" class="btn btn-danger">More</a>
            </div>
        </section>

        <section class="card" data-aos="slide-left">
            <img src="images/Keqing.png" alt="" />
            <div>
                <h3 style='color: #6610f2;'>Keqing</h3>
                <p style="text-align:justify;">
                    <span style='color: #6610f2;'> Keqing </span> is the Yuheng of the Liyue Qixing. <span
                        style='color: #6610f2;'> She </span> is someone who seeks <span style='color: #6610f2;'> her
                    </span> own answers instead of idly
                    letting chaos run amok in Liyue. <span style='color: #6610f2;'> Keqing </span> chooses <span
                        style='color: #6610f2;'> her </span> own path with <span style='color: #6610f2;'> her </span>
                    own power and ability, instead
                    of letting the gods determine <span style='color: #6610f2;'> her </span> fate.
                </p>
                <a href="#" class="btn" style="background-color:#6610f2;">More</a>
            </div>
        </section>

        <section class="card" data-aos="slide-right">
            <img src="images/Albedo.png" alt="" />
            <div>
                <h3 style='color: #fd7e14;'>Albedo</h3>
                <p style="text-align:justify;">
                    The mysterious <span style='color: #fd7e14;'> Albedo </span> is the Chief Alchemist and Captain of
                    the Investigation Team of the Knights of
                    Favonius, with Sucrose as <span style='color: #fd7e14;'> his </span> assistant. <span
                        style='color: #fd7e14;'> He </span> holds an infinite desire to learn about the world of
                    Teyvat, carefully studying each and every object around <span style='color: #fd7e14;'> him </span>.
                </p>
                <a href="#" class="btn" style="background-color:#fd7e14;">More</a>
            </div>
        </section>

        <section class="card" data-aos="slide-left">
            <img src="images/Mona.png" alt="" />
            <div>
                <h3 style='color: #6f42c1;'>Mona</h3>
                <p style="text-align:justify;">
                    An astrologist of great skill and equally-great pride, <span style='color: #6f42c1;'> Mona </span>
                    has taken up residence in Mondstadt to
                    avoid incurring the wrath of <span style='color: #6f42c1;'> her </span> master after unwittingly
                    reading the latter's diary.
                </p>
                <a href="#" class="btn" style="background-color:#6f42c1;">More</a>
            </div>
        </section>

        <section class="card" data-aos="slide-right">
            <img src="images/Venti.png" alt="" />
            <div>
                <h3 class="text-success">Venti</h3>
                <p style="text-align:justify;">
                    <span class="text-success"> Venti </span> is the wine-loving bard in Mondstadt who will share you
                    <span class="text-success"> his </span> stories and maybe even sing for
                    you, if you buy <span class="text-success"> him </span> some wine. It appears there is more than
                    meets the eye to the half-witted bard.
                </p>
                <a href="#" class="btn btn-success">More</a>
            </div>
        </section>
    </main>
    <p class="text-secondary" style="text-align:center;">Author : M. Faiz Triputra</p>
    {{--

    Source :
    -> https://github.com/michalsnik/aos
    -> https://www.youtube.com/watch?v=ptfUwPJbGlQ
    -> https://codepen.io/bradtraversy/pen/bGbREWg
    -> https://genshin-impact.fandom.com/

    All Copyrights Reserved. Thanks !

    --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: "750"
        });

    </script>
</body>

</html>
