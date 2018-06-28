@extends('layouts.app')

@section('content')


  <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->

   <!-- END  HEAD-->
   <!-- BEGIN BODY-->
   <body style="margin-top: 0%;">

        <!-- MAIN WRAPPER -->
       <div id="wrap">
    
    
            <!-- HEADER SECTION -->
           
    
    
    
           <!-- MENU SECTION -->
          <div id="left" style="background-color: #fff;">
               <div class="media user-media well-small">
                   <a class="user-link" href="#">
                       <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
                   </a>
                   <br />
                   <div class="media-body">
                       <h5 class="media-heading"> Joe Romlin</h5>
                       <ul class="list-unstyled user-info">
                           
                           <li>
                                <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                              
                           </li>
                          
                       </ul>
                   </div>
                   <br />
               </div>
    
               <ul id="menu" class="collapse" style="background-color: #fff;">
    
                   
                   <li class="panel">
                       <a href="index.html" >
                           <i class="icon-table"></i> Dashboard
          
                          
                       </a>                   
                   </li>
    
    
    
                   <li class="panel ">
                       <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                           <i class="icon-tasks"> </i> employee   
          
                           <span class="pull-right">
                             <i class="icon-angle-left"></i>
                           </span>
                          &nbsp; <span class="label label-default">10</span>&nbsp;
                       </a>
                       <ul class="collapse" id="component-nav">
                          
                           <li class=""><a href="button.html"><i class="icon-angle-right"></i> add employee </a></li>
                           <li class=""><a href="progress.html"><i class="icon-angle-right"></i> List employees </a></li>
                       </ul>
                   </li>
                   <li class="panel ">
                       <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                           <i class="icon-pencil"></i> Train
          
                           <span class="pull-right">
                               <i class="icon-angle-left"></i>
                           </span>
                             &nbsp; <span class="label label-success">5</span>&nbsp;
                       </a>
                       <ul class="collapse" id="form-nav">
                           <li class=""><a href="forms_general.html"><i class="icon-angle-right"></i> add train </a></li>
                           <li class=""><a href="forms_advance.html"><i class="icon-angle-right"></i> List trains </a></li>
                       </ul>
                   </li>
    
                   
                   
    
    
                   
    
               </ul>
    
           </div>
           <!--END MENU SECTION -->
    
    
           <!--PAGE CONTENT -->
           <div id="content">
                @yield('admincontent')
               
                   </div>
    
                   <hr />
    
    
    
    
               </div>
    
    
    
    
           </div>
          <!--END PAGE CONTENT -->
    
    
       </div>
    
        <!--END MAIN WRAPPER -->
    
      <!-- FOOTER -->
       <div id="footer">
           <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
       </div>
       <!--END FOOTER -->
        <!-- GLOBAL SCRIPTS -->
       <script src="assets/plugins/jquery-2.0.3.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
       <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
       <!-- END GLOBAL SCRIPTS -->
@endsection
