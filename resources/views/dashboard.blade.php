
        @extends('layouts.app')


        @section('content')
                   <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>   

                   <div class="row">
                    
                             <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-end'></i>
                                        <h6 class="text-uppercase mt-0">Total Users</h6>
                                        <h2 class="my-2" id="active-users-count">{{ $userCount }}</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2">
                                                <span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                            <span class="text-nowrap">Since last month</span>  
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-end'></i>
                                        <h6 class="text-uppercase mt-0">Active Users</h6>
                                        <h2 class="my-2" id="active-users-count">{{$activeUser}}</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                            <span class="text-nowrap">Since last month</span>  
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-end'></i>
                                        <h6 class="text-uppercase mt-0">Today's Registration</h6>
                                        <h2 class="my-2" id="active-users-count">{{$todaysRegistrations}}</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                            <span class="text-nowrap">Since last month</span>  
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-end'></i>
                                        <h6 class="text-uppercase mt-0">Today's Activity</h6>
                                        <h2 class="my-2" id="active-users-count">121</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                            <span class="text-nowrap">Since last month</span>  
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-end'></i>
                                        <h6 class="text-uppercase mt-0">Total Business</h6>
                                        <h2 class="my-2" id="active-users-count">121</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                            <span class="text-nowrap">Since last month</span>  
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-end'></i>
                                        <h6 class="text-uppercase mt-0">Pending Deposit</h6>
                                        <h2 class="my-2" id="active-users-count">{{ $pendingDeposit }}</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                            <span class="text-nowrap">Since last month</span>  
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-end'></i>
                                        <h6 class="text-uppercase mt-0">Daily Roi</h6>
                                        <h2 class="my-2" id="active-users-count">{{ $Roiincome }}</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                            <span class="text-nowrap">Since last month</span>  
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-end'></i>
                                        <h6 class="text-uppercase mt-0">Direct Income</h6>
                                        <h2 class="my-2" id="active-users-count">{{ $Directincome }}</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                            <span class="text-nowrap">Since last month</span>  
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-end'></i>
                                        <h6 class="text-uppercase mt-0">Total Swap</h6>
                                        <h2 class="my-2" id="active-users-count">121</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                            <span class="text-nowrap">Since last month</span>  
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-end'></i>
                                        <h6 class="text-uppercase mt-0">Today's Swap</h6>
                                        <h2 class="my-2" id="active-users-count">121</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                            <span class="text-nowrap">Since last month</span>  
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                            </div>
                   </div>
        @endsection
