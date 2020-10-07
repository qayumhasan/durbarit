@extends('admin.master')
@section('contents')
<section class="counter_area">
<div class="panel mb-0">
            <div class="panel_header">
                <div class="row">
                    <div class="panel_title w-100">
                        <span class="panel_icon"><i class="fas fa-border-all"></i></span><span>Student full information</span>
                        <a href="https://durbarit.com/school/admin/student/all" class="btn btn-sm btn-blue float-right">Back</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel_body mt-2">
                                <div class="basic_information">
                                    <div class="employee_photo_and_name_area">
                                        <div class="photo">
                                            <div class="row justify-content-center">
                                                    <img height="140" width="140" class="" src="https://durbarit.com/school/public/uploads/student/th_1597511022.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="name">
                                            <div class="row justify-content-center">
                                            <h5 class="mt-1 text-black">Maia Tanner</h5>
                                            </div>
                                        </div>
                                        <div class="basic_information_list">
                                            <table class="table">
                                                <tbody>
        
                                                    <tr>
                                                    <th><b>Admission No :</b> </th>  
                                                    <td class="text-right">Dolorem sint tempore</td>  
                                                    </tr>
        
                                                    <tr>
                                                    <th><b>Roll No :</b> </th>  
                                                    <td class="text-right">Quod in natus aliqui</td>  
                                                    </tr>
        
                                                    <tr>
                                                    <th><b>Class :</b> </th>  
                                                    <td class="text-right">Seven (7)</td>  
                                                    </tr>
                                                    
                                                    <tr>
                                                    <th><b>Section :</b> </th>  
                                                    <td class="text-right">A</td>  
                                                    </tr>
                                                    
                                                    <tr>
                                                    <th><b>Gender :</b> </th>  
                                                    <td class="text-right">Female</td>  
                                                    </tr>
        
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                            <div class="row">
                            <div class="col-md-12">
                                <div class="panel_body mt-2">
                                    <div class="heading_area">
                                        <h6><b>Sibling</b></h6>
                                    </div>
                                    <div class="sibling_information">
                                        <div class="employee_photo_and_name_area">
                                            
                                            <div class="photo mb-1">
                                                <div class="row">
                                                    <a href="https://durbarit.com/school/admin/student/details/15" class="w-100">
                                                        <div class="row no-gutters">
                                                            <div class="col-md-5 text-center">
                                                                <img height="80" width="80" class="" src="https://durbarit.com/school/public/uploads/student/th_1586259175.png" alt="">
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div class="row mt-4 justify-content-center">
                                                                    <h6 class="mt-1 text-black">Leslie Russell</h6>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            
                                            <div class="basic_information_list">
                                                <table class="table">
                                                    <tbody>
            
                                                        <tr>
                                                        <th><b>Admission No :</b> </th>  
                                                        <td class="text-right">1114477</td>  
                                                        </tr>
            
                                                        <tr>
                                                        <th><b>Roll No :</b> </th>  
                                                        <td class="text-right">SR20703</td>  
                                                        </tr>
            
                                                        <tr>
                                                        <th><b>Class :</b> </th>  
                                                        <td class="text-right">One</td>  
                                                        </tr>
                                                        
                                                        <tr>
                                                        <th><b>Section :</b> </th>  
                                                        <td class="text-right">A</td>  
                                                        </tr>
                                                        
                                                        <tr>
                                                        <th><b>Gender :</b> </th>  
                                                        <td class="text-right">Female</td>  
                                                        </tr>
            
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        
                </div>

                <div class="col-md-9">
                    <div class="panel_body all_information_body mt-2">
                        <div class="profile_tab_list">
                            <div class="row">
                                <div class="col-md-8">
                                    <ul class="">
                                        <li><a data-class="profile_all_information" class="active tab_link" href="#"><b>Student details</b></a></li>
                                        <li><a data-class="fees_information" class="tab_link" href="#"><b>Fees details </b></a></li>
                                        <li><a data-class="attendance_information" class="tab_link" href="#"><b>Attendance</b></a></li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                                                            <a class="float-right ml-2" href="https://durbarit.com/school/admin/student/edit/18"><i class="fas fa-pencil-alt"></i></a> 
                                                                                    <a title="Active" class="float-right" href="https://durbarit.com/school/admin/student/status/update/18"><i class="fas fa-thumbs-up"></i></a> 
                                                                                                            </div>
                            </div>
                        </div>

                        <hr class="p-0 m-0 mt-1">
                        <div class="profile_all_information show tab_content">
                            <div class="another_basic_information information_border">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="w-50"><b>Admission Date</b>  :</td>
                                            <td class="w-50">1988-08-04</td>
                                        </tr>
                                        <tr>
                                            <td class="w-50"><b>Date of birth</b>  :</td>
                                            <td class="w-50">2012-01-06</td>
                                        </tr>
                                        <tr>
                                            <td class="w-50"><b>Category</b>  :</td>
                                            <td class="w-50">Freedom fighter&#039;s son</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="w-50"><b>Date of birth</b>  :</td>
                                            <td class="w-50">2012-01-06</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="w-50"><b>Mobile No</b>  :</td>
                                            <td class="w-50">Ut voluptatem sed e</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="w-50"><b>Religion</b>  :</td>
                                            <td class="w-50">Odio soluta amet cu</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="address_info information_border">
                                <div class="card-header">
                                    <h6 class="p-0 m-0">Address</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <td class="w-50"><b>Present address</b>  :</td>
                                                <td class="w-50"></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="w-50"><b>Permanent address</b>  :</td>
                                                <td class="w-50"></td>
                                            </tr>
                                    
                                        </tbody>
                                    </table>
                                </div> 
                            </div> 
                            
                            <div class="guardian_info information_border">
                                <div class="card-header">
                                    <h6 class="p-0 m-0">Parent / Guardian Details</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <td class="match"><b>Father name</b> :</td>
                                                <td class="match"> Jena Trujillo</td>
                                                <td rowspan="3" class="text-center"><img class="guardian_photo" width="85" height="85" width="" src="https://durbarit.com/school/public/uploads/student/th_1597511023.jpg" alt=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="match"><b>Father phone</b> :</td>
                                                <td class="match">+1 (631) 846-8668</td>
                                            </tr>

                                            <tr>
                                                <td class="match"><b>Father Occupation</b> :</td>
                                                <td class="match">Dolor qui mollit exe</td>
                                            </tr>

                                            <tr>
                                                <td class="match"><b>Mother Name</b> :</td>
                                                <td class="match">Piper Ingram</td>
                                                <td rowspan="3" class="text-center"><img class="guardian_photo" width="85" height="85" width="" src="https://durbarit.com/school/public/uploads/student/th_1597511023.jpg" alt=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="match"><b>Mother Phone </b> :</td>
                                                <td class="match">+1 (265) 289-9788</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="match"><b>Mother Occupation </b> :</td>
                                                <td class="match">Et unde nisi excepte</td>
                                            </tr>

                                            <tr>
                                                <td class="match"><b>Guardian Name </b> :</td>
                                                <td class="match">Cynthia Short</td>
                                                <td rowspan="3" class="text-center"><img class="guardian_photo" width="85" height="85" width="" src="https://durbarit.com/school/public/uploads/student/th_1597511023.jpg" alt=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="match"><b>Guardian Email </b> :</td>
                                                <td class="match">wagekyjiz@mailinator.com</td>
                                            </tr>

                                            <tr>
                                                <td class="match"><b>Guardian Name </b> :</td>
                                                <td class="match">Cynthia Short</td>
                                                
                                            </tr>
                                            
                                            <tr>
                                                <td class="match"><b>Guardian Relation </b> :</td>
                                                <td class="match">Ea autem quidem pari</td>
                                                <td></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="match"><b>Guardian Phone </b> :</td>
                                                <td class="match">+1 (502) 469-5331</td>
                                                <td></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="match"><b>Guardian Occupation </b> :</td>
                                                <td class="match">Corporis dolorem sun</td>
                                                <td></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="match"><b>Guardian Address </b> :</td>
                                                <td class="match">Eos vero aut a sunt</td>
                                                <td></td>
                                            </tr>
                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="route_info information_border">
                                <div class="card-header">
                                    <h6 class="p-0 m-0">Route details</h6>
                                </div>
                                <div class="table-responsive">

                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <td class="w-50"><b>Route</b>  :</td>
                                                <td class="w-50"> 
                                                    N/A
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="w-50"><b>Vehicle Number</b>  :</td>
                                                <td class="w-50"> 
                                                    N/A
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="miscellaneous_info information_border">
                                <div class="card-header">
                                    <h6 class="p-0 m-0">Miscellaneous Details</h6>
                                </div>
                                <div class="table-responsive">

                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <td class="w-50"><b>Blood group</b>  :</td>
                                                <td class="w-50"> B+</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="w-50"><b>Height</b>  :</td>
                                                <td class="w-50"> Quam provident non</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="w-50"><b>Weight</b>  :</td>
                                                <td class="w-50"> Labore rem doloribus</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="w-50"><b>Previous School Details</b>  :</td>
                                                <td class="w-50"> N/A</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="w-50"><b>Date of birth ID No / NID No</b>  :</td>
                                                <td class="w-50"> Eiusmod culpa possi</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div  class="fees_information tab_content mt-2">
                            
                                                             
                                                             
                                                             
                                                        <div class="salary_top_card_area">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="salary_top_card">
                                            <div class="card_heading">
                                                <h6 class="text-black"><b>Total Paid Fees</b></h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                   <b>0</b> 
                                                </div>
                                                <div class="col-md-4">
                                                    <i class="far fa-money-bill-alt"></i>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="col-md-3">
                                        <div class="salary_top_card">
                                            <div class="card_heading">
                                                <h6 class="text-black"><b>Total Due Fess</b></h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                   <b>1110</b> 
                                                </div>
                                                <div class="col-md-4">
                                                    <i class="far fa-money-bill-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="salary_top_card">
                                            <div class="card_heading">
                                                <h6 class="text-black"><b>Total Paid Fine</b></h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                   <b>0</b> 
                                                </div>
                                                <div class="col-md-4">
                                                    <i class="far fa-money-bill-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="salary_top_card">
                                            <div class="card_heading">
                                                <h6 class="text-black"><b>Total Amount</b></h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                   <b>1110</b> 
                                                </div>
                                                <div class="col-md-4">
                                                    <i class="far fa-money-bill-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            											
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="fees_table table-responsive mt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Fees Type</th>
                                                    <th>Fees Group</th>
                                                    <th>Month</th>
                                                    <th>Mode</th>
                                                    <th>Year</th>
                                                    <th>P.ID</th>
                                                    <th>P.Date</th>
                                                    <th>Status</th>
                                                    <th>Amount</th>
                                                    <th>Discount</th>
                                                    <th>Fine</th>
                                                    <th>Paid</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                                                                <tr class="text-center">
                                                    <td>Fees type</td>
                                                    <td>Fees group 1</td>
                                                    <td>August</td>
                                                                                                            <td>N/A</td>
                                                                                                        <td>2020</td>
                                                    <td></td>
                                                    <td>N/A</td>
                                                    <td><span class="badge badge-danger py-1">UnPaid</span></td>
                                                    <td>
                                                        1000
                                                    </td>
                                                    
                                                    <td>
                                                        0
                                                    </td>
                                                    
                                                    <td>
                                                        0
                                                    </td>
                                                        
                                                    <td>
                                                        0
                                                    </td>
                                                    
                                                </tr>
                                                                                                <tr class="text-center">
                                                    <td>Fees type</td>
                                                    <td>Fees group 1</td>
                                                    <td>August</td>
                                                                                                            <td>N/A</td>
                                                                                                        <td>2020</td>
                                                    <td></td>
                                                    <td>N/A</td>
                                                    <td><span class="badge badge-danger py-1">UnPaid</span></td>
                                                    <td>
                                                        10
                                                    </td>
                                                    
                                                    <td>
                                                        0
                                                    </td>
                                                    
                                                    <td>
                                                        0
                                                    </td>
                                                        
                                                    <td>
                                                        0
                                                    </td>
                                                    
                                                </tr>
                                                                                                <tr class="text-center">
                                                    <td>Fees type</td>
                                                    <td>Fees group 1</td>
                                                    <td>August</td>
                                                                                                            <td>N/A</td>
                                                                                                        <td>2020</td>
                                                    <td></td>
                                                    <td>N/A</td>
                                                    <td><span class="badge badge-danger py-1">UnPaid</span></td>
                                                    <td>
                                                        100
                                                    </td>
                                                    
                                                    <td>
                                                        0
                                                    </td>
                                                    
                                                    <td>
                                                        0
                                                    </td>
                                                        
                                                    <td>
                                                        0
                                                    </td>
                                                    
                                                </tr>
                                                                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div  class="attendance_information tab_content mt-2">
                                                                                    <div class="salary_top_card_area">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="salary_top_card">
                                            <div class="card_heading">
                                                <h6 class="text-black"><b>Total present</b></h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                   <b>
                                                                                                                    0%      
                                                                                                            </b> 
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <i class="far fa-calendar-check"></i>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="col-md-4">
                                        <div class="salary_top_card">
                                            <div class="card_heading">
                                                <h6 class="text-black"><b>Total absent</b></h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                   <b>
                                                                                                                    0%      
                                                                                                            </b> 
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <i class="far fa-calendar-check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="salary_top_card">
                                            <div class="card_heading">
                                                <h6 class="text-black"><b>Total late</b></h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                   <b>
                                                                                                                    0%      
                                                                                                            </b> 
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <i class="far fa-calendar-check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <hr class="p-0 m-0 mt-2">
                            <div class="salary_sheets mt-2">
                                <div class="table-responsive">
                                    <div class="table-responsive attendance_table">
                                        <table  class="table table-bordered table-hover mb-2">
                                            <thead>
                                                <tr class="text-left">
                                                    <th>Month</th>
                                                    <th>Present</th>
                                                    <th>Absent</th>
                                                    <th>Half-day</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                                
                                                                                                                                                        <tr class="text-left">
                                                        <td>January</td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                    </tr>
                                                                                                                                                        <tr class="text-left">
                                                        <td>February</td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                    </tr>
                                                                                                                                                        <tr class="text-left">
                                                        <td>March</td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                    </tr>
                                                                                                                                                        <tr class="text-left">
                                                        <td>April</td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                    </tr>
                                                                                                                                                        <tr class="text-left">
                                                        <td>May</td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                    </tr>
                                                                                                                                                        <tr class="text-left">
                                                        <td>June</td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                    </tr>
                                                                                                                                                        <tr class="text-left">
                                                        <td>July</td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                    </tr>
                                                                                                                                                        <tr class="text-left">
                                                        <td>August</td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                    </tr>
                                                                                                                                                        <tr class="text-left">
                                                        <td>September</td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                    </tr>
                                                                                                                                                        <tr class="text-left">
                                                        <td>October</td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                    </tr>
                                                                                                                                                        <tr class="text-left">
                                                        <td>November</td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                    </tr>
                                                                                                                                                        <tr class="text-left">
                                                        <td>December</td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                        <td>
                                                              
                                                                <b>N/A</b>   
                                                                                                                    </td>
                                                    </tr>
                                                                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    
<section>
@endsection