 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Page Customer</li>

                 <li>
                     <a href="<?= base_url('/customer/dashboard-customer') ?>" class="waves-effect">
                         <i class="mdi mdi-view-dashboard"></i>
                         <span>Dashboard</span>
                     </a>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="mdi mdi-account-multiple"></i>
                         <span>Data My User</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="<?= base_url('/customer/list-users') ?>">List Users</a></li>
                         <li><a href="<?= base_url('/customer/create-user') ?>">Create Users</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="mdi mdi-settings"></i>
                         <span>Request Log</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="<?= base_url('/customer/list-log') ?>">List Request Log</a></li>
                     </ul>
                 </li>


             </ul>

         </div>
         <!-- Sidebar -->
     </div>
 </div>
 <!-- Left Sidebar End -->