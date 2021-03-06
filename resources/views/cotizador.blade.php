@extends('layouts.cascara')
@section('page-title')
<title>Cotizador — QU2000</title>
@endsection
@section('all')

        <div class="wrapper cot-container pd-lr">
            <div class="cot-wrapper">
                <!-- Cotizador: Productos -->
                <section class="cot-productos-wrapper">
                    <div class="cot-productos">
                        <h3>Productos</h3>
                
                        @if (session()->has('itemList') && Session::get('itemList')!=[])
                            
                          @foreach (Session::get('itemList') as $item)
                       
                           {{-- ahora trabajamos con un array no un objeto --}}
                        <div class="item">
                            <a href="{{ url('item/' . $item['product']['id'] )}}">
                                <div class="img" style="background-image: url('{{ $item['product']['image'] }}')"></div>
                            </a>
                            <div class="data">
                                <a href="{{ url('item/' . $item['product']['id'] )}}">
                                    <h5> {{ $item['product']['name'] }}</h5>
                                </a>
                                <p class="detail">COD: {{ $item['product']['code'] }}</p>
                            </div>
                            <div class="modify">
                                <form action="{{route('items.update',['id'=>$item['product']['id']])}}">
                                    @csrf
                                    <input id="quantity" type="number" name="quantity" value="{{$item['quantity']}}" min="1" class="quantity">
                                    <button type="submit"><img src="{{asset('/images/icon-update.png')}}"></button>
                                    <a href="{{ route('items.remove',['id'=>$item['product']['id']])}}"><img src="{{asset('/images/icon-trash.png')}}"></a>
                                </form>
                            </div>
                        </div>
                                   
                          @endforeach 

                        @else
                            <br>
                            <h6>No hay Productos en el Carrito</h6>                            
                        @endif
                    </div>
                </section>

                <!-- Cotizador: Formulario -->
                <div class="cot-form-wrapper">
                    <div class="cot-form">
                        <h3>Cotizador</h3>
                        <form action="{{route('rutac')}}" method="POST">
                            @csrf
                            <div class="item nombre">
                                <label for="">Nombre</label>
                                <input type="text" name="name" placeholder="Ingrese su nombre">
                            </div>
                            <div class="item correo">
                                <label for="">Correo</label>
                                <input type="email" name="mail" placeholder="Ingrese su correo">
                            </div>
                            <div class="item ciudad">
                                <label for="">Ciudad</label>
                                <input type="text" name="city" placeholder="Ingrese su ciudad">
                            </div>
                            <div class="item region">
                                <label for="">Región</label>
                                <!-- <input type="select" placeholder="Ingrese su región"> -->
                                <select name="region" required>
                                <option value="" disabled selected>Seleccione una región</option>
                                    <option value="I de Tarapacá">I de Tarapacá</option>
                                    <option value="II de Antofagasta">II de Antofagasta</option>
                                    <option value="III de Atacama">III de Atacama</option>
                                    <option value="IV de Coquimbo">IV de Coquimbo</option>
                                    <option value="V de Valparaíso">V de Valparaíso </option>
                                    <option value="VI del Libertador General ">VI del Libertador General Bernardo O'Higgins</option>
                                </select>
                            </div>
                            <div class="item checks">

                                <label for="radio">
                                    <input type="radio" name="type_client" class="radio-select" id="radio-persona" value="empresa" re>
                                    <span>Empresa</span>
                                </label>

                                <label for="radio">
                                    <input type="radio" name="type_client" class="radio-select" id="radio-empresa" value="persona">
                                    <span>Persona</span>
                                </label>
                            </div>
                             <!-- If Empresa -->
                             <div class="if-empresa hide">
                                <div class="item nombre-empresa">
                                    <label for="">Empresa</label>
                                    <input type="text" name="company" placeholder="Ingrese el nombre de la empresa" >
                            </div>
                            </div>
                            <div class="item rut-empresa">
                                <label for="">RUT</label>
                                <input type="text" name="rut" placeholder="Ingrese su RUT">
                        </div>
                        <div class="item telefono-empresa">
                                <label for="">Teléfono</label>
                                <input type="tel" name="phone" placeholder="Ingrese su teléfono">
                        </div>

                            <!-- If Persona -->
                            <div class="if-persona">
                            </div>
                            <div class="item detalle">
                                <label for="">Detalle (Opcional)</label>
                                <textarea name="message"  placeholder="Ingrese el detalle"></textarea>
                        </div>
                            <button class="button ready"  type="submit" >Enviar</button>
                        </form>

                    </div>
                </div>
            </div>

            <!-- Como cotizar -->
            <div class="item-wrapper">
                 <div class="como-cotizar">
                     <h4>Cómo funciona</h4>
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

@section('js')
@if(Session::has('mail.success'))
    <script>
        
        $(document).ready(function() {
            $('.toast-wrapper.success').addClass('show');
            setTimeout(function(){
                $('.toast-wrapper.success').removeClass('show');
            }, 10000);
        });

    </script>
@endif
@if(Session::has('mail.error'))
    <script>
        $(document).ready(function() {
            $('.toast-wrapper.error').addClass('show');
            setTimeout(function(){
                $('.toast-wrapper.error').removeClass('show');
            }, 10000);
        });
    </script>
@endif
@endsection
