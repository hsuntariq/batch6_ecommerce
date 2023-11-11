<x-layout>    
    <x-nav/>
    <x-flash-top/>
    <x-slider/>
    <div class="row m-auto container">
        @foreach ($products as $item)
            <div class="col-lg-3">
                <div class="card p-3 my-2 text-capitalize">
                    <h2>{{$item->category}}</h2>
                    <img width="100%" height="350px" style="object-fit: cover" src="{{asset('storage/' . $item->image)}}" alt="">
                    <h4>Name:{{$item->name}}</h4>
                    <h4>Price:{{$item->price}}</h4>
                    <a href="/single/{{$item->id}}" class="btn btn-dark w-100 my-2">
                        View Details
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="page my-2 bg-white">

        {{$products->links("pagination::bootstrap-5")}}
    </div>


    <div class="row m-auto container">
        @foreach ($categories as $item)
            <div class="col-lg-3">
                <div class="card p-3 my-2 text-capitalize">
                    <img width="100%" height="350px" style="object-fit: cover" src="{{asset('storage/' . $item->image)}}" alt="">
                    <h4>Name:{{$item->name}}</h4>
                </div>
            </div>
            @endforeach
            <div class="my-3">
                {{$categories->links("pagination::bootstrap-5")}}
            </div>
    </div>

</x-layout>
