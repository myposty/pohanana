<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paginas') }}
        </h2>
 
        <a href="{{ url('/agregar-post')}}"type="button" class="btn btn-primary float-end d-block">Agregar Pagina</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">nombre</th>
                            <th scope="col">link</th>
                            <th scope="col">status</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($paginas as $pagina)
                          <tr>
                            <th scope="row">{{ $pagina->id }}</th>
                            <td>{{ $pagina->titulo }}</td>
                            <td>{{ $pagina->ruta }}</td>
                            <td>{{ $pagina->status }}</td>
                            <td>
                              <a href="/editar-pagina/{{ $pagina->id }}" class="btn btn-primary" title="Editar"><i class="fas fa-pen"></i></a>
                              <a href="/{{ $pagina->ruta }}" class="btn btn-warning" title="Ver"><i class="fas fa-eye"></i></a>
                              <a href="/eliminar-pagina/{{ $pagina->id }}" class="btn btn-danger" title="Eliminar"><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                          @endforeach
                          {{-- <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr> --}}
                        </tbody>
                        
                      </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>