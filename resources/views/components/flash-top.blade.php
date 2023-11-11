<style>
    .cont{
        z-index: 2222222!important;
        left: 45%;
        top: 0%;
    }
</style>
@if (session()->has('success'))
    <div class="cont position-fixed p-2 bg-info text-center text-white">
        {{session('success')}}
    </div>
@endif

<script>
    let cont = document.querySelector('.cont');
    setTimeout(() => {
        cont.style.display = 'none'
    }, 2000);
</script>