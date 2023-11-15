@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add Admin Page </h4><br><br>

            @if ($errors->any())
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            @endif

            <form method="post" action="{{ route('admin.store') }}" id="myForm" >
                @csrf


            <div class="row mb-3 row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Admin Name </label>

                <div class="form-group col-sm-10">
                    <input class="form-control" id="name" type="text" name="name" required placeholder="Name">
                </div>
            </div>
            <!-- end row -->
            <div class=" mb-3 row">
                <label for="example-text-input" class="col-sm-2 col-form-label">UserName </label>

                <div class="form-group col-sm-10">
                    <input class="form-control" id="username" type="text" name="username" required placeholder="UserName">
                </div>
            </div>


            <!-- end row -->


  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Admin Email </label>
                <div class="form-group col-sm-10">

                        <input class="form-control" id="email" type="email" name="email" required placeholder="Email">

                </div>
            </div>
            <!-- end row -->


  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Password </label>
                <div class="form-group col-sm-10">
                    <input class="form-control" id="password" type="password" name="password" required="" placeholder="Password">
                </div>
            </div>
  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Password Confirmation </label>
                <div class="form-group col-sm-10">
                    <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required="" placeholder="Password Confirmation">
                </div>
            </div>
            <!-- end row -->





<input type="submit" class="btn btn-info waves-effect waves-light" value="Add Admin">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                },
                username: {
                    required : true,
                },
                 email: {
                    required : true,
                },
                password: {
                    required : true,
                },
                password_confirmation: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : 'Please Enter Your Name',
                },
                username: {
                    required : 'Please Enter Your UserName',
                },
                email: {
                    required : 'Please Enter Your Email',
                },
                password: {
                    required : 'Please Enter Your Password',
                },
                password_confirmation: {
                    required : 'Please Confirm Password',
                },
            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>



@endsection
