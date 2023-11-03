<x-layout>
    <div class="d-flex">
        <x-admin_sidebar />
        <div class="form w-75 mx-auto">
            <form action="" class="w-50 mx-auto rounded-2 p-4 mt-4" style="border: 1px solid #131921">
                <h1 class="display-3 fw-medium text-center">
                    Add New Products 
                </h1>
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" id="">
                <label for="">Price</label>
                <input class="form-control" type="number" name="price" id="">
                <label for="">Description</label>
                <textarea class="form-control" cols="30" rows="5" type="text" name="desc" id=""></textarea>
                <label for="">Category</label>
                <select class="form-control" name="price" id="">
                    <option value="">Gaming</option>
                    <option value="">Makeup</option>
                    <option value="">Books</option>
                    <option value="">Clothing</option>

                </select>
                <label for="">Images</label>
                <input class="form-control" type="file" name="image" id="">
                <button class="btn w-100 my-3 text-white" style="background: #131921">Submit</button>
            </form>
        </div>
    </div>
</x-layout>
