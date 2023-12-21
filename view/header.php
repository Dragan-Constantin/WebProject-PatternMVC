<script>
        function menuButton() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</head>
<body>
    <div class="topnav" id="myTopnav">
        <div></div>
        <a href="/contact">Contact</a>
        <a href="/products">About</a>
        <a href="/home">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="menuButton()"><i class="fa fa-bars"></i></a>
    </div>
