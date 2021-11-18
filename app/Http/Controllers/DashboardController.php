<?php

namespace App\Http\Controllers;
use App\Models\Paginas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
            return view('userdash');
        }elseif(Auth::user()->hasRole('supervisor')){
            return view('supervisordash');
        }elseif(Auth::user()->hasRole('administrador')){
            return view('dashboard');
        }
    }
    /* public function paginas()
    {
        $paginas = Paginas::latest('published_at')->get();
        
        return view('paginas', compact('paginas'));
    }
    public function crear()
    {
        return view('paginas');
    } */
    //agregar paginas
    public function agregarPost()
    {
        return view('agregar-post');
    }
    //guardar paginas
    public function guardarPost(Request $request)
    {
        DB::table('paginas') ->insert([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'portada' => $request->portada,
            'ruta' => $request->ruta,
            'status' => $request->status
            
        ]);
        return back()->with('agregar_post', 'Pagina creada exitosamente');
    }
    //lista de paginas
    public function paginasList()
    {
        $paginas = DB::table('paginas')->get();

        return view('paginas' , compact('paginas'));
    }

    //editar paginas
    public function paginasEdit($id)
    {
        $paginas = DB::table('paginas')->where('id',$id)->first();
        return view('editar-post', compact('paginas'));
    }
    //actualizar paginas
    public function paginasUpdate(Request $request)
    {
        DB::table('paginas')->where('id', $request->id)->update([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'ruta' => $request->ruta,
            'status' => $request->status
        ]);

        return back()->with('pagina_actualizada', 'Pagina actualizada exitosamente');
    }
    //eliminar paginas
    public function paginasDelete($id)
    {
        return view('eliminar-post');
    }


    
}
