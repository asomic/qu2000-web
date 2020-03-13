<p>Nuevo Cotizador</p>

    <h4>
      Informacion General:
    </h4>

    <p>Enviado por: {{$datacotizador['name']}}</p>
    <p>Email: {{$datacotizador['mail']}}</p>
    <p>Ciudad: {{$datacotizador['city']}}</p>
    <p>Region: {{$datacotizador['region']}}</p>

    @if($datacotizador['type_client'] =='empresa')

    <p>Nombre de la Empresa: {{$datacotizador['company']}}</p>

    @endif

    <p>Rut: {{$datacotizador['rut']}}</p>
    <p>Telefono: {{$datacotizador['phone']}}</p>
    <p>Detalle : {{$datacotizador['message']}}</p>

