 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Page ADMIN</li>

                 <li>
                     <a href="<?= base_url('/admin/dashboard-admin') ?>" class="waves-effect">
                         <i class="mdi mdi-view-dashboard"></i>
                         <span>Dashboard</span>
                     </a>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="mdi mdi-account-multiple"></i>
                         <span>Data Admin</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="<?= base_url('/admin/list-admin') ?>">List Admin</a></li>
                         <li><a href="<?= base_url('/admin/create-admin') ?>">Create Admin</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="mdi mdi-account-multiple"></i>
                         <span>Data Customer</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="<?= base_url('/admin/list-customers') ?>">List Customer</a></li>
                         <li><a href="<?= base_url('/admin/create-customer') ?>">Create Customer</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="mdi mdi-account-multiple"></i>
                         <span>Data Users</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="<?= base_url('/admin/list-users') ?>">List Users</a></li>
                         <li><a href="email-read.html">Create Users</a></li>
                     </ul>
                 </li>


             </ul>

         </div>
         <!-- Sidebar -->
     </div>
 </div>
 <!-- Left Sidebar End -->