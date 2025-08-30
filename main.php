<?php
if(!empty($_SESSION['username']))
{

}
else 
{
?>
<script>
    window.location.href="/";
</script>
<?php 
}
?>

<div data-active-color="white" data-background-color="purple-love" data-image="img/bk_bk.jpg" class="app-sidebar"
>
    
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="dashboard.php" class="logo-text float-left">
              <div class="logo-img"><img src="<?php echo $fset['logo'];?>" style="width:100%;"/></div><span class="text align-middle" style="font-size: 25px;
    padding: 7px;"></span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
  <li><a href="dashboard.php"><i class="ft-airplay"></i><span  data-i18n="" class="menu-title">Main Dashboard</span></a>
              </li>
              
<li class="has-sub nav-item"><a href="#"><i class="ft-list"></i><span data-i18n="" class="menu-title">Servers</span></a>
                <ul class="menu-content">
                  <li><a href="add_server.php" class="menu-item active">Add Server</a>
                  </li>
                  <li><a href="manage_servers.php" class="menu-item">Server List</a>
                  </li>
                 
                    </ul>
                  
                
              </li>
        
        <li class="has-sub nav-item"><a href="#"><i class="ft-list"></i><span data-i18n="" class="menu-title">ADs</span></a>
                <ul class="menu-content">
                  <li><a href="manage_admob.php" class="menu-item active">Manage Ad Ids</a>
                  </li>
                  <li><a href="manage_ad_network.php" class="menu-item">Manage Ad Network</a>
                  </li>
                 
                    </ul>
                  
                
              </li>
      
              

              
           
        
        
     
              
        
       
			  
			  
			  
			 
    
 
              
              
   
              
              
             
       
              <li><a href="feed.php"><i class="ft-star"></i><span data-i18n="" class="menu-title"> Feedback</span></a>
              </li>
             
                
             
              
			   
        <li><a href="setting.php"><i class="ft-settings"></i><span data-i18n="" class="menu-title">Settings</span></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
      </div>
      <!-- / main menu-->
      <script src="app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

      <!-- Navbar (Header) Starts-->
      <nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a aria-controls="navbarSupportedContent" href="javascript:;" class="open-navbar-container black"><i class="ft-more-vertical"></i></a></span>
            
          </div>
          <div class="navbar-container">
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item mr-2 d-none d-lg-block"><a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen"><i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                    <p class="d-none">fullscreen</p></a></li>

               
                <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-user font-medium-3 blue-grey darken-4"></i>
                    <p class="d-none">User Settings</p></a>
                  <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu text-left dropdown-menu-right"><a href="logout.php" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
                  </div>
                </li>
              
              </ul>
            </div>
          </div>
        </div>
      </nav>