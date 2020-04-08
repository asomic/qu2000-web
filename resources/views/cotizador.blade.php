@extends('layouts.cascara')

@section('all')

        <div class="wrapper cot-container pd-lr">
            <div class="cot-wrapper">
                <!-- Cotizador: Productos -->
                <section class="cot-productos-wrapper">
                    <div class="cot-productos">
                        <h3>Productos</h3>

                
                        @if (session()->has('user.products'))
                            
                          @foreach (Session::get('user.products') as $item)

                          <div class="item">
                            <a href="">
                                <div class="img" style="background-image: url('{{ $item->image }}')"></div></a>
                            <div class="data">
                                <a  href="{{ url('item/' . $item->id)}}">
                                    <h5> {{ $item->name }}</h5>
                                </a>
                                <p class="detail">COD: {{ $item->code }}</p>
                                
                            </div>
                           
                           
                           <div class="modify">
                                <input id="quantity" type="number" value="1" min="1" class="quantity">
                                <a   name="sumit" type="sumit" href="{{ url('deleteObjeto/' . $item->id)}}"><img src="{{asset('/images/icon-trash.png')}}"></a>
                  
                           </div>
                            
                        </div>
                                   
                          @endforeach 

                        @else
                        <br>
                        <br>

                        <h4>No hay Productos en el Carrito</h4>                            
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
