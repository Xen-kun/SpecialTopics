<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
     <form class="search-bar" action="/action_page.php">
        
        <button type="submit"></button>
        <input type="text" placeholder="Search" name="search2">
      </form>
      
          
    
    <div class="hamburger" onclick="showSidebar()">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

<script src="resources/js/app.js"></script>