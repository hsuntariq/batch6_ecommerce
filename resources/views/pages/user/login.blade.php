<x-layout>
    <x-flash-top/>
    <x-nav/>
   <div class="row container mx-auto mt-3 align-items-center shadow px-3">
<div class="col-lg-6">
    <h1 class="display-3 fw-bolder text-center">Login Form</h1>
    <form action="/login" method="POST">
        @csrf
        <label for="">Email</label>
        <input class="form-control" type="email" name="email" >
        <p class="text-danger fw-bolder">

            @error('email')
            {{$message}}
            @enderror
        </p>
        <label for="">Password</label>
        <input class="form-control"type="password" name="password">
        <p class="text-danger fw-bolder">

            @error('password')
            {{$message}}
            @enderror
        </p>
        <button class="btn btn-success w-100 my-3">
            Sign In
        </button>
    </form>
</div> 
<div class="col-lg-6">
    <img width="100%" src="https://assets-v2.lottiefiles.com/a/567e9d6a-116d-11ee-adcc-c362dfe23881/hrMdhw3flV.gif" alt="">
    
</div>    
</div> 
</x-layout>