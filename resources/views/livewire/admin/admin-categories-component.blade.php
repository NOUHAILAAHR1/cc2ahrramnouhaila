<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display:block ;
        }
        .card{

            width: 900px;margin-left: 260px;
            margin-top: 20px


        }

    </style>
    <style>
        .tabl{margin-top: -15px;
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
                                        All Categories
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.category.add' )}}" class="btn btn-success float-end">Add New Category</a>
                                    </div>
                            </div>
                            <div class ="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                                @endif
                                <table class="table tabel-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>slug</th>
                                            <th>Popular</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = ($categories->currentPage()-1)*$categories->perPage();                                        @endphp
                                        @foreach ( $categories as $category )
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td><img src="{{asset('assets/imgs/categories')}}/{{$category->image}} "alt="{{$category->name}}" width="60"/></td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td>{{$category->is_popular == 1 ? 'Yes':'No'}}</td>

                                            <td>
                                                <a href="{{route('admin.category.edit',['category_id'=>$category->id])}}" class="text-info">Edit</a>
                                                <a href="#" class="text-danger" onclick="deleteConfirmation({{$category->id}})" style="margin-left:20px">Delete</a>
                                            </td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{$categories->links()}}
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
                        <button type="button" class="btn btn-danger" onclick=" deleteCategory()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @push('scripts')
        <script>
            function deleteConfirmation(id){
                @this.set('category_id',id);
                $('#deleteConfirmation').modal('show');
            }
            function deleteCategory()
                {
                    @this.call('deleteCategory');
                    $('#deleteConfirmation').modal('hide');
                }

        </script>

    @endpush



