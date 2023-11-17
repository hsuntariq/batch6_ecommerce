<style>
    .disc{
        text-decoration:line-through !important;
    }
</style>
<x-layout>
    <x-flash-top/>
    {{-- {{$item}} --}}
    <x-nav/>
    <form action="/add-to-cart" method="POST">
        @csrf
    <div class="row container  mx-auto col-lg-8 shadow p-4">
        <h2 class="text-center display-3">
            Product Detail
        </h2>
        <div class="col-lg-5">
            <div class="card border-0">

                <img width="100%" src="{{asset('storage/' . $item->image)}}" alt="">
                <input type="hidden" name="image" value="{{$item->image}}" id="">
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card border-0">

                <h2>{{$item->name}}</h2>
                <input type="hidden" name="name" value="{{$item->name}}" id="">
                <hr>
                <h1 class="text-danger">
                    {{$item->price}}
                    <input type="hidden" name="price" value="{{$item->price}}" id="">
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

                            <span class="btn btn-danger dec">
                                -
                            </span>
                            <input value="1" class="form-control w-25" type="number" name="quantity" id="quantity">
                            <span class="btn btn-success inc">
                                +
                            </span>
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


    <script>
        let dec = document.querySelector('.dec')
        let inc = document.querySelector('.inc')
        let quantity = document.querySelector('#quantity')
        count = 1;
        dec.addEventListener('click',()=>{
            count--;
            if(count < 1){
                count = 1
            }
            quantity.value = count
        })
        inc.addEventListener('click',()=>{
            count++;
            if(count > 5){
                alert('max:5')
                count = 5;
            }
            quantity.value = count
        })
    </script>

</x-layout>