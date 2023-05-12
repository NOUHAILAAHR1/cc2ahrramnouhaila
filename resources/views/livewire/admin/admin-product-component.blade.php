<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display:block ;
        }
        .card{

            width: 900px;margin-left: 260px


        }

    </style>
    <style>
        .tabl{margin-top: 35px;
            margin-left: 150px;
            line-height: 30px;
            border: 1px ;
            width: 150px;
            position: absolute;
        }
        .tabl :hover{
            font-size: 23px
        }

         li{
            list-style: none;
        }
        table{
            border: 1rem solid;
        }
    </style>





    <main class="main">
        <div class="slid">
            <div class="tabl">
                <table  >

                    <ul class="sub-menu">
                    <tr><li><a href="{{route('admin.dashboard')}}">Dashboard</a></li></tr><hr>
                    <tr><li><a href="{{route('admin.products')}}">Products</a></li></tr><hr>
                    <tr><li><a href="{{route('admin.categories')}}">Categories</a></li></tr><hr>
                    <tr><li><a href="{{route('admin.orders')}}">Orders</a></li></td><hr>
                    <tr><li><a href="{{route('admin.users')}}">Users</a></li></td>

                </ul>
                </table>
            </div>



        <div>
        <div class="page-header breadcrumb-wrap">
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class ="card">
                            <div class ="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        All Products
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.product.add')}} "class="btn btn-success float-end">Add New Product</a>
                                    </div>
                            </div>
                            <div class ="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                                @endif
                                <table class="table tabel-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = ($products->currentPage()-1)*$products->perPage();                                        @endphp
                                        @foreach ( $products as $product )
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td><img  src="{{ asset('assets/imgs/products')}}/{{ $product->image}}" alt="{{$product->name}}" width="60"></td>
                                            <td>{{$product ->name}}</td>
                                            <td>{{$product ->stock_status}}</td>
                                            <td>{{$product ->regular_price}}</td>
                                            <td>{{$product ->category->name}}</td>
                                            <td>{{$product ->created_at}}</td>

                                            <td>
                                                <a  href="{{route('admin.product.edit',['product_id'=>$product->id])}}" class="text-info">Edit </a>
                                                <a  href="#" onclick="deleteConfirmation({{$product->id}})" class="text-danger" >Delete </a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{$products->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> Do you want to delete this record?</h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"  data-bs-target="#deleteConfirmation" >Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="deleteProduct()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @push('scripts')
        <script>
            function deleteConfirmation(id){
                @this.set('product_id',id);
                $('#deleteConfirmation').modal('show');
            }
            function  deleteProduct()
                {
                    @this.call('deleteProduct');
                    $('#deleteConfirmation').modal('hide');
                }

        </script>

    @endpush
