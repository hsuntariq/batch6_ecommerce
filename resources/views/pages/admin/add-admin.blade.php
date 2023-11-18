<x-layout>
    <div class="d-flex">
        <x-flash-top/>
        <x-flash/>
        <x-admin_sidebar />
        <div class="form w-75 mx-auto">
            <form action="/insert-admin" method="POST" class="w-50 mx-auto rounded-2 p-4 mt-4" style="border: 1px solid #131921" enctype="multipart/form-data">
                @csrf
                <h1 class="display-3 fw-medium text-center">
                    Add New Admin
                </h1>
                <label for="">Name</label>
                <input class="form-control" type="text" name="username" id="">
                @error('username')
                    <p class="text-danger fw-bolder">
                        {{$message}}
                    </p>
                @enderror
                <label for="">Email</label>
                <input class="form-control" type="text" name="email" id="">
                @error('email')
                    <p class="text-danger fw-bolder">
                        {{$message}}
                    </p>
                @enderror
                <label for="">Password</label>
                <input class="form-control" type="password" name="password" id="">
                @error('password')
                    <p class="text-danger fw-bolder">
                        {{$message}}
                    </p>
                @enderror
                <label for="">Role</label>
                <select class="form-control" type="text" name="role" id="">
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                    <option value="2">SuperAdmin</option>
                </select>
                @error('role')
                    <p class="text-danger fw-bolder">
                        {{$message}}
                    </p>
                @enderror

                
                
                <button class="btn w-100 my-3 text-white" style="background: #131921">Add Admin</button>
            </form>
        </div>
    </div>
</x-layout>
