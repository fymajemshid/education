
 @extends('layouts.includes.app1')
 @section('content') 
 
 
                 <li class="second top_bell_nav">
                    <ul class="top_dp_agile ">
                                     <li class="dropdown head-dpdn">
                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge blue">4</span></a>
                                         <ul class="dropdown-menu">
                                             <li>
                                                 <div class="notification_header">
                                                     <h3>Your Notifications</h3>
                                                 </div>
                                             </li>
                                             <li><a href="#">
                                                 <div class="user_img"><img src="{{asset('app-assets/images/a3.jpg')}}" alt=""></div>
                                                <div class="notification_desc">
                                                  <h6>John Smith</h6>
                                                 <p>Lorem ipsum dolor</p>
                                                 <p><span>1 hour ago</span></p>
                                                 </div>
                                               <div class="clearfix"></div>	
                                              </a></li>
                                              <li class="odd"><a href="#">
                                                 <div class="user_img"><img src="{{asset('app-assets/images/a1.jpg')}}" alt=""></div>
                                                <div class="notification_desc">
                                                  <h6>Jasmin Leo</h6>
                                                 <p>Lorem ipsum dolor</p>
                                                 <p><span>3 hour ago</span></p>
                                                 </div>
                                                <div class="clearfix"></div>	
                                              </a></li>
                                              <li><a href="#">
                                                 <div class="user_img"><img src="{{asset('app-assets/images/a2.jpg')}}" alt=""></div>
                                                <div class="notification_desc">
                                                  <h6>James Smith</h6>
                                                 <p>Lorem ipsum dolor</p>
                                                 <p><span>2 hour ago</span></p>
                                                 </div>
                                                <div class="clearfix"></div>	
                                              </a></li>
                                               <li><a href="#">
                                                 <div class="user_img"><img src="{{asset('app-assets/images/a4.jpg')}}" alt=""></div>
                                                <div class="notification_desc">
                                                  <h6>James Smith</h6>
                                                 <p>Lorem ipsum dolor</p>
                                                 <p><span>1 hour ago</span></p>
                                                 </div>
                                                <div class="clearfix"></div>	
                                              </a></li>
                                              <li>
                                                 <div class="notification_bottom">
                                                     <a href="#">See all Notifications</a>
                                                 </div> 
                                             </li>
                                         </ul>
                                     </li>
                                     
                         </ul>
                 </li>
                 <li class="second top_bell_nav">
                    <ul class="top_dp_agile ">
                                     <li class="dropdown head-dpdn">
                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="badge blue">3</span></a>
                                         <ul class="dropdown-menu">
                                             <li>
                                                 <div class="notification_header">
                                                     <h3>Your Messages</h3>
                                                 </div>
                                             </li>
                                             <li><a href="#">
                                                 <div class="user_img"><img src="{{asset('app-assets/images/a3.jpg')}}" alt=""></div>
                                                <div class="notification_desc">
                                                  <h6>John Smith</h6>
                                                 <p>Lorem ipsum dolor</p>
                                                 <p><span>3 hour ago</span></p>
                                                 </div>
                                               <div class="clearfix"></div>	
                                              </a></li>
                                              <li class="odd"><a href="#">
                                                 <div class="user_img"><img src="{{asset('app-assets/images/a1.jpg')}}" alt=""></div>
                                                <div class="notification_desc">
                                                  <h6>Jasmin Leo</h6>
                                                 <p>Lorem ipsum dolor</p>
                                                 <p><span>2 hour ago</span></p>
                                                 </div>
                                                <div class="clearfix"></div>	
                                              </a></li>
                                              <li><a href="#">
                                                 <div class="user_img"><img src="{{asset('app-assets/images/a2.jpg')}}" alt=""></div>
                                                <div class="notification_desc">
                                                  <h6>James Smith</h6>
                                                 <p>Lorem ipsum dolor</p>
                                                 <p><span>1 hour ago</span></p>
                                                 </div>
                                                <div class="clearfix"></div>	
                                              </a></li>
                                              <li>
                                                 <div class="notification_bottom">
                                                     <a href="#">See all Messages</a>
                                                 </div> 
                                             </li>
                                         </ul>
                                     </li>
                                     
                         </ul>
                 </li>
                 <li class="second top_bell_nav">
                    <ul class="top_dp_agile ">
                        <li class="dropdown head-dpdn">
                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">9</span></a>
                                         <ul class="dropdown-menu">
                                             <li>
                                                 <div class="notification_header">
                                                     <h3>You have 4 Pending tasks</h3>
                                                 </div>
                                             </li>
                                             <li><a href="#">
                                                 <div class="task-info">
                                                     <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                     <div class="clearfix"></div>	
                                                 </div>
                                                 <div class="progress progress-striped active">
                                                     <div class="bar yellow" style="width:40%;"></div>
                                                 </div>
                                             </a></li>
                                             <li><a href="#">
                                                 <div class="task-info">
                                                     <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                    <div class="clearfix"></div>	
                                                 </div>
                                                 <div class="progress progress-striped active">
                                                      <div class="bar green" style="width:90%;"></div>
                                                 </div>
                                             </a></li>
                                             <li><a href="#">
                                                 <div class="task-info">
                                                     <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                     <div class="clearfix"></div>	
                                                 </div>
                                                <div class="progress progress-striped active">
                                                      <div class="bar red" style="width: 33%;"></div>
                                                 </div>
                                             </a></li>
                                             <li><a href="#">
                                                 <div class="task-info">
                                                     <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                    <div class="clearfix"></div>	
                                                 </div>
                                                 <div class="progress progress-striped active">
                                                      <div class="bar  blue" style="width: 80%;"></div>
                                                 </div>
                                             </a></li>
                                             <li>
                                                 <div class="notification_bottom">
                                                     <a href="#">See all pending tasks</a>
                                                 </div> 
                                             </li>
                                         </ul>
                                     </li>	
                                 </ul>
                 </li>
 
                 <li class="second w3l_search">
                  
                         <form action="#" method="post">
                             <input type="search" name="search" placeholder="Search here..." required="">
                             <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                         </form>
                     
                 </li>
                 <li class="second full-screen">
                     <section class="full-top">
                         <button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
                     </section>
                 </li>
 
             </ul>
             <!-- //nav -->
             
         </div>
         <div class="clearfix"></div>
         <!-- //w3_agileits_top_nav-->
         <!-- /inner_content-->
                 <div class="inner_content">
                     <!-- /inner_content_w3_agile_info-->
                     <div class="inner_content_w3_agile_info">
                     <!-- /agile_top_w3_grids-->
                        <div class="agile_top_w3_grids">
                               <ul class="ca-menu">
                                     {{-- <li>
                                         <a href="#">
                                             
                                             <i class="fa fa-building-o" aria-hidden="true"></i>
                                             <div class="ca-content">
                                                 <h4 class="ca-main">16,808</h4>
                                                 <h3 class="ca-sub">New Companies</h3>
                                             </div>
                                         </a>
                                     </li> --}}
                                     <li>
                                        <a href="{{route('contact.display')}}">
                                         {{-- <a href="#"> --}}
                                           <i class="fa fa-user" aria-hidden="true"></i>
                                             <div class="ca-content">
                                                 <h4 class="ca-main one">update</h4>
                                                 <h3 class="ca-sub one"> contact Detail</h3>
                                             </div>
                                         </a>
                                     </li>
                                     <li>
                                        <a href="{{route('admin.register')}}">
                                         {{-- <a href="#"> --}}
                                             <i class="fa fa-database" aria-hidden="true"></i>
                                             <div class="ca-content">
                                             <h4 class="ca-main two"> create user</h4>
                                                 <h3 class="ca-sub two">settings</h3>
                                             </div>
                                         </a>
                                     </li>
                                >

                                     {{-- <li>
                                         <a href="#">
                                             <i class="fa fa-tasks" aria-hidden="true"></i>
                                             <div class="ca-content">
                                                 <h4 class="ca-main three">49,436</h4>
                                                 <h3 class="ca-sub three">Old Projects</h3>
                                             </div>
                                         </a>
                                     </li>
                                         <li>
                                         <a href="#">
                                             <i class="fa fa-clone" aria-hidden="true"></i>
                                             <div class="ca-content">
                                                 <h4 class="ca-main four">30,808</h4>
                                                 <h3 class="ca-sub four">New Orders</h3>
                                             </div>
                                         </a>
                                     </li>
                                     <div class="clearfix"></div>
                                 </ul>
                        </div> --}}
                      <!-- //agile_top_w3_grids-->
                         <!-- /agile_top_w3_post_sections-->
                           
 @endsection
 