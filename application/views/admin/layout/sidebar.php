 <div class="d-flex " id="wrapper">
     <!-- Sidebar-->
     <div class="bg-white shadow-lg " id="sidebar-wrapper">
         <div class="sidebar-heading bg-light">Welcome <?= $_SESSION['um_user'] ?></div>
         <ul class="list-group list-group-flush navbar-nav ">
             <a href="dashboard" class="nav-link  list-group-item-action list-group-item-light p-3">
                 <li>
                     <i class="fa-solid fa-house-chimney fa-beat me-3"></i>
                     <span>Dashboard</span>
                 </li>
             </a>
             <!-- create menu collapse here -->
             <a class="nav-link  list-group-item-action list-group-item-light p-3" data-bs-toggle="collapse" href="#menu1" aria-expanded="false" aria-controls="menu1">
                 <div class="d-flex ">
                     <i class="fa fa-spin fa-cog mt-1 me-3"></i>
                     <span>ข้อมูลพื้นฐาน</span>
                     <i class="fa-solid fa-chevron-down ms-auto"></i>
                 </div>
             </a>
             <div class="collapse" id="menu1">
                 <a href="data_occupation" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลอาชีพ</span>
                         </li>
                     </ul>
                 </a>
                 <a href="data_education" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลการศึกษา</span>
                         </li>
                     </ul>
                 </a>
                 <a href="data_disability_type" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลประเภทความพิการ</span>
                         </li>
                     </ul>
                 </a>
                 <a href="data_disability_cause" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลสาเหตุความพิการ</span>
                         </li>
                     </ul>
                 </a>
                 <a href="data_form" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลแบบฟอร์มต่างๆ</span>
                         </li>
                     </ul>
                 </a>
             </div>

             <a class="nav-link list-group-item-action list-group-item-light p-3" aria-expanded="false" data-bs-toggle="collapse" href="#menu2" aria-controls="menu2">
                 <div class="d-flex">
                     <i class="fa fa-cubes fa-beat mt-1 me-3"></i>
                     <span>ข้อมูลประวัติผู้พิการ</span>
                     <i class="fa-solid fa-chevron-down ms-auto"></i>
                 </div>
             </a>
             <div class="collapse" id="menu2">
                 <a href="data_personal_handicapped" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ลงทะเบียนใหม่</span>
                         </li>
                     </ul>
                 </a>
                 <a href="data_personal_search_edit" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>แก้ไขประวัติผู้พิการ</span>
                         </li>
                     </ul>
                 </a>
                 <a href="data_personal_handicapped_view" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ค้นหา/ปริ้นท์</span>
                         </li>
                     </ul>
                 </a>
             </div>

             <a class="nav-link list-group-item-action list-group-item-light p-3" data-bs-toggle="collapse" href="#menu3" aria-expanded="false" aria-controls="menu3">
                 <div class="d-flex">
                     <i class="fa-solid fa-briefcase fa-beat mt-1 me-3"></i>
                     <span>ข้อมูลการทำงานผู้พิการ</span>
                     <i class="fa-solid fa-chevron-down ms-auto"></i>
                 </div>
             </a>
             <div class="collapse" id="menu3">
                 <a href="data_training_occupation" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ลงทะเบียนใหม่</span>
                         </li>
                     </ul>
                 </a>
                 <a href="data_training_occupation_search_edit" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>แก้ไขข้อมูลการทำงานผู้พิการ</span>
                         </li>
                     </ul>
                 </a>
             </div>

             <a class="nav-link list-group-item-action list-group-item-light p-3" data-bs-toggle="collapse" href="#menu4" aria-controls="menu4" aria-expanded="false">
                 <div class="d-flex">
                     <i class="fa fa-cubes fa-beat mt-1 me-3"></i>
                     <span>ข้อมูลปฏิบัติงาน จนท.</span>
                     <i class="fa-solid fa-chevron-down ms-auto"></i>
                 </div>
             </a>
             <div class="collapse" id="menu4">
                 <a href="data_staff_work" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลปฏิบัติงานเจ้าหน้าที่ศูนย์</span>
                         </li>
                     </ul>
                 </a>
                 <a href="data_visit" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลการออกเยี่ยมคนพิการ</span>
                         </li>
                     </ul>
                 </a>
                 <a href="data_company" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลสถานประกอบการจ้างงาน</span>
                         </li>
                     </ul>
                 </a>
                 <a href="data_request_service" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลผู้พิการขอรับบริการ</span>
                         </li>
                     </ul>
                 </a>
             </div>
             <a class="nav-link list-group-item-action list-group-item-light p-3" data-bs-toggle="collapse" href="#menu5" aria-controls="menu5" aria-expanded="false">
                 <div class="d-flex ">
                     <i class="fa fa-chart-line fa-beat mt-1 me-3"></i>
                     <span>รายงานต่างๆ</span>
                     <i class="fa-solid fa-chevron-down ms-auto"></i>
                 </div>
             </a>
             <div class="collapse" id="menu5">
                 <a href="report_personal" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลผู้พิการ</span>
                             <i class="fa fa-file-pdf me-2"></i>
                             <i class="fa fa-file-word"></i>
                         </li>
                     </ul>
                 </a>
                 <a href="report_company" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลบริษัทจ้างงาน</span>
                             <i class="fa fa-file-pdf me-2"></i>
                             <i class="fa fa-file-word"></i>
                         </li>
                     </ul>
                 </a>
                 <a href="report_follow" target="_BLANK" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลการติดตาม</span>
                             <i class="fa fa-file-pdf me-2"></i>
                             <i class="fa fa-file-word"></i>
                         </li>
                     </ul>
                 </a>
                 <a href="report_hire" target="_BLANK" class="nav-link list-group-item-action list-group-item-light p-3">
                     <ul>
                         <li>
                             <i class="fa-solid fa-chevron-right fa-beat-fade me-3"></i>
                             <span>ข้อมูลผู้พิการรอจ้างงาน</span>
                             <i class="fa fa-file-pdf me-2"></i>
                         </li>
                     </ul>
                 </a>
             </div>
             <a href="data_xxx" class="nav-link list-group-item-action list-group-item-light p-3 ">
                 <li>
                     <i class="fa fa-newspaper fa-beat me-3"></i>
                     <span>ข้อมูลกิจกรรม ข่าวสารต่างๆ</span>
                 </li>
             </a>
             <a href="user_management" class="nav-link list-group-item-action list-group-item-light p-3">
                 <li>
                     <i class="fa fa-users fa-beat me-3"></i>
                     <span>กำหนดสิทธิ์ผู้ใช้งาน</span>
                 </li>
             </a>

             <a href="#" class="nav-link list-group-item-action list-group-item-light text-danger p-3 logout">
                 <li>
                     <i class="fa fa-sign-out-alt fa-beat me-3"></i>
                     <span class="text-danger">ออกจากระบบ</span>
                 </li>
             </a>

         </ul>

     </div>
     <!-- Page content wrapper-->
     <div id="page-content-wrapper" class>
         <!-- Top navigation-->
         <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg">
             <div class="container-fluid">
                 <button class="btn btn-outline-light text-dark" type="burton" id="sidebarToggle"><i class="fa-solid fa-bars-staggered fa-beat"></i></button>
                 <div class="ms-auto d-flex">
                     <img class="rounded-circle object-fit-cover" src="https://i.pravatar.cc/545" width="36" height="36">
                     </a>
                 </div>
         </nav>