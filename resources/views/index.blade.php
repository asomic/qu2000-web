@extends('layouts.cascara')

@section('all')

    <main class="site-wrapper">

        <div class="wrapper">

            <!-- Banners -->
            <section class="banners pd-lr">
                <div class="banners-inner">
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
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
                                <a href="">
                                    <div class="img" style="background-image: url('{{ $product->image }}')"></div></a>
                                <div class="data">
                                    <a  href="{{ url('item/' . $product->id)}}">
                                        <h5> {{ $product->name }}</h5>
                                    </a>
                                    <p class="detail">COD: {{ $product->code }}</p>
                                </div>
                        
                                <a class="button add"  name="sumit" type="sumit" href="{{ url('obtenerProductoindex/' . $product->id)}}">Agregar al Cotizador</a>

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
                    <h1 class="inv">Una Empresa Familiar del Maule para Chile</h1>
                    <p class="inv">Praesent a massa quis ex accumsan bibendum in ut mauris. Integer tristique at lacus sed egestas.</p>
                    <a class="button goto" href="/nosotros.html">Más Información</a>
                </div>
            </section>

            <!-- CTA: Seamos socios -->
            <section class="cta-socios">
                <div class="socios-inner pd-lr">
                    <div class="data">
                        <h1 class="inv">Seamos Socios</h1>
                        <p>
                            Praesent a massa quis ex accumsan bibendum in ut mauris. Integer tristique at lacus sed egestas. Fusce dignissim laoreet lobortis. Donec lobortis semper augue, ac luctus leo malesuada vel.
                        </p>
                        <a class="button goto" href="/mayoristas.html">Más Información</a>
                    </div>
                    <div class="img"></div>
                </div>
            </section>

            <!-- Sellos -->
            <section class="sellos">
                <div class="sellos-inner pd-lr">
                    <div class="info">
                        <h1>Si va a pagar poco
                            lleve productos de calidad</h1>
                        <p>
                            Praesent a massa quis ex accumsan bibendum in ut mauris. Integer tristique at lacus sed egestas. Fusce dignissim laoreet lobortis. Donec lobortis semper augue, ac luctus leo malesuada vel.
                        </p>
                    </div>
                    <div class="los-sellos">
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
                    </div>
                </div>
            </section>

            <!-- CTA Contacto -->
            <section class="cta-contacto">
                <div class="products-img" >
                    <img class=" pd-lr"  src="{{ asset('/images/products.png') }}" alt="Productos QU2000">
                </div>
                <div class="contacto-inner">
                    <h1 class="inv">Contáctenos</h1>
                    <p class="inv">Praesent a massa quis ex accumsan bibendum in ut mauris. Integer tristique at lacus sed egestas. Fusce dignissim laoreet lobortis. Donec lobortis semper augue, ac luctus leo malesuada vel.</p>
                    <div class="buttons">
                        <a class="button goto whatsapp" href="/">
                            Via Whatsapp
                        </a>
                        <a class="button goto" href="/">
                            Via Formulario
                        </a>
                    </div>
                </div>
            </section>

        </div>




@endsection
