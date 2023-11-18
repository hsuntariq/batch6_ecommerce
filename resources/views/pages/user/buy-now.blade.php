<x-layout>
    <x-nav/>
    <div class="col-lg-5 m-auto p-4 shadow">
        <form action="/buy-now" method="POST">
            @csrf
            <h4 class="display-4 text-center">
                Enter your details
            </h4>
            <label for="">Name</label>
            <input name="name" type="text" class="form-control" value="{{auth()->user()->username}}">
            <label for="">Email</label>
            <input name="email" type="text" class="form-control" value="{{auth()->user()->email}}">
            <label for="">Phone</label>
            <input name="phone" type="text" class="form-control" placeholder="Phone number...">
            <label for="">Zip Code</label>
            <input name="zip" type="text" class="form-control" placeholder="Zip Code...">
            <label for="">Address</label>
            <textarea name="address" id="" cols="30" rows="5" class="form-control"></textarea>
            <button class="btn btn-success my-3 w-100">
                Confirm
            </button>
        </form>

    </div>
</x-layout>