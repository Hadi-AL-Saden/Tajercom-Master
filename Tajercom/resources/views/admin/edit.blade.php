<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update User
                        <a href="{{ url('user') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-user/'.$User->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">User Name</label>
                            <input type="text" name="name" value="{{$User->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">User Email</label>
                            <input type="text" name="email" value="{{$User->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">User Phone</label>
                            <input type="number" name="phone_num" value="{{$User->phone_num}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">User address</label>
                            <input type="text" name="address" value="{{$User->address}}" class="form-control">
                        </div>


                        <form action="{{ url('save-User') }}" method="POST" enctype="multipartform-data">
                        
                        <div class="form-group mb-3">
                            <div class="container">
                                <img class="img" src="{{asset('upload/avatar/'.$User->avatar)}}" width="80px" height="80px"  alt="User image">
                            </div>
                        
                            <label for="">User Image</label>
                            <input type="file" name="avatar" value="{{$User->avatar}}" class="form-control">
                        </div>
                        {{-- <div class="form-group mb-3">
                            <label for="">Student Course</label>
                            <input type="text" name="course" value="{{$user->course}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Section</label>
                            <input type="text" name="section" value="{{$user->section}}" class="form-control">
                        </div> --}}
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>

                    </form></form>

                </div>
            </div>
        </div>
    </div>
</div>