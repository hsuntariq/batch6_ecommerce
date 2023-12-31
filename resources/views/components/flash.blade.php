<style>
    .underlay{
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.6);
        position: absolute;
        inset: 0;
    }
    .dialog-box{
        /* z-index: 300 */
        position: absolute !important;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 1rem;
    }
</style>
@if (session()->has('message'))
    <div class="underlay">
        <div class="dialog-box rounded-3 shadow bg-white text-dark py-4 text-center fw-bold fs-5 w-25">
            {{session('message')}}
            <button class="w-100 btn close btn-success my-3">
                OK
            </button>
        </div>
    </div>
@endif


<script>
    let cross = document.querySelector('.close');
    let box = document.querySelector('.dialog-box');
    let underlay = document.querySelector('.underlay');
    cross.addEventListener('click',()=>{
        box.style.display = "none"
        underlay.style.display = "none"
    })
    
    setTimeout(()=>{
        box.style.display = "none"
        underlay.style.display = "none"
    },5000)

</script>

