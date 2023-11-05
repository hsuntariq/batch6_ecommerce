<style>
    .disc{
        text-decoration:line-through !important;
    }
</style>
<x-layout>
    {{-- {{$item}} --}}
    <x-nav/>
    <form action="">
    <div class="row container  mx-auto col-lg-8 shadow p-4">
        <h2 class="text-center display-3">
            Product Detail
        </h2>
        <div class="col-lg-5">
            <div class="card border-0">

                <img width="100%" src="{{asset('storage/' . $item->image)}}" alt="">
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card border-0">

                <h2>{{$item->name}}</h2>
                <hr>
                <h1 class="text-danger">
                    {{$item->price}}
                </h1>   
                <div class="d-flex">

                    <p class="disc me-3 text-capitalize">
                        rs.2000
                    </p>
                    <p>
                        -66%
                    </p>
                </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="text align-self-center d-flex">
                            <p class="mt-3">Quantity</p>
                        </div>
                        <div class="input d-flex gap-2">

                            <button class="btn btn-danger">
                                -
                            </button>
                            <input value="1" class="form-control w-25" type="number" name="" id="quantity">
                            <button class="btn btn-success">
                                +
                            </button>
                        </div>
                    </div>
                    <div class="d-flex gap-1">
                        <button class="button btn btn-warning" name="action" value="buy">
                            Buy Now
                        </button>
                        <button class="button btn btn-info" name="action"  value="cart">
                            Add To Cart
                        </button>
                    </div>
            </div>
        </div>
    </div>
</form>
</x-layout>