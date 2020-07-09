<div class="col-md-9 col-sm-12">
    <div class="mainmenu">
        <nav>

            <ul id="navigation">
            <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">Inicio</a>
                     {{-- <ul>
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index-2.html">Home 2</a></li>
                        <li><a href="index-3.html">Home 3</a></li>

                    </ul> --}}
                </li>
                <li class="{{ setActive('about') }}">
                    <a href="{{route('about')}}">
                    Nosotros
                    </a>
                </li>
                <li class="{{ setActive('service') }}">
                    <a href="{{route('service')}}">Servicios</a>
                </li>
                {{-- <li>
                    <a href="portfolio.html">projects</a>
                </li> --}}
                {{-- <li>
                    <a href="blog-grid.html">blog</a>
                    <ul>
                        <li><a href="blog-grid.html">Blog Grid View</a></li>
                        <li><a href="blog-left-sidebar.html">blog Left sidebar</a></li>
                         <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                        <li><a href="blog-details.html">blog Details</a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="404-page.html">pages</a>
                    <ul>
                        <li><a href="404-page.html">404 page</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="pricing-table.html">pricing table</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="team.html">team Page</a></li>
                        <li><a href="single-team-page.html">Single team Page</a></li>
                    </ul>
                </li> --}}
                <li class="{{ setActive('contact') }}"><a href="{{route('contact')}}">Contacto</a></li>
            </ul>
        </nav>
    </div>
</div>