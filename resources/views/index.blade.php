@extends('layouts.cascara')

@section('page-title')
<title>QU2000</title>
@endsection

@section('all')

    <main class="site-wrapper">

        <div class="wrapper">

            <!-- Banners -->
            <section class="banners pd-lr">
                <div class="banners-inner">
                    <div class="item" style="background-image: url('/images/banner_1.jpg')"></div>
                    <div class="item" style="background-image: url('/images/banner_2.jpg')"></div>
                    <div class="item" style="background-image: url('/images/banner_3.jpg')"></div>
                </div>
            </section>

            <!-- Productos Destacados -->
            <div class="catalogo-wrapper">
                <section class="grid-productos-wrapper pd-lr">
                    <div class="grid-productos-wrapper-inner index-pd">
                        <h1>Productos Destacados</h1>
                        <div class="grid-productos">

                            @foreach ($products as $product)
                            <!-- Item -->
                            <div class="item">
                                <a href="{{ url('item/' . $product->id)}}">
                                    {{-- <div class="img" style="background-image: url('{{asset('/images/11.jpg')}}')"></div></a> --}}
                                    <div class="img" style="background-image: url('{{ $product->image }}')"></div></a>
                                <div class="data">
                                    <a  href="{{ url('item/' . $product->id)}}">
                                        <h5> {{ $product->name }}</h5>
                                    </a>
                                    <p class="detail">COD: {{ $product->code }}</p>
                                </div>
                                {{-- <a> nunca a  tenido submit!! compy & paste?  --}}
                                {{-- <a class="button add"  name="sumit" type="sumit" href="{{ url('obtenerProductoindex/' . $product->id)}}">Agregar al Cotizador</a> --}}
                                <a class="button add"  href="{{ route('items.add',['id'=>$product->id])}}">Agregar al Cotizador</a>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </section>

            </div>

            <!-- CTA Full Wide -->
            <section class="cta-full-wide empresa-familiar ">
                <div class="data">
                    <img src="{{ asset('/images/logo.png') }}" alt="QU2000">
                    <h1 class="inv">Una empresa familiar, que conoce tus necesidades</h1>
                    <p class="inv">La limpieza de tu hogar, ahora al alcance de tu bolsillo.</p>
                    <a class="button goto" href="/nosotros">Más Información</a>
                </div>
            </section>

            <!-- CTA: Seamos socios -->
            <section class="cta-socios">
                <div class="socios-inner pd-lr">
                    <div class="data">
                        <h1 class="inv">Seamos Socios,<br>conversemos</h1>
                        <p>
                            Distribuye nuestros productos, contamos con convenios especiales para empresas y pequeños negocios.
                        </p>
                        <a class="button goto" href="/mayoristas">Más Información</a>
                    </div>
                    <div class="img" style="background-image: url({{ asset('/images/socios_.jpg') }})"></div>
                </div>
            </section>

            <!-- Sellos -->
            <section class="sellos">
                <div class="sellos-inner pd-lr">
                    <div class="info">
                        <h1>Calidad al alcance de todos los bolsillos</h1>
                        <p>
                            En Qu2000 nos preocupamos de que no te falte nada, brindándote productos de calidad a un precio justo.
                        </p>
                    </div>
                    {{-- <div class="los-sellos">
                        <div class="item">
                            <img src="{{ asset('/') }}" alt="Sello">
                            <p class="sello">Sello de calidad 1</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('/') }}" alt="Sello">
                            <p class="sello">Sello de calidad 1</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('/') }}" alt="Sello">
                            <p class="sello">Sello de calidad 1</p>
                        </div>
                    </div> --}}
                </div>
            </section>

            <!-- CTA Contacto -->
            <section class="cta-contacto">
                <div class="products-img" >
                    <img class=" pd-lr"  src="{{ asset('/images/products.png') }}" alt="Productos QU2000">
                </div>
                <div class="contacto-inner">
                    <h1 class="inv">Contáctenos</h1>
                    <p class="inv">
                        Comunícate con nosotros de manera simple, aquí te dejamos dos métodos, vía WhatsApp o a través de nuestro formulario. #Conversemos.
                    </p>
                    <div class="buttons">
                        <a class="button goto whatsapp" target="_blank" href="https://wa.me/56939216077">
                            Via Whatsapp
                        </a>
                        <a class="button goto" href="/contacto">
                            Via Formulario
                        </a>
                    </div>
                </div>
            </section>

        </div>




@endsection

@section('js')
    @if(Session::has('itemAdded'))
    <script>
        $(document).ready(function() {
            $('.alerts-wrapper').addClass('show');
            setTimeout(function(){
                $('.alerts-wrapper').removeClass('show');
            }, 2000);
        });
    </script>
    @endif
@endsection
