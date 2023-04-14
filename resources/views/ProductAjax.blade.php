<script>
    $(document).ready(function() {
        $(document).on('click', '.add_product', function(e) {
            e.preventDefault();
            let name = $('#name').val();
            let price = $('#price').val();
            //console.log(name+price);

            $.ajax({
                url: "{{ route('add.product') }}",
                method: 'post',
                data: {
                    name: name,
                    price: price
                },
                success: function(res) {
                    if (res.status == 'success') {
                        $('#exampleModal').modal('hide');
                        $('#addProductFrom')[0].reset();
                        $('.table').load(location.href + ' .table');
                        Command: toastr["success"](
                            "Product Added.")

                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                },
                error: function(err) {
                    let error = err.responseJSON;
                    $.each(error.errors, function(index, value) {
                        $('.errMsgContainer').append('<span class="text-danger">' +
                            value + '</span>' + '<br>');
                    });
                }
            });
        });

        //Show porduct update from

        $(document).on('click', '.updateProduct_From', function() {
            let id = $(this).data('id');
            let name = $(this).data('name');
            let price = $(this).data('price');

            $('#up_id').val(id);
            $('#up_name').val(name);
            $('#up_price').val(price);
        });




        //Update Again...
        $(document).on('click', '.update_product ', function(e) {
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_name = $('#up_name').val();
            let up_price = $('#up_price').val();
            //console.log(name+price);

            $.ajax({
                url: "{{ route('update.product') }}",
                method: 'post',
                data: {
                    up_id: up_id,
                    up_name: up_name,
                    up_price: up_price
                },
                success: function(res) {
                    if (res.status == 'success') {
                        $('#UpdateProductFrom')[0].reset();

                        $('#UpdateModal').modal('hide');
                        $('#UpdateProductFrom')[0].reset();
                        location.reload();

                    }
                },
                error: function(err) {
                    let error = err.responseJSON;
                    $.each(error.errors, function(index, value) {
                        $('.errMsgContainer').append('<span class="text-danger">' +
                            value + '</span>' + '<br>');
                    });
                }
            });
        });


        //Delete Product...
        $(document).on('click', '.delete_product ', function(e) {
            e.preventDefault();
            let product_id = $(this).data('id');


            if (confirm('Ary you sure to delete This Product??')) {
                $.ajax({
                    url: "{{ route('delete.product') }}",
                    method: 'post',
                    data: {
                        product_id: product_id
                    },
                    success: function(res) {
                        if (res.status == 'success') {
                            $('.table').load(location.href + ' .table');

                            Command: toastr["success"](
                                "The Product is deleted.",
                                "Success")

                            toastr.options = {
                                "closeButton": true,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }


                        }
                    }
                });
            }


        });


        //Pagination
        $(document).on('click', '.pagination a', function(e){
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1]
            product(page)
        });

        function product(page){
            $.ajax({
                url: "/pagination/paginate-data?page="+page,
                success:function(res){
                    $('.table-data').html(res);
                }

            })
        }

        //Search Product
        $(document).on('keyup',function(e){
            e.preventDefault();
            let search_string = $('#search').val();
            console.log(search_string);

            $.ajax({
                url: "{{ route('search.product') }}",
                method:"GET",
                data:{search_string:search_string},
                success:function(res){
                    $('.table-data').html(res);
                    if(res.status=='nating_fund'){
                        $('.table-data').html('<span class="text-danger">'+'Nathing Found'+'</span>');
                    }
                }
            });
        });
    });
</script>
