<x-layout>
    <div class="d-flex">
        <x-flash/>
        <x-admin_sidebar />
        <div class="form w-75 mx-auto">
            <form action="/insert-category" method="POST" class="w-50 mx-auto rounded-2 p-4 mt-4" style="border: 1px solid #131921" enctype="multipart/form-data">
                @csrf
                <h1 class="display-3 fw-medium text-center">
                    Add New Category 
                </h1>
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" id="">
                @error('name')
                    <p class="text-danger fw-bolder">
                        {{$message}}
                    </p>
                @enderror
                
                <label for="">Images</label>
                <input class="form-control" type="file" name="image" id="">
                @error('image')
                    <p class="text-danger fw-bolder">
                        {{$message}}
                    </p>
                @enderror
                <button class="btn w-100 my-3 text-white" style="background: #131921">Submit</button>
            </form>
        </div>
    </div>
</x-layout>
