<style>
    body{
        background: #F5F5F5 !important
    }
    .my-card:last-child{
        border-right: 0 !important
    }
    .my-card:nth-child(6){
        border-right: 0 !important
    }
    .my-card:hover{
        box-shadow: 2px 2px 2px 2px lightgrey
    }
    .text-sm{
        font-size: 0.7rem
    }
    .text-orange{
        color: #FF2F2F
    }
    .text-md{
        font-size: 0.9rem;
    }
</style>
<x-layout>
    <x-navbar/>
    <x-slider/>
    <div class="container">
        <h2 class="fw-light">Catagories</h2>
        <div class="row flex-wrap">
             @for ($i = 0; $i < 12; $i++)
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 bg-white border p-4  text-center border-top-0 border-start-0 my-card  rounded-0">

            <img width="70%" class="d-block max-auto"src="https://img.drz.lazcdn.com/static/pk/p/6fd315483d48807f3d74acbd840b0e33.jpg_80x80q80.jpg_.webp"/>
            <p style="width: max-content">Brooms&Moops</p>
        </div>
            
        @endfor
        </div>
        </div>

    <div class="container my-3 ">
        <h2 class="fw-light">Flash Sales</h2>
        <div class="bg-white ">
            <div class="d-flex p-3 justify-content-between align-items-center">
                <p class="fw-medium text-capitalize p-0 m-0"style="color:#FF2F2F">On sale now</p>
                <button class="btn text-uppercase fw-medium rounded-0 " style=" border: 1px solid #FF2F2F;color:#FF2F2F">shope all products</button>
            </div>
            <hr class="m-0 p-0">
        </div>
        <div class="row">
            @for ($i = 0; $i < 6; $i++)
            <div class=" col-lg-2">
                <div class="card border-0 my-2">
                    <img width="100%" src="https://img.drz.lazcdn.com/static/pk/p/d6bdf7f9523c1639a35c49e847d2a6b6.jpg_200x200q80.jpg_.webp"/>
                    <p class="m-0 text-capitalize">original p4 headphones wireless Earbuds invisible...</p>
                    <p class="fs-4" style="color: #FF2F2F">Rs.682</p>
                    <div class="d-flex">
                    <p class=" text-secondary m-0 text-sm text-decoration-line-through">Rs.3000</p>
                    <p class="m-0 text-sm">
                        -77%
                    </p>
                </div>
                </div>
            </div>
                
            @endfor
        </div>
    </div>


    <div class="container">
        <div class="row">
        <h2 class="fw-light text-capitalize">just for you</h2>
        @for($i=0;$i<23;$i++)
        <div class=" col-lg-2">
                <div class="card border-0 my-2">
                    <img width="100%" src="https://img.drz.lazcdn.com/static/pk/p/b6d1150218d995281fedaf8c6b9d5a6f.jpg_200x200q80.jpg_.webp">original p4 headphones wireless Earbuds invisible...</p>
                    <p class="fs-4" style="color: #FF2F2F">Rs.682</p>
                    <div class="d-flex">
                    <p class=" text-secondary m-0 text-sm text-decoration-line-through">Rs.3000</p>
                    <p class="m-0 text-sm">
                        -77%
                    </p>
                </div>
                <div class="text-sm">
                    ⭐⭐⭐⭐
                </div>
                </div>
                
            </div>
            @endfor
        </div>
        <button class="btn w-25 my-3 d-block mx-auto rounded-0 border border-info text-info">
            Load More
        </button>
    </div>
    <footer class="container my-5">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <ul class="list-unstyled text-md">
                    <p class="m-0 fs-3">Customer Care</p>
                    <li>phrasmayeguard</li>
                    <li>prettbottomygradually</li>
                    <li>checksistercondition</li>
                    <li>digpowerful</li>
                    <li>notedforbottom</li>
                    <li>choosbirdse</li>
                    <li>whaletypical</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <ul class="list-unstyled text-md">
                    <p class="m-0 fs-3">Daraz</p>
                    <li>breakdiameter</li>
                    <li>laughhad</li>
                    <li>mountaincrack</li>
                    <li>drawnhappily</li>
                    <li>tomorrowherd</li>
                    <li>opinionlaw</li>
                    <li>weekfinish</li>
                    <li>carbonstruggle</li>
                    <li>gravityfather</li>
                    <li>influencedrew</li>
                    <li>blockhold</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="d-flex align-items-center">
                    <img src="https://img.lazcdn.com/us/domino/1ee015d6a5c62fd0339c88c657c1c183.jpg_2200x2200q80.jpg_.webp" width="40px"/>
                    <div class="">

                        <p class=" text-orange text-capitalize">
                            happy Shopping
                        </p>
                        <p class="text-capitalize">Download the app</p>
                    </div>
                    <img src="https://img.lazcdn.com/us/domino/1ee015d6a5c62fd0339c88c657c1c183.jpg_2200x2200q80.jpg_.webp" width="40px"/>
                    <img src="https://img.lazcdn.com/us/domino/1ee015d6a5c62fd0339c88c657c1c183.jpg_2200x2200q80.jpg_.webp" width="40px"/><br>
                    <img src="https://img.lazcdn.com/us/domino/1ee015d6a5c62fd0339c88c657c1c183.jpg_2200x2200q80.jpg_.webp" width="40px"/>

                </div>
            </div>
        </div>

</footer>

</x-layout>