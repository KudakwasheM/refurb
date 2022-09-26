@foreach ($random as $r)
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="product text-center">
            <div class="position-relative mb-3">
                <div class="badge text-white bg-"></div>
                <a class="d-block" href="detail.html">
                    <img class="img-fluid w-100" src="{{ asset('storage/' . $r->images) }}" alt="...">
                </a>
                <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                        <li class="list-inline-item m-0 p-0">
                            <a class="btn btn-sm btn-outline-dark" href="#!">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0 p-0">
                            @if ($cart->where('id', $r->id)->count())
                                <button class="btn btn-sm btn-dark">In Cart</button>
                            @else
                                <form wire:submit.prevent="addToCart({{ $r->id }})" action="/cart"
                                    method="post">
                                    @csrf
                                    <input type="hidden" name="productId" value="{{ $r->id }}">
                                    <button type="submit" class="btn btn-sm btn-dark">Add to
                                        cart</button>
                                </form>
                            @endif
                        </li>
                        <li class="list-inline-item me-0">
                            <a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal">
                                <i class="fas fa-expand"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <h6>
                <a class="reset-anchor" href="detail.html">{{ $r->name }}</a>
            </h6>
            <p class="small text-muted">{{ $r->price }}</p>
        </div>
    </div>
@endforeach
