<x-layout>
    <div class="d-flex">
        <x-admin_sidebar />
        <div class="side w-75">

            <table class="table w-100 text-capitalize m-auto ">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>phone</th>
                        <th>zip</th>
                        <th>address</th>
                        <th>Dispatch</th>
                        <th>Cancel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->zip}}</td>
                            <td>{{$item->address}}</td>
                            <td>
                                <button class="btn btn-info">Update</button>
                            </td>
                            <td>
                                <button class="btn btn-danger">Cancel</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>