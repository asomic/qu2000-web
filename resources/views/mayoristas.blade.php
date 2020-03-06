@extends('layouts.cascara')


@section('all')


        <div class="wrapper">
            <!-- Mayoristas -->
            <section class="mayoristas-header-wrapper pd-lr">
                <div class="mayoristas-header">
                    <div class="data">
                        <h1>Pellentesque sed odio in dui vulputate elementum.</h1>
                        <nav class="items">
                            <li>Praesent a massa quis ex accumsan bibendum.</li>
                            <li>Mauris sit amet bibendum enim, nec maximus nulla.</li>
                            <li>Sed sollicitudin lacus volutpat nisi condimentum ullamcorper</li>
                            <li>Nullam eget dui pretium, aliquam est a, consectetur</li>
                            <li>Mauris sit amet bibendum enim, nec maximus nulla.</li>
                            <li>Praesent a massa quis ex accumsan bibendum.</li>
                        </nav>
                    </div>
                    <div class="form">
                        <form action="">
                            <label for="">
                                <span>Nombre</span>
                                <input type="text" placeholder="Ingrese su nombre">
                            </label>
                            <label for="">
                                <span>Correo</span>
                                <input type="email" placeholder="Ingrese su correo">
                            </label>
                            <label for="">
                                <span>Teléfono</span>
                                <input type="tel" placeholder="Ingrese su teléfono">
                            </label>
                            <label for="">
                                <span>Región</span>
                                <!-- <input type="text" placeholder="Ingrese su región"> -->
                                <select name="" id="">
                                    <option value="" disabled selected>Seleccione una región</option>
                                    <option value="I de Tarapacá">I de Tarapacá</option>
                                    <option value="II de Antofagasta">II de Antofagasta</option>
                                    <option value="III de Copiapó">III de Copiapó</option>
                                </select>
                            </label>
                            <label for="">
                                <span>Tipo de Negocio</span>
                                <select name="" id="">
                                    <option value="" disabled selected>Seleccione un Tipo de Negocio</option>
                                    <option value="Valor 1">Valor 1</option>
                                    <option value="Valor 2">Valor 2</option>
                                    <option value="Valor 3">Valor 3</option>
                                </select>
                            </label>
                            <button class="button goto">Quiero ser socio</button>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Testimonios -->
            <section class="mayoristas-testimonios-wrapper pd-lr">
                <div class="mayoristas-testimonios">

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
                        <div class="img"></div>
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
                        <div class="img"></div>
                    </div>

                </div>
            </section>
        </div>
@endsection
