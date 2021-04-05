@extends('layouts.cascara')

@section('page-title')
<title>Mayoristas — QU2000</title>
@endsection

@section('all')


        <div class="wrapper">
            <!-- Mayoristas -->
            <section class="mayoristas-header-wrapper pd-lr">
                <div class="mayoristas-header">
                    <div class="data">
                        <h1>Distribuye nuestros productos #SeamosSocios</h1>
                        <nav class="items">
                            <li>Precios al por mayor</li>
                            <li>Envío gratuito</li>
                            <li>Material de apoyo para redes sociales</li>
                            <li>Ofertas Exclusivas</li>
                        </nav>
                    </div>
                    <div class="form">
                        <form action="{{route('rutam')}}" method="POST">
                            @csrf
                            <label for="">
                                <span>Nombre</span>
                                <input type="text" name="name" placeholder="Ingrese su nombre">
                            </label>
                            <label for="">
                                <span>Correo</span>
                                <input type="email" name="mail" placeholder="Ingrese su correo">
                            </label>
                            <label for="">
                                <span>Teléfono</span>
                                <input type="tel" name="phone" placeholder="Ingrese su teléfono">
                            </label>
                            <label for="">
                                <span>Región</span>
                                <!-- <input type="text" placeholder="Ingrese su región"> -->
                                <select name="region" required>
                                    <option value="" disabled selected>Seleccione una región</option>
                                    <option value="">Arica y Parinacota</option>
                                    <option value="">Tarapacá</option>
                                    <option value="">Antofagasta</option>
                                    <option value="">Atacama</option>
                                    <option value="">Coquimbo</option>
                                    <option value="">Valparaíso</option>
                                    <option value="">Metropolitana de Santiago</option>
                                    <option value="">Libertador General Bernardo O’Higgins</option>
                                    <option value="">Maule</option>
                                    <option value="">Ñuble</option>
                                    <option value="">Biobío</option>
                                    <option value="">La Araucanía</option>
                                    <option value="">Los Ríos</option>
                                    <option value="">Los Lagos</option>
                                    <option value="">Aysén del General Carlos Ibáñez del Campo</option>
                                    <option value="">Magallanes y la Antártica Chilena</option>
                                </select>
                            </label>
                            {{-- <label for="">
                                <span>Tipo de Negocio</span>
                                <select name="deal" required>
                                    <option value="" disabled selected>Seleccione un Tipo de Negocio</option>
                                    <option value="Valor 1">Valor 1</option>
                                    <option value="Valor 2">Valor 2</option>
                                    <option value="Valor 3">Valor 3</option>
                                </select>
                            </label> --}}

                            <button class="button goto" type="submit">Quiero ser socio</button>
                        </form>

                    </div>
                </div>
            </section>

            <!-- Testimonios -->
            {{-- <section class="mayoristas-testimonios-wrapper ">
                <div class="mayoristas-testimonios pd-lr">

                    <!-- Item -->
                    <div class="item">
                        <div class="data">
                            <h4>Josefina Chamorro</h4>
                            <p class="detail">
                                Nombre del negocio - Ciudad
                            </p>
                            <p>
                                Mauris dapibus tincidunt tortor, sit amet convallis ante fringilla nec. Aenean fermentum arcu id nisi luctus porttitor ut vel nisl. Ut vulputate orci eget sodales euismod. Sed urna nibh, rutrum quis ultricies sed, consequat nec mi. Integer sed tellus tortor. Ut at neque ligula. Suspendisse aliquam sit amet felis quis lacinia.
                            </p>
                        </div>
                        <div class="img" style="background-image: url()"></div>
                    </div>
                    <!-- Item -->
                    <div class="item">
                        <div class="data">
                            <h4>José Perpetuo</h4>
                            <p class="detail">
                                Nombre del negocio - Ciudad
                            </p>
                            <p>
                                Mauris dapibus tincidunt tortor, sit amet convallis ante fringilla nec. Aenean fermentum arcu id nisi luctus porttitor ut vel nisl. Ut vulputate orci eget sodales euismod. Sed urna nibh, rutrum quis ultricies sed, consequat nec mi. Integer sed tellus tortor. Ut at neque ligula. Suspendisse aliquam sit amet felis quis lacinia.
                            </p>
                        </div>
                        <div class="img" style="background-image: url()"></div>
                    </div>

                </div>
            </section> --}}
        </div>
@endsection


@section('js')
    <script>
        $(document).ready(function() {
            $('.toast-wrapper').addClass('show');
            setTimeout(function(){
                $('.toast-wrapper').removeClass('show');
            }, 3000);
        });
    </script>
@endsection