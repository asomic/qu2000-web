@extends('layouts.cascara')

@section('page-title')
<title>Nosotros — QU2000</title>
@endsection

@section('all')

<div class="wrapper">
    <!-- Nootros Header -->
    <section class="nosotros-header-wrapper pd-lr">
        <div class="nosotros-header">
            <div class="img" style="background-image: url(/images/familia_qu2000.jpg)"></div>
            <div class="data">
                <h1>Tradición Familiar</h1>
                <p>
                    Trabajamos juntos para brindarte soluciones concretas para tu negocio u hogar.
                </p>
            </div>
        </div>
    </section>

    <!-- Nosotros Timeline -->
    <section class="nosotros-timeline-wrapper ">
        <div class="nosotros-timeline pd-lr">

            <div class="item">
                <div class="img-wrapper">
                    <div class="img" style="background-image: url(/images/nosotros_1998.jpg)"></div>
                </div>
                <div class="line"></div>
                <div class="data">
                    <h4 class="alt-title">1998</h4>
                    <p>
                        Se da origen a Qu2000 en Quilpoco, una zona rural perteneciente a la comuna de Rauco en la región del Maule, sus inicios fueron por medio de la fabricación artesanal y rudimentaria de bidones de cloro de 5 litros que posteriormente eran vendidos en los alrededores de la comuna utilizando el sistema “puerta a puerta”. 
                    </p>
                </div>
            </div>

            <div class="item">
                <div class="data">
                    <h4 class="alt-title">2010</h4>
                    <p>
                        En miras de expandirse y con la ambición de vender a distribuidoras a lo largo de todo Chile, Qu2000 comienza a diversificarse en el mercado, produciendo nuevos productos, añadiendo marcas reconocidas a nivel nacional e importando otros. 
                    </p>
                </div>
                <div class="line"></div>
                <div class="img-wrapper">
                    <div class="img" style="background-image: url(/images/nosotros_2010.jpg)"></div>
                </div>
            </div>

            <div class="item">
                <div class="img-wrapper">
                    <div class="img" style="background-image: url(/images/nosotros_2012.jpg)"></div>
                </div>
                <div class="line"></div>
                <div class="data">
                    <h4 class="alt-title">2012</h4>
                    <p>
                        El pasar de los años ha significado que Qu2000 tenga que adaptarse, innovar y crecer para satisfacer las necesidades de sus clientes, en el año 2012 se comenzó un proceso de remodelación y automatización de toda la planta donde se fabrican los productos, logrando aumentar el rendimiento y capacidad de producción de la empresa. 
                    </p>
                </div>
            </div>

            <div class="item">
                <div class="data">
                    <h4 class="alt-title">Actualidad</h4>
                    <p>
                        Actualmente, somos una empresa fabricante e importadora posicionada dentro de las comercializadoras de productos de aseo alternativos más grandes del sur de Chile, día a día buscamos tener una amplia gama de productos a precios bajos y de gran calidad para que nuevas personas decidan emprender junto a nosotros. 
                    </p>
                </div>
                <div class="line"></div>
                <div class="img-wrapper">
                    <div class="img" style="background-image: url(/images/nosotros_hoy_.jpg)"></div>
                </div>
            </div>

        </div>
    </section>
</div>


@endsection
