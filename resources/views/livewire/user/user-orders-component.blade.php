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
                    <tr><li><a href="{{route('user.dashboard')}}">Dashboard</a></li></tr><hr>
                    <tr><li><a href="{{route('user.orders')}}">My Orders</a></li></td><hr>


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
                        <h4 class="mb-0">My Orders</h4>
                    </div>
                    <div class="card-body">
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
                                        <th>Action</th>
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
                                        <td><a href="{{ route('user.orderdetails',['order_id'=>$order->id]) }}" class="btn-info btn-sm">Details</td>
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
