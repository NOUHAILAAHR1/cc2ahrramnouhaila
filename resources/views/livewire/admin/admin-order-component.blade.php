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
            margin-top: 15px


        }

    </style>
    <style>
        .tabl{margin-top: 10px;
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


    <div class="container" style="padding: 30px 0;">
        <div class="card">
        <div class="row">

            <div class="col-ms-12">
                <div class="card-header">
                    <div class="card-header">
                        <h4 class="mb-0">All Orders</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::has('order_message'))
                            <div class="alert alert-success" role="alert">{{  Session::get('order_message')}}</div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>OrderId</th>
                                        <th>Subtotal</th>
                                        <th>Discount</th>
                                        <th>Tax</th>
                                        <th>Total</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Zipcode</th>
                                        <th>Status</th>
                                        <th>Order Date</th>
                                        <th colspan="2" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->subtotal }}DH</td>
                                        <td>{{ $order->discount }}DH</td>
                                        <td>{{ $order->tax }}DH</td>
                                        <td>{{ $order->total }}DH</td>
                                        <td>{{ $order->firstname }}</td>
                                        <td>{{ $order->lastname }}</td>
                                        <td>{{ $order->mobile }}</td>
                                        <td>{{ $order->email}}</td>
                                        <td>{{ $order->zipcode }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->created_at}}</td>
                                        <td><a href="{{ route('admin.orderdetails',['order_id'=>$order->id]) }}" class="btn-info btn-sm">Details</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Status</button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateOrderStatus({{ $order->id }},'delivered')">Delivered</a></li>
                                                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateOrderStatus({{ $order->id }},'canceled')">Canceled</a></li>
                                                    </ul>
                                            </div>
                                         </td>
                                    </tr>


                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                        {{ $orders->links() }}

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
