<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<header class="header">
    <div id="logo">
        <a href="{{ url('/') }}">
            <h1>Panggaldaw Xpress</h1>
        </a>           
    </div>
    
    <nav>
        <div class="mainframe-sidenav">
            <ul>
                <li>
                    <a href="{{ url('/') }}" class="main-header">Home</a>
                </li>
                <li>
                    <a href="" class="main-header">Service</a>
                </li>
                <li>
                    <a href="" class="main-header">Menu</a>
                </li>
                <li>
                    <a href="" class="main-header">Shops</a>
                </li>
            </ul>
        </div>
    </nav>

     <!-- Search Bar -->
     <form class="seach-bar" action="/action_page.php">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>    
    
    <div class="hamburger" onclick="showSidebar()">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

<script src="resources/js/app.js"></script>