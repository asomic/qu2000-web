@extends('layouts.cascara')

@section('all')

        <div class="wrapper cot-container pd-lr">
            <div class="cot-wrapper">
                <!-- Cotizador: Productos -->
                <section class="cot-productos-wrapper">
                    <div class="cot-productos">
                        <h3>Productos</h3>

                        <!-- Item -->
                        <div class="item">
                            <div class="img"></div>
                            <div class="data">
                                <a href="{{ asset('/item') }}">
                                    <h5>Shampoo 400 Ml. Pantene</h5>
                                </a>
                                <p class="text-detail">
                                    COD: B108Q
                                </p>
                            </div>
                            <div class="modify">
                                <input id="quantity" type="number" value="1" min="1" class="quantity">
                                <a href="#"><img src="/assets/images/icon-trash.png"></a>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img"></div>
                            <div class="data">
                                <a href="{{ asset('/item') }}">
                                    <h5>Cloro Gel 5 Lts QU2000</h5>
                                </a>
                                <p class="text-detail">
                                    COD: B108Q
                                </p>
                            </div>
                            <div class="modify">
                                <input id="quantity" type="number" value="1" min="1" class="quantity">
                                <a href="#"><img src="/assets/images/icon-trash.png"></a>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img"></div>
                            <div class="data">
                                <a href="{{ asset('/item') }}">
                                    <h5>Shampoo 400 Ml. Pantene</h5>
                                </a>
                                <p class="text-detail">
                                    COD: B108Q
                                </p>
                            </div>
                            <div class="modify">
                                <input id="quantity" type="number" value="1" min="1" class="quantity">
                                <a href="#"><img src="/assets/images/icon-trash.png"></a>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- Cotizador: Formulario -->
                <div class="cot-form-wrapper">
                    <div class="cot-form">
                        <h3>Cotizador</h3>
                        <form action="">
                            <div class="item nombre">
                                <label for="">Nombre</label>
                                <input type="text" placeholder="Ingrese su nombre">
                            </div>
                            <div class="item correo">
                                <label for="">Correo</label>
                                <input type="email" placeholder="Ingrese su correo">
                            </div>
                            <div class="item ciudad">
                                <label for="">Ciudad</label>
                                <input type="text" placeholder="Ingrese su ciudad">
                            </div>
                            <div class="item region">
                                <label for="">Región</label>
                                <!-- <input type="select" placeholder="Ingrese su región"> -->
                                <select name="" id="">
                                <option value="" disabled selected>Seleccione una región</option>
                                    <option value="">I de Tarapacá</option>
                                    <option value="">II de Antofagasta</option>
                                    <option value="">III de Atacama</option>
                                    <option value="">IV de Coquimbo</option>
                                    <option value="">V de Valparaíso </option>
                                    <option value="">VI del Libertador General Bernardo O'Higgins</option>
                                </select>
                            </div>
                            <div class="item checks">

                                <label for="radio">
                                    <input type="radio" name="radio" class="radio-select" id="radio-persona" value="persona">
                                    <span>Persona</span>
                                </label>

                                <label for="radio">
                                    <input type="radio" name="radio" class="radio-select" id="radio-empresa" value="empresa">
                                    <span>Empresa</span>
                                </label>

                            </div>
                            <!-- If Empresa -->
                            <div class="if-empresa hide">
                                <div class="item nombre-empresa">
                                    <label for="">Empresa</label>
                                    <input type="text" placeholder="Ingrese el nombre de la empresa">
                            </div>
                            <div class="item rut-empresa">
                                    <label for="">RUT</label>
                                    <input type="text" placeholder="Ingrese su RUT">
                            </div>
                            <div class="item telefono-empresa">
                                    <label for="">Teléfono</label>
                                    <input type="tel" placeholder="Ingrese su teléfono">
                            </div>
                            </div>
                            <!-- If Persona -->
                            <div class="if-persona">
                                <div class="item rut">
                                    <label for="">RUT</label>
                                    <input type="text" placeholder="Ingrese el RUT de la empresa">
                            </div>
                            <div class="item telefono">
                                    <label for="">Teléfono</label>
                                    <input type="tel" placeholder="Ingrese un teléfono de contacto">
                            </div>
                            </div>
                            <div class="item detalle">
                                <label for="">Detalle (Opcional)</label>
                                <textarea name="" id="" placeholder="Ingrese el detalle"></textarea>
                        </div>
                            <button class="button ready">Enviar</button>
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
