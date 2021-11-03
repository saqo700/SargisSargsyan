@extends('MainBlade.online-market')


@section('content')
    @include('includes.messages')
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-outline mb-4">
                            <input name="name" type="text" id="form3Example1cg" class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example1cg">Your Name</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input name="email" type="email" id="form3Example3cg" class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example3cg">Your Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input name="password" type="password" id="form3Example4cg"
                                   class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example4cg">Password</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input name="img" type="file" id="form3Example4cg" class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example4cg">Download files</label>
                        </div>

                        <div class="d-flex justify-content-center">
                            <input type="submit" value="Register"
                                   class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                        </div>

                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login"
                                                                                                class="fw-bold text-body"><u>Login
                                    here</u></a></p>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
