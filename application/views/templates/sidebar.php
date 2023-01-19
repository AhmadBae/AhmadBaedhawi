 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
     <img src="<?php echo base_url() ?>assets/dist/img/logoumb.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">Program Web 2</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="<?php echo base_url() ?>assets/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">Ahmad Baedhawi</a>
       </div>
     </div>

     <!-- SidebarSearch Form -->
     <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
           <a href="<?php echo base_url('home') ?>" class="nav-link">
             <i class="nav-icon fas fa-home"></i>
             <p>
               Home
               <!-- <i class="right fas fa-angle-left"></i> -->
             </p>
           </a>
         </li>
       </ul>
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
           <a href="<?php echo base_url('pegawai/index') ?>" class="nav-link">
             <i class="nav-icon fas fa-database"></i>
             <p>
               Data Pegawai
               <!-- <i class="right fas fa-angle-left"></i> -->
             </p>
           </a>
         </li>
       </ul>
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
           <a href="<?php echo base_url('about') ?>" class="nav-link">
             <i class="nav-icon fas fa-building"></i>
             <p>
               About
             </p>
           </a>
         </li>
       </ul>
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
           <a href="<?php echo base_url('myprofile') ?>" class="nav-link">
             <i class="nav-icon fas fa-user"></i>
             <p>
               My Profile
               <!-- <i class="right fas fa-angle-left"></i> -->
             </p>
           </a>
         </li>
       </ul>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>