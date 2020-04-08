@extends('layouts.cascara')

@section('all')
    <main class="site-wrapper">

        <div class="wrapper">

            <!-- Productos Destacados -->
            <div class="catalogo-wrapper pd-lr">

                <div class="categorias-wrapper">
                    <div class="categorias">
                        <div class="categorias-header">
                            <h4 class="alt-title">Categorías</h4>
                            <div class="toggle-cat"></div>
                        </div>
                        <nav class="items">
                            @foreach ($categories as $category)
                            <a href="{{ url('catalogo/' . $category->id)}}">{{ $category->name }}</a>
                    @endforeach
                        </nav>
                    </div>
                </div>

                <section class="grid-productos-wrapper">

                    <div class="pagination-wrapper">
                        <div class="pagination">
                            <div class="info">
                                <p>Mostrando todos los artículos</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid-productos-wrapper-inner">
                        <!-- <h1>Productos Destacados</h1> -->
                        <div class="grid-productos">
@foreach ($products as $product)


                        <div class="item">
                            <a href="">
                                <div class="img" style="background-image: url('{{ $product->image }}')"></div></a>
                            <div class="data">
                                <a href="{{ asset('/item') }}">
                                    <h5> {{ $product->name }}</h5>
                                </a>
                                <p class="detail">COD: {{ $product->code }}</p>
                            </div>
                            <a class="button add"  name="sumit" type="sumit" href="{{ url('obteneridProducto/' . $product->id)}}">Agregar al Cotizador</a>

                        </div>
@endforeach

                        

           

                        </div>
                    </div>

                    <div class="pagination-wrapper">
                        <div class="pagination pd-b">
                            <div class="info">
                                <!-- <p>Mostrando todos los artículos</p> -->
                                <p class="info-text">
                                    Mostrando 9 de 200 Productos
                                </p>
                                <div class="pages">
                                    <a class="item selected">
                                        1
                                        </p>
                                        <a class="item">
                                            2
                                        </a>
                                        <a class="item">
                                            3
                                        </a>
                                        <a class="item">
                                            >
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>

        </div>



@endsection
