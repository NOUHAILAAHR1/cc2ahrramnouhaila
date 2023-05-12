<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-defaut">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">Order Details</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.orders') }}" class=" btn btn-success float-end" >All Orders</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table-light">
                            <tr>
                                <th><strong>Order Id</strong></th>
                                <td>{{ $order->id }}</td>
                                <th><strong>Ordar Date</strong></th>
                                <td>{{ $order->created_at}}</td>
                                <th><strong>Status</strong></th>
                                <td>{{ $order->status }}</td>
                                @if($order->status == "delivered")
                                <th><strong>Delivery Date</strong></th>
                                <td>{{ $order->delivered_date }}</td>
                                @elseif($order->status == "cancaled")
                                <th><strong>Cancallation Date</strong></th>
                                <td>{{ $order->cancaled_date}}</td>
                                @endif
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="card card-defaut">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">Order Items</h4>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table shopping-summery text-center clean">
                            <thead>
                                <tr class="main-heading">
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                                    @foreach($order->orderItem as $item)
                                <tbody>
                                            <tr>
                                                <td class="image product-thumbnail"><img src="{{asset('assets/imgs/products')}}/{{ $item->product->image }}" alt="{{ $item->product->name }}"></td>
                                                <td class="product-des product-name">
                                                    <h5 class="product-name"><a href="#">{{ $item->product->name }}</a></h5>
                                                    <p class="font-xs">{{ $item->product->short_description}}
                                                    </p>
                                                </td>
                                                <td class="price" data-title="Price"><span>{{ $item->product->regular_price }} </span></td>
                                                <td class="text-center" data-title="Stock">
                                                    <h5>{{ $item->quantity }}</h5>
                                                </td>
                                            </tr>
                            </tbody>
                           @endforeach
                        </table>
                    </div>
                    <div class="summary">
                        <div class="order-summary">
                            <h5 class="mb-0">Order Summary</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="cart_total_label"><strong>Subtotal</strong></td>
                                                <td class="cart_total_amount"><span >{{$order->subtotal}}DH</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label"><strong>Tax</strong></td>
                                                <td class="cart_total_amount"><span >{{$order->tax}}DH</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label"><strong>Shipping</strong></td>
                                                <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Free Shipping</td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label"><strong>Total</strong></td>
                                                <td class="cart_total_amount"><strong><span >{{$order->total}}DH</span></strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
<br>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-defaut">
                    <div class="card-header">
                        <h4 class="mb-0">Billing Details</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                                <tr>
                                    <th ><strong>First Name</strong></th>
                                    <td ><span >{{$order->firstname}}</span></td>
                                    <th ><strong>Last Name </strong></th>
                                    <td class="cart_total_amount"><span >{{$order->lastname}}</span></td>
                                </tr>
                                <tr>
                                    <th > <strong>Phone </strong></th>
                                    <td ><span >{{$order->mobile}}</span></td>
                                    <th > <strong>Email </strong></th>
                                    <td ><span >{{$order->email}}</span></td>
                                </tr>
                                <tr>
                                    <th > <strong>Line 1 </strong></th>
                                    <td ><span >{{$order->line1}}</span></td>
                                    <th ><strong>line 2 </strong></th>
                                    <td ><span >{{$order->line2}}</span></td>
                                </tr>
                                <tr>
                                    <th > <strong>City </strong></th>
                                    <td ><span >{{$order->city}}</span></td>
                                    <th ><strong>Province </strong></th>
                                    <td ><span >{{$order->province}}</span></td>
                                </tr>
                                <tr>
                                    <th > <strong>Country </strong></th>
                                    <td ><span >{{$order->country}}</span></td>
                                    <th > <strong>Zipcode </strong></th>
                                    <td ><span >{{$order->zipcode}}</span></td>
                                </tr>
                        </table>

                    </div>

                </div>
            </div>
        </div>
<br>
        @if($order->is_shipping_different)
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-defaut">
                        <div class="card-header">
                            <h4 class="mb-0">Shipping Details</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th ><strong>First Name</strong></th>
                                    <td ><span >{{$order->shipping->firstname}}</span></td>
                                    <th ><strong>Last Name </strong></th>
                                    <td class="cart_total_amount"><span >{{$order->shipping->lastname}}</span></td>
                                </tr>
                                <tr>
                                    <th > <strong>Phone </strong></th>
                                    <td ><span >{{$order->shipping->mobile}}</span></td>
                                    <th > <strong>Email </strong></th>
                                    <td ><span >{{$order->shipping->email}}</span></td>
                                </tr>
                                <tr>
                                    <th > <strong>Line 1 </strong></th>
                                    <td ><span >{{$order->shipping->line1}}</span></td>
                                    <th ><strong>line 2 </strong></th>
                                    <td ><span >{{$order->shipping->line2}}</span></td>
                                </tr>
                                <tr>
                                    <th > <strong>City </strong></th>
                                    <td ><span >{{$order->shipping->city}}</span></td>
                                    <th ><strong>Province </strong></th>
                                    <td ><span >{{$order->shipping->province}}</span></td>
                                </tr>
                                <tr>
                                    <th > <strong>Country </strong></th>
                                    <td ><span >{{$order->shipping->country}}</span></td>
                                    <th > <strong>Zipcode </strong></th>
                                    <td ><span >{{$order->shipping->zipcode}}</span></td>
                                </tr>
                        </table>

                        </div>

                    </div>
                </div>
            </div>
        @endif
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-defaut">
                    <div class="card-header">
                        <h4 class="mb-0">Transaction</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th ><strong>Transaction Mode</strong></th>
                                <td ><span >{{$order->transaction->mode}}</span></td>
                            </tr>
                            <tr>
                                <th ><strong>Status</strong></th>
                                <td ><span >{{$order->transaction->status}}</span></td>
                            </tr>
                            <tr>
                                <th ><strong>Transaction Date</strong></th>
                                <td ><span >{{$order->transaction->created_at}}</span></td>
                            </tr>
                    </table>


                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
