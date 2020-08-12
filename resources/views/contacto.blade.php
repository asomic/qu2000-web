@extends('layouts.cascara')

@section('all')



        <div class="wrapper">

            <section class="contacto-header-wrapper pd-lr">
                <div class="contacto-header">
                    <h1>¿Tienes dudas? Escríbenos y te contestaremos a la brevedad.</h1>
                    <p>
                        En QU2000 sabemos lo importante que eres, si tienes dudas escríbenos y nos pondremos en contacto contigo.
                    </p>
                </div>
            </section>

            <section class="contacto-data-wrapper ">
                <div class="contacto-data pd-lr">
                    <div class="mapa">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=3M25%2B4J%20Quilpoco%2C%20Rauco&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                            </div>
                        </div>
                    </div>



                    <div class="form">
                        <form action="{{route('ruta')}}" method="POST">
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
                                <span>Motivo</span>
                                <input type="text" name="reason" placeholder="Ingrese motivo de contacto">
                            </label>
                            <label for="" class="label-textarea">
                                <span>Mensaje</span>
                                <textarea name="message"  placeholder="Ingrese mensaje"></textarea>
                            </label>
                            <button class="button ready"  type="submit" name="enviarContacto">Enviar</button>
                        </form>
                    </div>


                </div>
            </section>

        </div>

@endsection


