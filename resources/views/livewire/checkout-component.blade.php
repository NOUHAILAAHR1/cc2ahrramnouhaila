<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-25">
                                <h4>Billing Details</h4>
                            </div>
                            <form wire:submit.prevent="placeOrder">
                                <div class="form-group">
                                    <input type="text" required="" name="fname" placeholder="First name *" wire:model="firstname">
                                    @error('firstname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" name="lname" placeholder="Last name *" wire:model="lastname">
                                    @error('lastname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="phone" placeholder="Phone *" wire:model="mobile">
                                    @error('mobile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="email" placeholder="Email address *" wire:model="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="billing_address" required="" placeholder="Address *" wire:model="line1">
                                    @error('line1')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="billing_address2" required="" placeholder="Address line2" wire:model="line2">
                                    @error('line2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="city" placeholder="City / Town *" wire:model="city">
                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="state" placeholder="State / County *" wire:model="country">
                                    @error('country')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="province" placeholder="Province *" wire:model="province">
                                    @error('province')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="zipcode" placeholder="Postcode / ZIP *" wire:model="zipcode">
                                    @error('zipcode')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="ship_detail">
                                    <div class="form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input  class="form-check-input" id="flexCheckDefault" type="checkbox" name="different_address" value="1" wire:model="ship_to_different">
                                                <label for="flexCheckDefault" class="form-check-label"><span >Ship to a different address?</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @if($ship_to_different)
                                        <div id="collapseAddress" class="different_address">
                                            <div class="mb-25">
                                                <h4>Shipping Address</h4>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="fname" placeholder="First name *" wire:model="s_firstname">
                                                @error('s_firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="lname" placeholder="Last name *" wire:model="s_lastname">
                                                @error('s_lastname') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="text" name="phone" placeholder="Phone *" wire:model="s_mobile">
                                                @error('s_mobile') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="text" name="email" placeholder="Email address *" wire:model="s_email">
                                                @error('s_email') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="billing_address" required="" placeholder="Address *" wire:model="s_line1">
                                                @error('s_line1') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="billing_address2" required="" placeholder="Address line2" wire:model="s_line2">
                                                @error('s_line2') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="text" name="city" placeholder="City / Town *" wire:model="s_city">
                                                @error('s_city') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="text" name="state" placeholder="State / County *" wire:model="s_country">
                                                @error('s_country') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="text" name="province" placeholder="Province *" wire:model="s_province">
                                                @error('s_province') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="text" name="zipcode" placeholder="Postcode / ZIP *" wire:model="s_zipcode">
                                                @error('s_zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    @endif
                        </div>
                        <div class="col-md-6">
                            <div class="order_review">
                                <div class="mb-20">
                                    <h4>Your Orders</h4>
                                </div>
                                <div class="table-responsive order_table text-center">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach(Cart::instance('cart')->content() as $item)
                                                    <tr>
                                                        <td class="image product-thumbnail"><img src="{{asset('assets/imgs/products')}}/{{ $item->model->image }}" alt="#"></td>
                                                        <td>
                                                            <h5><a href="#">{{ $item->model->name }}</a></h5> <span class="product-qty">x{{ $item->qty }}</span>
                                                        </td>
                                                        <td>{{$item->subtotal}}</td>
                                                    </tr>
                                                @endforeach
                                                @if(Session::has('checkout'))
                                                    <tr>
                                                        {{-- @if(Cart::instance('cart')->count()>0) --}}{{-- {{Cart::subtotal()}} --}}
                                                            <th>SubTotal</th>
                                                            <td class="product-subtotal" colspan="2">{{Session::get('checkout')['subtotal']}}DH</td>
                                                    </tr>
                                                @endif
                                                @if(Session::has('checkout'))
                                                    <tr>
                                                        {{-- @if(Cart::instance('cart')->count()>0) --}}
                                                            <th>Tax</th>
                                                            <td class="product-subtotal" colspan="2">{{Session::get('checkout')['tax']}}DH</td>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <th>Shipping</th>
                                                    <td colspan="2"><em>Free Shipping</em></td>
                                                </tr>
                                                @if(Session::has('checkout'))
                                                    <tr>
                                                        {{-- @if(Cart::instance('cart')->count()>0) --}}
                                                                <th>Total</th>
                                                                <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">{{Cart::total()}}DH</span></td>
                                                    </tr>
                                                @endif
                                            </tbody>

                                    </table>
                                </div>
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="payment_method">
                                    <div class="mb-25">
                                        <h5>Payment</h5>
                                    </div>
                                    <div class="payment_option">
                                        <div class="custome-radio">
                                            <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" value="cod" wire:model="paymentmode">
                                            <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cashOnDelivery" aria-controls="cashOnDelivery">Cash On Delivery</label>
                                        </div>
                                        <div class="custome-radio">
                                            <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" value="visa" wire:model="paymentmode">
                                            <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#cardPayment" aria-controls="cardPayment">Card Payment</label>
                                        </div>
                                        <div class="custome-radio">
                                            <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5" value="paypal" wire:model="paymentmode">
                                            <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Paypal</label>
                                        </div>
                                        @error('paymentmode') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-fill-out btn-block mt-30">Place Order Now</button>

                            </div>
                        </div>
                    </form>
                    </div>
            </div>
        </section>
    </main>
</div>
