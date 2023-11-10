<x-layout>
    <div class="d-flex">
        <x-admin_sidebar/>
        <div class="row w-75 m-auto">
            <div class="col-lg-6">
                
                {!! $chart->container() !!}
                {!! $chart->script() !!}
            </div>
            <div class="col-lg-6">
                
                {!! $chart2->container() !!}
                {!! $chart2->script() !!}
            </div>
            <div class="col-lg-6">
                
                {!! $chart3->container() !!}
                {!! $chart3->script() !!}
            </div>
            <div class="col-lg-6">
                
                {!! $chart4->container() !!}
                {!! $chart4->script() !!}
            </div>
        </div>
</x-layout>