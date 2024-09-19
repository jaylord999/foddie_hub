
    <style>
        /* Reset and general styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Header container */
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        /* Logo */
        .logo img {
            max-width: 300px;
            height: auto;
        }

        /* Navigation menu */
        .nav-menu ul {
            list-style: none;
            display: flex;
        }

        .nav-menu li {
            margin-right: 20px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
        }

        /* Right section (search, CTA, social) */
        .header-right {
            display: flex;
            align-items: center;
        }

        /* Search bar */
        .search-bar {
            margin-right: 15px;
        }

        .search-bar input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-bar button {
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* CTA button */
        .cta-button a {
            background-color: #28a745;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        /* Social media icons */
        .social-media-icons a {
            margin-left: 10px;
        }

        .social-media-icons img {
            width: 30px;
            height: 30px;
        }

        /* Hamburger menu */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: #333;
            margin: 2px 0;
        }

        /* Responsive styles */
        @media screen and (max-width: 1024px) {
            .header-right {
                display: none;
            }

            .nav-menu {
                display: none;
            }

            .hamburger {
                display: flex;
            }

            .nav-menu.active {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background-color: #fff;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }

            .nav-menu.active ul {
                flex-direction: column;
            }

            .nav-menu.active li {
                margin: 10px 0;
            }
        }

        @media screen and (max-width: 768px) {
            .logo img {
                max-width: 120px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="img/logo2.png" alt="Foodie Hub Logo">
            </div>

            <nav class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Recipes</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

            <div class="header-right">
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <button type="submit">Search</button>
                </div>

                <div class="cta-button">
                    <a href="#">Subscribe</a>
                </div>

                <div class="social-media-icons">
                    <a href="https://facebook.com" target="_blank"><img src="img/fb.png" alt="Facebook"></a>
                    <a href="https://twitter.com" target="_blank"><img src="img/twitter.png" alt="Twitter"></a>
                    <a href="https://instagram.com" target="_blank"><img src="img/insta.png" alt="Instagram"></a>
                </div>
            </div>

            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const hamburger = document.getElementById('hamburger');
            const navMenu = document.getElementById('navMenu');

            hamburger.addEventListener('click', function () {
                navMenu.classList.toggle('active');
            });
        });
    </script>
