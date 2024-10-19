<header class="header">
    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="/images/mL Logo.png" alt="moodLearning Logo">
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
                    <a href="#" class="main-header">About <span class="icon">›</span></a>
                    <ul class="submenu">
                        <li><a href="/about">About MoodLearning</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="main-header">Services <span class="icon">›</span></a>
                    <ul class="submenu">
                        <li><a href="{{ route('homepage', ['#section2']) }}">eLearning</a></li>
                        <li><a href="{{ url('https://my.etraining.ph/') }}" target="#">Courses, Webinars</a></li>
                        <li><a href="/services">Why mL eLearning</a></li>
                        <li><a href="{{ url('https://serbizhub.com/') }}" target="#">Serbizhub</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="main-header">Resources <span class="icon">›</span></a>
                    <ul class="submenu">
                        <li><a href="{{ url('https://blog.moodlearning.com/') }}" target="#">Blog</a></li>
                        <li><a href="{{ url('https://doku.moodlearning.com/') }}" target="#">Wiki</a></li>
                    </ul>
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