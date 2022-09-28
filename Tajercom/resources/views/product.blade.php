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
    @include('layout.nav')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
    
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
    
                <div class="card">
                    <div class="card-header">
                        <h4>Add your product</h4>
                    </div>
                    <div class="card-body">
    
                        <form action="{{ url('add-product') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
    
                            <div class="form-group mb-3">
                                <label for="">Product Name</label>
                                <input type="text" name="Product_name" class="form-control"required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Product price</label>
                                <input type="number" name="Product_price" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Product description</label><br>
                                <textarea name="Product_dec" id="" cols="30" rows="5" required></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Product image</label><br>
                                <input type="file" name="Product_img" class="form-control " required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Product Catagory</label>
                                <select name="cat" class="form-control">
                                    @foreach($category as $data)
                                    <option value="{{$data->category_name}}">{{$data->category_name}}</option>

                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group mb-3">
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
    
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </div>












    @include('layout.footer')




        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>
    
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>


</html>