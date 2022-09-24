<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">



    <script src="https://kit.fontawesome.com/41d0e79cb4.js" crossorigin="anonymous"></script>





</head>
<body>
    

    <div class="container">
        <div class="main-body">
        
              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="main-breadcrumb bg-dark">
                <ol class="breadcrumb bg-dark">
                  <li class="breadcrumb-item  "><a href="/index">Home</a></li>
                  
                  <li class="breadcrumb-item text-primary " aria-current="page"><a href="/userProfiles">User Profile</a> </li>
                  <li class="breadcrumb-item text-info " aria-current="page">User Profile Edit</li>
                </ol>
              </nav>
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <form action="{{ url('update-user-img/'.Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        
                        <img src="{{asset('upload/avatar/'.Auth::user()->avatar)}}" class="rounded" width="150">
                          <div>  <label for="avatar">Eidt your image</label>
                        <input type="file"  name="avatar" value="{{Auth::user()->avatar }}"  class="form-control">
                            </div>
                        <div class="mt-3">
                          
            
                          
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Market Name</h6>
                            </div>
                            <div class="col-sm-9 ">
                                <input type="text" name="market_name" id="market_name" value="{{Auth::user()->market_name }}" class="form-control">
    
                            </div>
                          </div>
                        
                          {{-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                          <button class="btn btn-primary">Follow</button>
                          <button class="btn btn-outline-primary">Message</button> --}}
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary mt-3 ">Save</button>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    
                  </div>
                </form>
                  {{-- <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                        <span class="text-secondary">https://bootdey.com</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                        <span class="text-secondary">bootdey</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                        <span class="text-secondary">@bootdey</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                        <span class="text-secondary">bootdey</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                        <span class="text-secondary">bootdey</span>
                      </li>
                    </ul>
                  </div> --}}
                </div>
                
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <form action="{{ url('update-user/'.Auth::user()->id) }}" method="POST">
                        @csrf
                      <div class="row">
                        
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name:</h6>
                        </div>
                        <div class="col-sm-9 ">
                            <input name="name" type="text"value="{{Auth::user()->name }}"  class="form-control">
                          
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email:</h6>
                        </div>
                        <div class="col-sm-9 ">
                            <input name="email" type="text" value="{{Auth::user()->email }}"class="form-control">

                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone:</h6>
                        </div>
                        <div class="col-sm-9 ">
                            <input name="phone" type="text" value="{{Auth::user()->phone }}" class="form-control">

                        </div>
                      </div>
                
                      <hr>
                      {{-- <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          (320) 380-4539
                        </div>
                      </div> --}}
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address:</h6>
                        </div>
                        <div class="col-sm-9 ">
                            <input name="address" type="text" value="{{Auth::user()->address }}" class="form-control">

                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-primary ">Save</button>
                        </div>
                      </div>
                    </form> 
                    </div>
                  </div>
    
                
    
    
    
                </div>
              </div>
    
            </div>
        </div>
        {{-- @foreach ($fetc as $item)
        {{ $item->id }}
        @endforeach --}}
        


@include('layout.footer')
    
</body>
</html>