<header class="header">
    <div id="logo">
        <a href="{{ url('/') }}">
            <h1>Panggaldaw Xpres</h1>
        </a>           
    </div>
    {{-- class="navigation" --}}
    <nav>
        <div class="mainframe-sidenav">
            <ul>
                <li>
                    <a href="{{ url('/') }}" class="main-header">Home</a>
                </li>
                <li>
                    <a href="#" class="main-header">Services <span class="icon">›</span></a>
                </li>
                <li>
                    <a href="#" class="main-header">Menu <span class="icon">›</span></a>
                </li>
                <li>
                    <a href="/careers" class="main-header">Careers <span class="icon"></span></a>
                </li>
                <li>
                    <a href="/contact" class="main-header">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="hamburger" onclick="showSidebar()">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

<script src="resources/js/app.js"></script>