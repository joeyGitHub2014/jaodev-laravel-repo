<nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">

    <a class="navbar-brand site-header__logo" href="/#"> <img src="/site-logo.png" alt="Joseph Orlando" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navsupport"
        aria-controls="navsupport" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navsupport">
        <div id="navbarNav">
            <ul class="navbar-nav ml-auto  ">
                <li class="nav-item">
                    <a class="nav-link" href="/#">PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/skills">SKILLS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/resume">RESUME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bannerAds">BANNER ADS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/animations">ANIMATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tech">Tech</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">about</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link site-header__cta" href="/codeEx">Code Ex.</a>
                    @if (Auth::check())
                        <div
                            style="position:relitive; width:5px; height:5px;background-color:limegreen;margin-top:1em;margin-left:5em">
                        </div>
                    @endif
                </li>
        </div>
        </ul>
    </div>
</nav>
