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

                <button type="button" class="btn btn-primary updateProduct_From" data-toggle="modal" data-target="#UpdateModal"
                data-id="{{$product->id}}"
                data-name="{{$product->name}}"
                data-price="{{$product->price}}"
                >
                    Update
                  </button>
                  @include('Update')
                <a href="">
                    <button type="button" class="btn btn-danger delete_product"
                    data-id="{{$product->id}}"

                    >Delate</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex">
    {!! $products->links() !!}
</div>
