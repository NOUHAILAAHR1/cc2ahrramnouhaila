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
        .tabl{margin-top: -30px;
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
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class ="card">
                            <div class ="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        All Users
                                    </div>

                            </div>
                            <div class ="card-body">

                                <table class="table tabel-striped">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $user as $product )
                                        <tr>


                                            <td>{{$product ->id}}</td>
                                            <td>{{$product ->name}}</td>
                                            <td>{{$product ->email}}</td>
                                            <td>{{$product ->utype}}</td>


                                            <td>

                                                <a  href="#" onclick="deleteConfirmation({{$product->id}})" class="text-danger" >Delete </a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

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
                @this.set('user_id',id);
                $('#deleteConfirmation').modal('show');
            }
            function  deleteProduct()
                {
                    @this.call('deleteProduct');
                    $('#deleteConfirmation').modal('hide');
                }

        </script>

    @endpush
