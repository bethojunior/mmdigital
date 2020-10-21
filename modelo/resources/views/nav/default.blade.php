<header class="center header-nav">
    Estética avançada | Dermatologia | Nutrologia
</header>
<nav class="nav-extended">
    <div class="nav-wrapper mobile-only">
        <a href="#" class="brand-logo ">
            <img class="col s12 " src="{{ asset('assets/images/logo/logo.png') }}">
        </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Contato</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">

            <li><div class="user-view">
                    <div class="background">
                        <img src="{{ asset('assets/images/middle_ground.jpg') }}">
                    </div>
                    <a href="#!user"><img class="circle" src="{{ asset('assets/images/dra.png') }}"></a>
                    <a href="#!name"><span class="white-text name">Dra Jessyka Martins</span></a>
                    <a href="mailto:jessyca.allves@gmail.com"><span class="white-text email">jessyca.allves@gmail.com</span></a>
                </div></li>
            <li><a href="/">Home</a></li>
            <li><div class="divider"></div></li>
            <li><a id="open-about">Quem somos</a></li>
            <li><a id="open-agenda">Nossa história</a></li>
            <li><a id="open-blog">Fale conosco</a></li>
        </ul>
    </div>
    <div class="nav-content" id="nav-slide">
        <ul class="tabs tabs-transparent center">
            <li class="tab"><a class="tab-navigation active" href="#home">Home</a></li>
            <li class="tab"><a class="tab-navigation" href="#pageAbout">Quem somos</a></li>
            <li class="tab zindex">
                <img src="{{ asset('assets/images/logo/logo.png') }}">
            </li>
            <li class="tab"><a class="tab-navigation" id="go-blog" href="#pageBlog">História</a></li>
            <li class="tab"><a class="tab-navigation" href="#pageAgenda">Fale conosco</a></li>
        </ul>
    </div>
</nav>
<div id="home" class="tab-pages">
    @include('nav.home')
</div>
<div id="pageAbout" class="tab-pages">
    @include('nav.about')
</div>
<div id="pageAgenda" class="tab-pages">
    @include('nav.agenda')
</div>
<div id="pageBlog" class="tab-pages">
    @include('nav.blog')
</div>
