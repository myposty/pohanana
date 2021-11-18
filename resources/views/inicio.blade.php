@extends('layout')
@section('first')
@include('first')
@endsection
    @section('content')
    <title>ZCpublicidad tu opcion en tu emprendimiento</title>
    <h1></h1>

    
    

      <div class="service-of-enterprise">
        <h1>Servicio de crecimiento empresarial</h1>
        <p>Servimos a pequeñas y medianas empresas en todas las industrias relacionadas
          con la tecnologia con servicios de crecimiento de media y alta calidad que se presentan a continuación
        </p>

        <div class="br-enterprise-services">
          <div class="service-1">
            <img src="{{asset('img/services-icon-1.svg') }}" alt="img service 1" class="service-img-1">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, perferendis.</p>
            </img>
          </div>
          <div class="service-2">
            <img src="{{asset('img/services-icon-2.svg') }}" alt="img service 2" class="service-img-2">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, tenetur!</p>
            </img>
          </div>
          <div class="service-3">
            <img src="{{asset('img/services-icon-3.svg') }}" alt="img service 1" class="service-img-3">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
            </img>
          </div>
        </div>
      </div>
    
    
    @endsection