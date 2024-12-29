<div class="layout-right">
   <div class="navbar-wrapper">
      <nav class="navbar h-100">
         <div class="navbar-left d-flex align-items-center gap-3">
            <div class="navbar-brand d-flex align-items-center gap-5 m-0">
               <div class="mobile-nav-toggler">
                  <img src="./assets/images/icon/hamburger.svg" alt="">
               </div>
               <div class="waves-effect vertical-menu-btn">
                  <img src="./assets/images/icon/hamburger.svg" alt="">
               </div>
               <div class="search-box">
                  <input type="text" class="form-control" placeholder="Search Every Things" id="searchInput">
                  <img src="assets/images/icon/search_box_icon.svg" alt="" class="search_icon w-auto h-auto">
               </div>
            </div>

         </div>
         <div class="navbar-right  d-flex align-items-center">
            <div class="navbar-action d-flex gap-3">
               <div class="search-icon">
                  <img src="assets/images/icon/nav_sm_search.svg" alt="">
               </div>
               <div class="app-search-box">
                  <form class="app-search-form d-flex justify-content-center align-items-center">
                     <div class="search-box">
                        <input type="text" class="form-control" placeholder="Search Every Things"
                           id="searchInput">
                        <img src="assets/images/icon/search_box_icon.svg" alt=""
                           class="search_icon w-auto h-auto">
                     </div>
                  </form>
                  <div class="search-backdrop">
                  </div>
               </div>

               <div class="notifications position-relative" data-bs-toggle="tooltip" data-bs-placement="bottom"
                  data-bs-title="Notification">
                  <div class="action-link position-relative dropdown-toggle" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     <img src="./assets/images/icon/nav_notification_icon.svg" alt="">
                     <span class="badge text-bg-danger">4</span>
                  </div>
                  <div class="dropdown-menu" onclick="event.stopPropagation()">
                     <div class="d-flex notify-head flex-column gap-3">
                        <div class="tab-menus">
                           <ul class="tab-menus-items d-flex gap-3">
                              <li class="tab-item">
                                 <button class=" btn btn-ex-sm btn-primary">All</button>
                              </li>
                              <li class="tab-item">
                                 <button class=" btn btn-ex-sm btn-secondary">Unread</button>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="profile position-relative" data-bs-toggle="tooltip" data-bs-placement="bottom"
                  data-bs-title="Profile">
                  <div class="action-link  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                     <img src="assets/images/user/user.png" alt="" class="rounded-circle">
                  </div>
                  <span class="online active"> </span>
                  <div class="dropdown-menu" onclick="event.stopPropagation()">
                     <ul class="d-flex flex-column gap-3">
                        <li class="nav-item">
                           <a href="user_profile.html" class="nav-link">
                              <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <circle class="my_acc" cx="4" cy="4" r="4"
                                    transform="matrix(-1 0 0 1 16.3652 3.95312)" stroke="#737373"
                                    stroke-width="1.5"></circle>
                                 <path class="my_acc"
                                    d="M5.36523 17.8878C5.36523 17.0274 5.90609 16.26 6.71633 15.9706V15.9706C10.3693 14.666 14.3612 14.666 18.0141 15.9706V15.9706C18.8244 16.26 19.3652 17.0274 19.3652 17.8878V19.2033C19.3652 20.3907 18.3135 21.3029 17.138 21.135L16.1836 20.9986C13.6509 20.6368 11.0796 20.6368 8.54686 20.9986L7.59244 21.135C6.41694 21.3029 5.36523 20.3907 5.36523 19.2033V17.8878Z"
                                    stroke="#737373" stroke-width="1.5"></path>
                              </svg>
                              <span class="title">Profile</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="setting.html" class="nav-link">
                              <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <rect class="cng-pass" x="4" y="9.95312" width="16" height="12" rx="4"
                                    stroke="#737373" stroke-width="1.5"></rect>
                                 <path class="cng-pass" d="M12 16.9531L12 14.9531" stroke="#737373"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path class="cng-pass"
                                    d="M16 9.95313V7.95313C16 5.74399 14.2091 3.95312 12 3.95312V3.95312C9.79086 3.95312 8 5.74399 8 7.95312L8 9.95313"
                                    stroke="#737373" stroke-width="1.5"></path>
                              </svg>
                              <span class="title">Reset Password</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="setting.html" class="nav-link">
                              <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <mask id="mask0_3173_45343" style="mask-type:luminance"
                                    maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="22">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M2.36523 2.95312H21.6501V23.6741H2.36523V2.95312Z" fill="white">
                                    </path>
                                 </mask>
                                 <g mask="url(#mask0_3173_45343)">
                                    <path class="setting" fill-rule="evenodd" clip-rule="evenodd"
                                       d="M7.56755 18.3931C7.79655 18.3931 8.02555 18.4221 8.24955 18.4821C8.92555 18.6641 9.51255 19.1161 9.86055 19.7231C10.0866 20.1041 10.2116 20.5491 10.2156 21.0031C10.2156 21.6531 10.7376 22.1741 11.3796 22.1741H12.6326C13.2716 22.1741 13.7936 21.6561 13.7966 21.0171C13.7926 20.3111 14.0686 19.6401 14.5736 19.1351C15.0716 18.6371 15.7676 18.3381 16.4636 18.3581C16.9196 18.3691 17.3586 18.4921 17.7456 18.7121C18.3026 19.0311 19.0136 18.8411 19.3356 18.2911L19.9996 17.1841C20.1476 16.9291 20.1906 16.6091 20.1116 16.3141C20.0336 16.0191 19.8376 15.7631 19.5736 15.6121C18.9556 15.2561 18.5146 14.6821 18.3316 13.9941C18.1506 13.3191 18.2496 12.5821 18.6026 11.9751C18.8326 11.5751 19.1696 11.2381 19.5736 11.0061C20.1156 10.6891 20.3056 9.98012 19.9906 9.42812C19.9776 9.40613 19.9656 9.38313 19.9556 9.35913L19.3696 8.34313C19.0506 7.78813 18.3406 7.59713 17.7836 7.91412C17.1816 8.27012 16.4656 8.37212 15.7776 8.19112C15.0906 8.01312 14.5146 7.57812 14.1556 6.96412C13.9256 6.58012 13.8006 6.13313 13.7966 5.67812C13.8056 5.33612 13.6856 5.02912 13.4676 4.80413C13.2506 4.58012 12.9456 4.45312 12.6326 4.45312H11.3796C11.0696 4.45312 10.7796 4.57413 10.5606 4.79212C10.3426 5.01113 10.2236 5.30212 10.2256 5.61212C10.2046 7.07413 9.00955 8.25113 7.56255 8.25113C7.09855 8.24613 6.65155 8.12113 6.26355 7.88912C5.71855 7.57912 5.00655 7.77012 4.68755 8.32512L4.01055 9.43813C3.70055 9.97613 3.89055 10.6871 4.44255 11.0081C5.26155 11.4821 5.77255 12.3661 5.77255 13.3141C5.77255 14.2621 5.26155 15.1451 4.44055 15.6201C3.89155 15.9381 3.70155 16.6451 4.01955 17.1951L4.65055 18.2831C4.80655 18.5641 5.06155 18.7671 5.35655 18.8501C5.65055 18.9321 5.97455 18.8971 6.24455 18.7471C6.64155 18.5141 7.10355 18.3931 7.56755 18.3931ZM12.6326 23.6741H11.3796C9.91055 23.6741 8.71555 22.4801 8.71555 21.0111C8.71355 20.8301 8.66155 20.6421 8.56455 20.4791C8.40755 20.2051 8.15355 20.0091 7.86055 19.9311C7.56955 19.8531 7.25055 19.8961 6.98855 20.0481C6.36055 20.3981 5.62155 20.4831 4.94555 20.2931C4.27055 20.1021 3.68755 19.6381 3.34555 19.0231L2.72055 17.9461C1.98955 16.6781 2.42455 15.0531 3.69055 14.3211C4.04955 14.1141 4.27255 13.7281 4.27255 13.3141C4.27255 12.9001 4.04955 12.5131 3.69055 12.3061C2.42355 11.5701 1.98955 9.94112 2.71955 8.67312L3.39755 7.56012C4.11855 6.30612 5.74855 5.86413 7.01955 6.59413C7.19255 6.69712 7.38055 6.74913 7.57155 6.75113C8.19455 6.75113 8.71555 6.23712 8.72555 5.60512C8.72155 4.90812 8.99655 4.23913 9.49755 3.73413C10.0006 3.23013 10.6686 2.95312 11.3796 2.95312H12.6326C13.3486 2.95312 14.0446 3.24713 14.5436 3.75813C15.0416 4.27213 15.3166 4.97713 15.2956 5.69213C15.2976 5.85313 15.3506 6.03912 15.4466 6.20213C15.6056 6.47213 15.8566 6.66212 16.1546 6.74012C16.4526 6.81413 16.7646 6.77413 17.0296 6.61713C18.3096 5.88613 19.9386 6.32412 20.6696 7.59412L21.2926 8.67312C21.3086 8.70212 21.3226 8.73013 21.3346 8.75913C21.9966 10.0101 21.5546 11.5851 20.3246 12.3041C20.1456 12.4071 20.0006 12.5511 19.9006 12.7251C19.7456 12.9941 19.7026 13.3141 19.7806 13.6081C19.8606 13.9081 20.0516 14.1571 20.3206 14.3111C20.9276 14.6601 21.3806 15.2481 21.5616 15.9271C21.7426 16.6051 21.6436 17.3411 21.2906 17.9481L20.6266 19.0541C19.8956 20.3101 18.2666 20.7451 16.9996 20.0131C16.8306 19.9161 16.6356 19.8631 16.4416 19.8581H16.4356C16.1466 19.8581 15.8496 19.9811 15.6336 20.1961C15.4146 20.4151 15.2946 20.7071 15.2966 21.0171C15.2896 22.4861 14.0946 23.6741 12.6326 23.6741Z"
                                       fill="#737373"></path>
                                 </g>
                                 <path class="setting" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.011 11.4258C10.971 11.4258 10.125 12.2728 10.125 13.3128C10.125 14.3528 10.971 15.1978 12.011 15.1978C13.051 15.1978 13.897 14.3528 13.897 13.3128C13.897 12.2728 13.051 11.4258 12.011 11.4258ZM12.011 16.6978C10.144 16.6978 8.625 15.1798 8.625 13.3128C8.625 11.4458 10.144 9.92578 12.011 9.92578C13.878 9.92578 15.397 11.4458 15.397 13.3128C15.397 15.1798 13.878 16.6978 12.011 16.6978Z"
                                    fill="#737373"></path>
                              </svg>
                              <span class="title">Setting</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="setting.html" class="nav-link">
                              <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path class="logout"
                                    d="M16.3652 16.9531V18.9531C16.3652 21.1623 14.5744 22.9531 12.3652 22.9531H7.36523C5.1561 22.9531 3.36523 21.1623 3.36523 18.9531V6.95313C3.36523 4.74399 5.1561 2.95312 7.36523 2.95312H12.3652C14.5744 2.95312 16.3652 4.74399 16.3652 6.95312V8.95312"
                                    stroke="#737373" stroke-width="1.5" stroke-linecap="round"></path>
                                 <path class="logout"
                                    d="M19.3652 15.9531L21.6581 13.6602C22.0487 13.2697 22.0487 12.6365 21.6581 12.246L19.3652 9.95313"
                                    stroke="#737373" stroke-width="1.5" stroke-linecap="round"></path>
                                 <path class="logout" d="M21.3652 12.9531L9.36523 12.9531" stroke="#737373"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                              </svg>
                              <span class="title">Log Out</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </nav>
   </div>
</div>   