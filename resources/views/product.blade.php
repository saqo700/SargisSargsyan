@extends('MainBlade.online-market')


@section('content')
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Create Product</h2>
                    <form action="" method="post">
                        @csrf
                        <div class="form-outline mb-4">
                            <input name="product" type="text" id="form3Example3cg"
                                   class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example3cg">Product Name</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input name="price" type="number" id="form3Example4cg"
                                   class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example4cg">Product Price</label>
                        </div>
                        <select name="category_id" id="">
                            @foreach($categories as $category)
                                <option  value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                        </select>
                        <div class="d-flex justify-content-center">
                            <input type="submit" value="Create"
                                   class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
