<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Paginas') }}
        </h2>
 
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (Session::has('pagina_actualizada'))
                        <span class="link-success">{{Session::get('pagina_actualizada')}}</span>
                    @endif
                   <form action="{{route('actualizar.post')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$paginas->id}}" />
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Agregar titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{$paginas->titulo}}">
                    </div>
                    <div class="mb-3">
                        <label for="ruta" class="form-label">Agregar Enlace</label>
                        <input type="text" class="form-control" id="ruta" name="ruta" value="{{$paginas->ruta}}">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="status">Estado <span class="required">*</span></label>
                        <select class="form-control selectpicker" id="status" name="status" required="">
                            <option value="{{ $paginas->status}}">{{ $paginas->status}}</option>
                            {{-- <option value="1">Activo</option>
                          <option value="2">Inactivo</option> --}}
                        </select>
                    </div>
                    

                    <div class="mb-3">
                        <label for="contenido" class="form-label">Contenido de la pagina</label>
                        <textarea class="form-control" id="contenido"  name="contenido">
                            {{$paginas->contenido}}
                        </textarea>
                      </div>
                      <input type="submit" value="Crear Página" class="btn btn-primary">
                      
                   </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>