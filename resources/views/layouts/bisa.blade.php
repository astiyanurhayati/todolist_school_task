@if(Auth::check())
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!-- <title> Responsive Drop Down Navigation Menu | CodingLab </title>-->
  <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">MyTodo</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">MyTodo</span>
          <i class='bx bx-x'></i>
        </div>
        <ul class="links">
          <li><a href="{{ url('/modal') }}">HOME</a></li>
          <li>
            <a href="#">Dropdown</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu" style="z-index: 50">
              <li><a href="/todo/">My Todolist</a></li>
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
		  
        </ul>
      </div>
  
    </div>
  </nav>
<script>

let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");



let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function () {
  navLinks.style.left = "0";
};
menuCloseBtn.onclick = function () {
  navLinks.style.left = "-100%";
};

// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function () {
  navLinks.classList.toggle("show1");
};
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function () {
  navLinks.classList.toggle("show2");
};
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function () {
  navLinks.classList.toggle("show3");
};

</script>
</body>

</html>
@endif