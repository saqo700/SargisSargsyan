@extends('MainBlade.online-market')

@section('content')

    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">update your details</h2>

                    <form action="/users" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-outline mb-4">
                            <input name="name" type="text" value="{{$user->name}}" id="form3Example1cg" class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example1cg">Update Name</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input name="email" type="email" value="{{$user->email}}" id="form3Example3cg" class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example3cg">Update Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input name="password" type="password" id="form3Example4cg"
                                   class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example4cg">Update Password</label>
                        </div>


                        <div class="d-flex justify-content-center">
                            <input type="submit" value="Update"
                                   class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                        </div>

                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login"
                                                                                                class="fw-bold text-body"><u>Login
                                    here</u></a></p>

                    </form>


@endsection
