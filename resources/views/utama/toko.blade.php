@extends('utama.partials.main')
@section('content')
    <section class="py-4 py-xl-5 breadcrumb">
        <div class="row">
            <div class="col-lg-12">
                <h1><span style="color: #60D05E">Grocetaria</span> Shop</h1>
            </div>
        </div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-10 col-xl-8 text-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div></div>
                </div>
            </div>
        </div>
    </section>
    <div class="col-11 col-lg-8 m-auto">
        <div class="input-group my-5">
            <span class="input-group-text bg-white" id="basic-addon1"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></span>
            <input type="text" class="form-control" placeholder="Cari Produk" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="container my-5">
        <div class="row mb-4">
            <div class="col-lg-3">
                <div class="mb-3">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="border rounded p-2">Kategori</h6>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" checked><label class="form-check-label" for="formCheck-1">Sayuran</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Buah-buahan</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Bumbu Masak</label></div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="border rounded p-2">Urutkan Harga</h6>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Min - Max</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Max - Min</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-4 my-2">
                        <div class="card-body">
                            <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/sayur-kol.png">
                                <div class="card-body">
                                    <h4 class="card-title">Sayur Kol 500g</h4>
                                    <p class="card-text">Rp 7.000,-</p>
                                    <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card-body">
                            <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/tomat.png">
                                <div class="card-body">
                                    <h4 class="card-title">Tomat 250g</h4>
                                    <p class="card-text">Rp 8.500,-</p>
                                    <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card-body">
                            <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/wortel.png">
                                <div class="card-body">
                                    <h4 class="card-title">Wortel 500g</h4>
                                    <p class="card-text">Rp 7.500,-</p>
                                    <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card-body">
                            <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/kentang.png">
                                <div class="card-body">
                                    <h4 class="card-title">Kentang 1000g</h4>
                                    <p class="card-text">Rp 9.000,-</p>
                                    <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card-body">
                            <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/sayur-kol.png">
                                <div class="card-body">
                                    <h4 class="card-title">Sayur Kol 500g</h4>
                                    <p class="card-text">Rp 7.000,-</p>
                                    <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card-body">
                            <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/tomat.png">
                                <div class="card-body">
                                    <h4 class="card-title">Tomat 250g</h4>
                                    <p class="card-text">Rp 8.500,-</p>
                                    <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card-body">
                            <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/wortel.png">
                                <div class="card-body">
                                    <h4 class="card-title">Wortel 500g</h4>
                                    <p class="card-text">Rp 7.500,-</p>
                                    <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card-body">
                            <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/kentang.png">
                                <div class="card-body">
                                    <h4 class="card-title">Kentang 1000g</h4>
                                    <p class="card-text">Rp 9.000,-</p>
                                    <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection