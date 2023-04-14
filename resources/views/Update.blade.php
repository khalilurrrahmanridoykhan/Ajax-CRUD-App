<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="UpdateModalLabel" aria-hidden="true">
    <form action="" method="post" id="UpdateProductFrom">


        @csrf
        <input type="hidden" id="up_id">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="UpdateModalLabel">Update Product</h5>
                    <br>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="errMsgContainer m-5">
                </div>
                <div class="container form-group">
                    <label for="">Product Name:</label>
                    <input type="text" name="up_name" id="up_name" class="form-control" placeholder=""
                        aria-describedby="helpId">
                </div>
                <div class="container form-group">
                    <label for="">Price:</label>
                    <input type="text" name="up_price" id="up_price" class="form-control" placeholder=""
                        aria-describedby="helpId">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary update_product">Update changes</button>
                </div>
            </div>
        </div>

    </form>
</div>
