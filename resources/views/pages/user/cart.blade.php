<x-layout>
    <x-nav/>
    <h1 class="display-1 text-center">
        Your Cart
    </h1>

    <table class="table table-striped text-capitalize w-75 m-auto">
        <thead>
            <tr>
                <th>name</th>
                <th>price</th>
                <th>quantity</th>
                <th>image</th>
                <th>update</th>
                <th>delte</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                <td>
                    <img width="70px" src="{{asset('storage/' . $item->image)}}" alt="">
                </td>
                <td>
                    <button class="btn btn-info">Update</button>
                    
                </td>
                <td>
                    <form action="/delete-item-cart/{{$item->id}}" method="POST">
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
                @endforeach
                @if (count($cart) < 1)
                    <td colspan='6' class="text-center display-1">
                        No Items Added
                    </td>
                @endif
            </tr>
            
        </tbody>
    </table>
</x-layout>