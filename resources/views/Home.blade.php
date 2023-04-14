@extends('Main')

@section('Main-section')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="my-5 text-center">Laravel Ajex CRUD APP</h2>
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                Add Product
              </button>
              @include('AddProduct')
            <div class="form-group">
              <input type="search" name="" id="search" class="form-control" placeholder="Search Product..." aria-describedby="helpId">
            </div>
            <div class="table-data">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key=>$product)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>

                                <button type="button" class="btn btn-primary  updateProduct_From" data-toggle="modal" data-target="#UpdateModal"
                                data-id="{{$product->id}}"
                                data-name="{{$product->name}}"
                                data-price="{{$product->price}}"
                                >
                                    Update
                                  </button>
                                  @include('Update')
                                    <button type="button" class="btn btn-danger delete_product"
                                    data-id="{{$product->id}}"

                                    >Delate</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
