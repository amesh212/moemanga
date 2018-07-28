<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/AdminLTE-2.4.4/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>

        <div class="pull-left info">
          <p><?php
                if (isset($_SESSION['name'])) {
                  echo $_SESSION['name'];
                }
                ?></p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>

      </div>
      

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <!-- <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
          </a>
        </li>

        <li>
          <a href="<?=base_url()?>app/manga">
            <i class="fa fa-picture-o"></i> <span>Manga</span>
            <!-- <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i>
            <span>Manga Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Schedule </a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Server </a></li></ul>
        </li>

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-book"></i> <span>Light Novel</span>
            <!-- <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i>
            <span>Light Novel Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Schedule </a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Server </a></li></ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-envelope"></i> <span>Message</span>
            <!-- <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
          </a>
        </li>
            


        

        
        
        
        
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>