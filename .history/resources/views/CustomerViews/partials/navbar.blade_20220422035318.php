<!--------------------------------------
NAVBAR
--------------------------------------->
<nav class="topnav navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
        <a class="navbar-brand" href="./"><strong>Mega Flash Info</strong></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarColor02" style="">
            <ul class="navbar-nav mr-auto d-flex align-items-center">
                <li class="nav-item">
                <a class="nav-link" href={{ route('CategoryPosts.show', 'all') }}>Flash <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('CategoryPosts.show', 'sport') }}">Sport</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('CategoryPosts.show', 'technologie') }}">Technologie</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('CategoryPosts.show', 'politique') }}">Politique</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('CategoryPosts.show', 'santé') }}">Santé</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('CategoryPosts.show', 'autre') }}">Autres</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item highlight">
                <a class="nav-link" href="https://www.wowthemes.net/mundana-free-html-bootstrap-template/">Faire un don</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <!-- End Navbar -->