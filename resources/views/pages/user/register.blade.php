<x-layout>
    <x-nav/>
    <div class="row container mx-auto mt-5 align-items-center shadow p-3">
        <div class="col-lg-6">
        <form action="/register" method="POST">
            @csrf
                <h1 class="display-3 text-center fw-bolder">Sign Up     </h1>
                <label for="">Username</label>
                <input class="form-control" type="text" name="username" id="">
                <p class="text-danger fw-bolder">

                    @error('username')
                    {{$message}}
                    @enderror
                </p>
                <label for="">Email</label>
                <input class="form-control" type="email" name="email" id="">
                <p class="text-danger fw-bolder">

                    @error('email')
                    {{$message}}
                    @enderror
                </p>
                <label for="">Password</label>
                <input class="form-control" type="password" name="password" id="">
                <p class="text-danger fw-bolder">

                    @error('password')
                    {{$message}}
                    @enderror
                </p>
                <label for="">Confirm Password</label>
                <input class="form-control" type="password" name="c_pass" id="">
                <button class="btn btn-dark w-100 my-3">
                    Sign Up
                </button>
            </form>
        </div>
        <div class="col-lg-6">
            <img width="100%" src="https://i.pinimg.com/originals/f2/00/eb/f200eb6203aba005f6bb8c46ac157274.gif" alt="">
        </div>
    </div>
</x-layout>