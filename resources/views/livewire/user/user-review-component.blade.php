
<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="comments-area">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4 class="mb-30">Add review for</h4>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb text-center">
                                            <img src="{{asset('assets/imgs/products')}}/{{ $orderItem->product->image }}" alt="{{ $orderItem->product->name }}">
                                        </div>
                                        <div class="desc">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width:90%">
                                                </div>
                                            </div>
                                            <p>{{ $orderItem->product->name }}</p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-xs mr-30">{{  $orderItem->product->created_at  }} </p>
                                                    <a href="#" class="text-brand btn-reply">Reply <i class="fi-rs-arrow-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--single-comment -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h4 class="mb-30">Customer reviews</h4>
                            <div class="d-flex mb-30">
                                <div class="product-rate d-inline-block mr-15">
                                    <div class="product-rating" style="width:90%">
                                    </div>
                                </div>
                                <h6>4.8 out of 5</h6>
                            </div>
                            <div class="progress">
                                <span>5 star</span>
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                            <div class="progress">
                                <span>4 star</span>
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                            <div class="progress">
                                <span>3 star</span>
                                <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                            </div>
                            <div class="progress">
                                <span>2 star</span>
                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                            </div>
                            <div class="progress mb-30">
                                <span>1 star</span>
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-form">
                    @if(Session::has('message'))
                        <p class="alert alert-success" role="alert">{{ Session::get('message') }}</p>
                    @endif
                    <form class="form-contact comment_form"  id="commentForm" wire:submit.prevent="addReview">
                        <h4 class="mb-15">Add a review</h4>
                        <div class="wrap-product-detail">
                            <div class="comment-form-rating">
                                <span>Your rating</span>
                                <p class="stars">
                                    <label for="rated-1"></label>
                                    <input type="radio" id="rated-1" name="rating" value="1" wire:model="rating">
                                    <label for="rated-2"></label>
                                    <input type="radio" id="rated-2" name="rating" value="2" wire:model="rating">
                                    <label for="rated-3"></label>
                                    <input type="radio" id="rated-3" name="rating" value="3" wire:model="rating">
                                    <label for="rated-4"></label>
                                    <input type="radio" id="rated-4" name="rating" value="4" wire:model="rating">
                                    <label for="rated-5"></label>
                                    <input type="radio" id="rated-5" name="rating" value="5" checked="checked" wire:model="rating">
                                    @error('rating') <span class="text-danger">{{ $message }}</span>@enderror
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" wire:model="comment" placeholder="Write Comment"></textarea>
                                                @error('comment') <span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="button button-contactForm">Submit Review</button>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
