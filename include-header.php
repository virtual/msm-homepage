<?php include('include-topnav.php');?>
<header class="contain-to-grid">
   <div class="row">
      <div class="medium-4 columns" id="header-logo">
         <a href="/" title="Morehouse School of Medicine">
            <img src="./_resources-new/images/full_logo2.png" alt="Morehouse School of Medicine"> 
         </a>
      </div>
      <div class="medium-8 columns" id="header-nav">
         <nav class="top-bar" data-topbar="data-topbar" role="navigation">
            <ul class="title-area">
               <li class="name"> </li>
               <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
               <li class="toggle-topbar menu-icon">
                  <a href="#">
                     <span>Menu</span>
                  </a>
               </li>
            </ul>
            <section class="top-bar-section">
               <ul class="left" id="quicklinks">
                  <li>
                     <a href="/Current_Students/index.php">Students   |</a>
                  </li>
                  <li>
                     <a href="/Education/GME/index.php">Residency   |</a>
                  </li>
                  <li>
                     <a href="/Alumni/index.php">Alumni   |</a>
                  </li>
                  <li>
                     <a href="/about_us/FacultyDirectory/index.php">Faculty   |</a>
                  </li>
                  <li>
                     <a href="http://morehousehealthcare.com/" target="_blank">Morehouse Healthcare</a>
                  </li>
               </ul>
               <div class="right" id="search">
                  <form action="http://ousearch.omniupdate.com/texis/search/">
                     <label class="sr-only" for="Search">Search</label>
                     <input type="search" placeholder="Search the site" class="search_box" name="query" id="Search"></input>
                     <input type="hidden" name="pr" value="morehouse"></input>
                     <input type="submit" class="searchbutton" value="Go"></input>
                     <i class="fa fa-search"></i>
                  </form>
               </div>
            </section>
         </nav>
      </div>
   </div>
</header>