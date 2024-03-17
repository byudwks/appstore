<!doctype html>
<html lang="en">
<head>

    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <!--========== CSS ==========-->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/detail.css">

    <title>AppStore</title>
</head>

<body>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo">AppStore</a>

            
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <div class="search-box">
                            <button class="btn-search"><i class='bx bx-search-alt-2 bx-sm ' ></i></button>
                            <input type="text" class="input-search" placeholder="Type to Search...">
                        </div>
                    </li>
                    <li class="nav__item"><a href="#home" class="nav__link active-link"><i class='bx bxl-windows  bx-sm' ></i>Windows</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link"><i class='bx bxl-apple bx-sm'></i>Mac Os</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link"><i class='bx bxl-android bx-sm' ></i>Android</a></li>
                    <li class="nav__link"><i class='bx bx-moon bx-sm change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-menu bx-sm"></i>
            </div>
        </nav>
    </header>

    @yield('container')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
