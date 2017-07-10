<ul id="accountMenu" class="dropdown-content">
    <li class="{{ Request::is('posts') ? "active" : "" }}"><a href="/posts">Posts</a></li>
    <li class="divider"></li>
    <li><a href="#!">Logout</a></li>
</ul>
<nav class="indigo lighten-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo"><img class="responsive-img" style="height:64px" src="/solipsists-logo-400px.png"></img>Ayy its a logo</a>
        <ul class="right hide-on-med-and-down">
            <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>            
            <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
            <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
            <li>
                <a class="dropdown-button" href="#!" data-activates="accountMenu">Account<i class="material-icons right">arrow_drop_down</i></a>
            </li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
            <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
            <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>            
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>