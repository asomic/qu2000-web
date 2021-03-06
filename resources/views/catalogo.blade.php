@extends('layouts.cascara')

@section('page-title')
<title>Catálogo — QU2000</title>
@endsection

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
                            <a href="/catalogo">Ver Todos</a>
                            @foreach ($categories as $category)
                            <a href="{{ url('catalogo/' . $category->id)}}">{{ $category->name }}</a>
                            @endforeach
                        </nav>
                    </div>
                </div>

                <section class="grid-productos-wrapper">

                    <div class="grid-productos-wrapper-inner">
                        <!-- <h1>Productos Destacados</h1> -->
                        <div class="grid-productos">
                   
                            @foreach ($products as $product)

                            <div class="item">
                                <a href="{{ url('item/' . $product->id)}}">
                                    <div class="img" style="background-image: url('{{ $product->image }}')"></div></a>
                                <div class="data">
                                    <a href="{{ url('item/' . $product->id)}}">
                                        <h5> {{ $product->name }}</h5>
                                    </a>
                                    <p class="detail">COD: {{ $product->code }}</p>
                                </div>
                                <a class="button add"  href="{{ route('items.add',['id'=>$product->id])}}">Agregar al Cotizador</a>

                            </div> 
                        
                            @endforeach
                      
                        </div>
                    </div>
                 
                    <div class="pagination-wrapper">
                        <div class="pagination pd-b">
                            <div class="info">  
                                <p class="info-text">
                                   {{$products->lastItem()}}  de {{$products->total()}}
                                   Productos
                                </p>
                            </div>
                            <div class="pages">
                                {{-- <a href=""></a> --}}
                                {{$products-> onEachSide (1) ->links()}}
                            </div>
                        </div>
                    </div>
                </section>
               
           
        </div>
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
