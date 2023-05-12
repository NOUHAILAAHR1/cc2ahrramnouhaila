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
        .tabl{margin-top: 40px;
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

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span>   Edit Product
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class ="card">
                            <div class ="card-header">
                                <div class ="row">
                                    <div class="col-md-6">
                                        Add New  Product
                                    </div>
                                    <div class="col-md-6" >
                                        <a href="{{route('admin.products')}}" class="btn btn-success float-end">All Products</a>
                                    </div>
                                </div>
                            </div>
                            <div class ="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                            {{Session::get('message') }}
                                    </div>
                                @endif
                                <form wire:submit.prevent="updateProduct">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text"  name="name" class="from-control" placeholder="Enter product name " wire:model="name" wire:model="generateSlug">
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="Slug" class="form-label">Slug</label>
                                        <input type="text" name="Slug"  class="from-control" placeholder="Enter product slug " wire:model="slug">
                                        @error('slug')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="Short_description" class="form-label">Short Description</label>
                                        <textarea class="from-control"  name="Short_description"  placeholder="Enter Short description " wire:model="short_description"></textarea>
                                        @error('short_description')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="description" class="form-label"> Description</label>
                                        <textarea class="from-control"  name="description"  placeholder="Enter  description " wire:model="description"></textarea>
                                        @error('description')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="regular_price" class="form-label">Regular Price</label>
                                        <input type="text" name="regular_price"  class="from-control" placeholder="Enter regular price " wire:model="regular_price">
                                        @error('regular_price')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="sale_price" class="form-label">Sale Price</label>
                                        <input type="text" name="sale_price"  class="from-control" placeholder="Enter sale price " wire:model="sale_price">
                                        @error('sale_price')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="sku" class="form-label">SKU</label>
                                        <input type="text" name="sku"  class="from-control" placeholder="Enter SKU " wire:model="sku">
                                        @error('sku')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="stock_status" class="form-label">Stock Status</label>
                                        <select class="from-control" name="stock_status" wire:model="stock_status" >
                                            <option value="instock">Instock</option>
                                            <option  value="outofstock">Out of stock</option>

                                        </select>
                                        @error('stock_status')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="featured" class="form-label">Featured</label>
                                        <select class="from-control" name="featured" wire:model="featured">
                                            <option value="0">No</option>
                                            <option  value="1">Yes</option>

                                        </select>
                                        @error('featured')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="quntity" class="form-label">Quantity</label>
                                        <input type="text" name="quntity"  class="from-control" placeholder="Enter quntity " wire:model="quantity">
                                        @error('quantity')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image"  class="from-control" wire:model="newimage" >
                                        @if($newimage)
                                            <img src="{{$newimage->temporaryUrl()}}" width="120" />
                                        @else
                                          <img src="{{asset('assets/imgs/products')}}/{{$image}}" width="120" />
                                        @endif
                                        @error('newimage')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select class="category_id" name="category_id" wire:model="category_id">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                 <option value="{{$category->id}}">{{$category->name}}</option>

                                            @endforeach

                                        </select>
                                        @error('category_id')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>


                                    <button type="submit" class="btn btn-primary float-end" >Update</button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

