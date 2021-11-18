@extends('layout')
    @section('content')
    <title>{{ $title }}</title>
    <div class="main-contact-image" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
      <h1>{{ $title }}</h1>
    </div>
    
    <div class="main--all-container">
      <div class="main-contact">
        <div class="main-form-content">
        
          <form action="{{ url('contacto') }}" method="post">
            @csrf
            <div class="mb-3">
              
              <label for="name" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="name" placeholder="Escriba aquí su nombre" name="name" value="{{ old('name') }}">
              <p style="color:#dc3545;"> {{ $errors->first('name') }} </p>  
             
               
              
              
          </div>
          <div class="mb-3">
            
            <label for="email" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="email" placeholder="example@example.com" name="email" value="{{ old('email') }}">
            <p style="color:#dc3545;"> {{ $errors->first('email') }}   </p>  
                
            
            
        </div>

          <div class="mb-3">
            
            <label for="subject" class="form-label">Asunto</label>
            <input type="text" class="form-control" id="subject" placeholder="Escriba aquí el asunto" name="subject" value="{{ old('subject') }}">
            <p style="color:#dc3545;"> {{ $errors->first('subject') }}   </p>  
                
            
            
        </div>
          
            <div class="mb-3">
              
              <label for="content" class="form-label">Escriba su mensaje</label>
              <textarea class="form-control" id="content" rows="3" placeholder="Escriba aquí su mensaje" name="content" value="{{ old('content') }}'"></textarea>
              
              <p style="color:#dc3545;"> {{ $errors->first('content') }} </p>  
              
              
            </div>
            {{-- <button type="" class="btn btn-primary">Enviar mensaje 😳👍</button> --}}
      </div>
      <div class="main-contact-about">
        <img class="contacto-img" src="{{ asset('img/mail.svg') }}" alt="" style="width: 250px;height: auto;text-align: center;
        margin:0px auto;" >
        <h1>¿Como podemos ayudarte?</h1>
          <h3>Escribanos que en breve su mensaje sera respondido</h3>
          <p>Nuestra intenciones son las mejores, para con las personas que cuenten con locales o puntos de ventas para poderlas ayudar 
              con las ventas de sus productos.
          </p>
          <p>Vea mis demas proyectos que consiste en el cuidado del medio ambiente</p>
      </div>
            
          </form>
    </div>
    </div>

    
    
    @endsection