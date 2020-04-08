@extends('layouts.cascara')

@section('all')

        <div class="wrapper">
            <!-- Item -->
            <div class="item-wrapper pd-lr">

                
                @foreach ($products as $products)
                <div class="item">
                    <div class="item-img">
                        <a href="">
                            </a>
                        
                    </div>
                    <div class="data">
                        <div class="breadcrumb">
                            <a href="{{ asset('/catalogo') }}">Productos</a>
                            <span>></span>
                            <a href="{{ asset('/catalogo') }}">Limpieza</a>
                        </div>
                        <h4> {{ $products->name }}</h4>
                        <p class="text-detail">
                           
                       <p class="detail">COD: {{ $products->code }}</p><br>
                        </p>
                        <p class="unico">
                            Proin urna urna, aliquet ac scelerisque at, aliquet vel purus. Morbi malesuada et libero sed porttitor. Integer eu leo nec neque iaculis ornare quis nec nulla. Duis odio tellus, faucibus id ex non, euismod tempor nunc. Phasellus nec felis eros. Duis sed convallis odio.
                        </p>
                        <div class="add-cotz">
                            <label for="quantity">
                                <input id="quantity" type="number" value="1" min="1" class="quantity">
                            </label>
                                 <a href="#"><img src="{{asset('/images/icon-trash.png')}}"></a>
                                 <a class="button add"  name="sumit" type="sumit" href="{{ url('obtenerProductoitem/' . $products->id)}}">Agregar al Cotizador</a>
                  
                        </div>
                    </div>
                </div>
                @endforeach
{{-- 

                @foreach ($products as $products)

                <div class="item">
                  
                   <a href="">
                       <div class="img" style="background-image: url('{{ $products->image }}')"></div></a>
                   <div class="data">
                       <a  href="{{ url('/item')}}">
                           <h5> {{ $products->name }}</h5>
                       </a>
                       <p class="detail">COD: {{ $products->code }}</p>
                   </div>
                   <a class="button add"  name="sumit" type="sumit" href="{{ url('obtenerProductoitem/' . $products->id)}}">Agregar al Cotizador</a>
                  
               </div>     
                @endforeach --}}


                <div class="como-cotizar">
                    <h4>Cómo Cotizar</h4>
                    <div class="steps">
                        <div class="item">
                            <h4>1</h4>
                            <p>
                                Proin urna urna, aliquet ac scelerisque at, aliquet vel purus. Morbi malesuada et libero sed porttitor. Integer eu leo nec neque iaculis ornare quis nec nulla. Duis odio tellus, faucibus id ex non, euismod tempor nunc. Phasellus nec felis eros. Duis sed convallis odio.
                            </p>
                        </div>
                        <div class="item">
                            <h4>2</h4>
                            <p>
                                Proin urna urna, aliquet ac scelerisque at, aliquet vel purus. Morbi malesuada et libero sed porttitor. Integer eu leo nec neque iaculis ornare quis nec nulla. Duis odio tellus, faucibus id ex non, euismod tempor nunc. Phasellus nec felis eros. Duis sed convallis odio.
                            </p>
                        </div>
                        <div class="item">
                            <h4>3</h4>
                            <p>
                                Proin urna urna, aliquet ac scelerisque at, aliquet vel purus. Morbi malesuada et libero sed porttitor. Integer eu leo nec neque iaculis ornare quis nec nulla. Duis odio tellus, faucibus id ex non, euismod tempor nunc. Phasellus nec felis eros. Duis sed convallis odio.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
