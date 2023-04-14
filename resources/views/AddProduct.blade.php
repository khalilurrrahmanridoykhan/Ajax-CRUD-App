<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form action="" method="post" id="addProductFrom">


        @csrf
        <div class="modal-dialog" role="document">



            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                    <br>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="errMsgContainer m-5">
                </div>
                <div class="container form-group">
                  <label for="">Product Name:</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="container form-group">
                    <label for="">Price:</label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary add_product">Save changes</button>
                </div>
            </div>
        </div>

    </form>
</div>
