<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Paginas') }}
        </h2>
 
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (Session::has('agregar_post'))
                        <span class="link-success">{{Session::get('agregar_post')}}</span>
                    @endif
                   <form action="{{route('guardar.post')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Agregar titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escriba aquí el titulo :)">
                    </div>
                    <div class="mb-3">
                        <label for="ruta" class="form-label">Agregar Enlace</label>
                        <input type="text" class="form-control" id="ruta" name="ruta" placeholder="Escriba aquí el enlace :)">
                    </div>
                    <div class="mb-3">
                        <label for="portada" class="form-label">Seleccione una portada</label>
                        <input class="form-control" type="file" id="portada" name="portada">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="status">Estado <span class="required">*</span></label>
                        <select class="form-control selectpicker" id="status" name="status" required="">
                          <option value="1">Activo</option>
                          <option value="2">Inactivo</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="contenido" class="form-label">Contenido de la pagina</label>
                        <textarea class="form-control" id="contenido"  name="contenido"></textarea>
                      </div>
                      <input type="submit" value="Crear Página" class="btn btn-primary">
                      
                   </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>