@extends('layouts.cascara')

@section('all')

        <div class="wrapper">
            <!-- Item -->
            <div class="item-wrapper pd-lr">

                @foreach ($product as $product)
                <div class="item">
                    <div class="item-img">
                        <a href="">
                            <div class="img" style="background-image: url('{{ $product->image }}')"></div></a>
                            </a>
                      </div>
                    <div class="data">
                        <div class="breadcrumb">
                            <a href="{{ asset('/catalogo') }}">Productos</a>
                            <span>></span>
                            <a href="{{ asset('/catalogo') }}">Limpieza</a>
                        </div>
                        <h4> {{ $product->name }}</h4>
                        <p class="detail">COD: {{ $product->code }}</p><br>
                        <p class="text-detail">
                            Proin urna urna, aliquet ac scelerisque at, aliquet vel purus. Morbi malesuada et libero sed porttitor. Integer eu leo nec neque iaculis ornare quis nec nulla. Duis odio tellus, faucibus id ex non, euismod tempor nunc. Phasellus nec felis eros. Duis sed convallis odio.
                        </p>
                        <div class="add-cotz">                         
                                
                                 <a class="button add"  href="{{ route('items.add',['id'=>$product->id])}}">Agregar al Cotizador</a>
                       
                        </div>
                    </div> 
                     @endforeach
                </div>

                <div class="como-cotizar">
                    <h4>Cómo Cotizar</h4>
                    <div class="steps">
                        <div class="item">
                            <h4>1</h4>
                            <p>
                                Selecciona los productos y cantidades a cotizar
                            </p>
                        </div>
                        <div class="item">
                            <h4>2</h4>
                            <p>
                                Registra tus datos en el cotizador y enviar
                            </p>
                        </div>
                        <div class="item">
                            <h4>3</h4>
                            <p>
                                En 24 hrs recibirás tu cotización a tu correo
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
