@extends('lead')
@section('oficinas')
<section class="contenido">
    <h2>Hola Angel, aqui van algunas de nuestras propuestas</h2>
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="img/ofi1.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">Ref: 3329</div>
                        <h1 class="display-5 fw-bolder">Oficina en Eixample dreta</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">2800 € + I.V.A</span><br>
                            <span>Metro Diagonal - L3,L5 (a 5m a pie)</span>
                        </div>
                        <p class="lead">Conjunto de dos oficinas contiguas con vistas al exterior y muy luminosas con los todos los servicios incluidos y la posibilidad de acceso a 4 centros mas del mismo grupo. Incluyen 20 horas de salas de reunión en el precio. Cercanía a la linea L5 (estación Diagonal) del metro a 3 minutos a pie.</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="img/ofi2.jpeg" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">Ref: 3360</div>
                        <h1 class="display-5 fw-bolder">Oficina en Eixample dreta</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">2520 € + I.V.A</span><br>
                            <span>Metro Girona - L4 (ubicacion)</span>
                        </div>
                        <p class="lead">Oficina Nueva próximo a inaugurarse (Octubre 2022) para 6 puestos de trabajo en un coworking con todos los servicios incluidos. Incluye 4 hs de salas de reunión por puesto.</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="img/ofi3.png" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">Ref: 3552</div>
                        <h1 class="display-5 fw-bolder">Oficina en Sarria - Sant Gervasi</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">2500 € + I.V.A</span><br>
                            <span>Metro El Puntxet - FGC (ubicación)</span>
                        </div>
                        <p class="lead">Oficinas totalmente privadas compartiendo espacios comunes (salas de reuniones, cocina...)</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
</section>    
@endsection