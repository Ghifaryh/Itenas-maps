<div class=" map-point ">
    <div class=" gd17 info " style=" top:40.2%; right:40.75%; ">
        <i class="fa-solid fa-circle fasum" aria-hidden="true"></i>
        <div class="info-item clearfix">
            <p class=" fs-4 fw-bold titlegd mb-3 py-2 px-0">{{ $namegd17->name }}</p>
            <div class="container px-0 mx-auto ">
                <div class="row">
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-building logow "></i>
                        <!-- <p class="jaringantext"> - AP</p> -->
                        <p class="jaringantext ">{{ ($asgd17 === 0) ? "-" : ($asgd17) }} Aset</p>
                    </div>
                </div>
                <div class="row btnaset">
                    <div class="container px-0 mx-auto">
                        @if ($asgd17 === 0)
                        <a class="text-decoration-none">
                            <button type="button" class="btn btn-dark" style="width: 150px; " disabled></i>Detail Aset</button>
                        </a>
                        @else
                        <a href="/detailaset/Gedung 17/17" class="text-decoration-none">
                            <button type="button" class="btn btn-go" style="width: 150px; "></i>Detail Aset</button>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>