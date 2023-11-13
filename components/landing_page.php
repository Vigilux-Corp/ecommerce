<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/ecommerce/components/main.css">
    <style>
        body{
            background-color: black;
            color: #ccc;
        }
        .body {
            background-color: black;
            color: #f1f1f1;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 0;
            font-family: Garamond, serif;
        }

        .content {
            display: flex;
            justify-content: space-between;
            padding-bottom: 2%;
            padding-top: 5%;
            width: 70%;
            list-style-type: none;
        }

        .content a {
            color: white;
            list-style-type: none;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin-top: 2%;
            margin-bottom: 20%;
            width: 60%;
        }

        .dropdown2 {
            position: relative;
            margin-right: 8%;
            margin-left: 1%;
            list-style-type: none;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: grey;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown2:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown2 span {
            padding: 13% 16%;
            cursor: pointer;
        }

        .dropdown2 span:hover {
            color: green;
            list-style-type: none;
        }

        .divider {
            border-left: 1px solid #ccc;
            height: 80%;
            margin: 0 8%;
        }

        .search-icon {
            border: .5px solid #ccc;
            border-radius: 50%;
            padding: 3px;
            cursor: pointer;
        }
        .copyright{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            color: grey;
        }
        .discover {
            list-style-type: none;
            color: #ccc;
        }
        /* .nav-icon{
            display: flex;
            justify-content: right;
            align-items: right;
            padding: 10px;
        } */

        .dropbtn {
            color: #ccc;
            cursor: pointer;
            width: 3%;
            padding: 5px;
        }

        .dropdown {
            margin-top: 3%;
            margin-left: 5%;
        }

        .dropdown-content1 {
            display: none;
            position: absolute;
            font-family: 'Courier New', monospace;
            background-color: black;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content1 a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content1 a:hover {color: green;}

        .show {display:block;}
        
        @media only screen and (max-width: 767px) {
            .search-bar {
                width: 95%;
                margin: 10% 5%;
            }
            .dropdown2 span {
                padding: 0 0;
                cursor: pointer;
            }
            .divider {
                border-left: 1px solid #ccc;
                height: 80%;
                margin: 0 1%;
            }
            .search-icon {
                border: .2px solid #ccc;
                border-radius: 50%;
                padding: 1px;
                cursor: pointer;
            }
            .content {
                padding-bottom: 2%;
                padding-top: 13%;
                width: 90%;
                margin: 0;
                }
        }
        
    </style>
</head>
<body>
    <div class="dropdown">
        <div class="dropbtn" onclick="myFunction()"><i class="bi bi-three-dots-vertical"></i></div>
        <div id="myDropdown" class="dropdown-content1">
            <a href="#"><i class="bi bi-door-open-fill"></i> signin</a>
            <a href="#"><i class="bi bi-bookmark-fill"></i> about</a>
        </div>
    </div>
    <div class="body">
        <div class="content">
            <span><a href="">Nirvana for Business</a></span>
            <img src="images/logo.png" width="30%" height="40%" alt="Logo">
            <span><a href="">Nirvana for Everyone</a></span>
    </div>

    <div class="search-bar">
        <div class="dropdown2">
            <span class="btn btn-link text-white">Services</span>
            <div class="dropdown-content">
                <a href="#" class="dropdown-item">Manicure</a>
                <a href="#" class="dropdown-item">Hair dressing</a>
                <a href="#" class="dropdown-item">Pedicure</a>
                <a href="#" class="dropdown-item">Berber shop</a>
            </div>
        </div>
        <div class="divider"></div>

        <div class="dropdown2">
            <span class="btn btn-link text-white">Products</span>
            <div class="dropdown-content">
                <a href="#" class="dropdown-item">Phone</a>
                <a href="#" class="dropdown-item">Laptops and Computers</a>
                <a href="#" class="dropdown-item">Clothes</a>
                <a href="#" class="dropdown-item">Shoes</a>
            </div>
        </div>
        <div class="divider"></div>

        <div class="dropdown2">
            <span class="btn btn-link text-white">Discover</span>
        </div>
        <div class="search-icon">&#128269;</div>
    </div>
    </div>

    <div class="copyright">
        <span>powered by @ vigiluxcorp.</span>
    </div>

    <script>
        function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content1");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            }
        }
        }
    </script>

</body>
</html>