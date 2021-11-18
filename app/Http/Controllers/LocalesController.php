<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class LocalesController extends Controller
{
    public function locales()
    {
        if (request()->has('empty')) {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/zcpublicidad-logo.png', ]; 
        } else {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/zcpublicidad-logo.png',];  
        }
        $posts = Post::latest('published_at')->get();
        $title = 'Locales en la web de zcpublicidad';
        $desc = 'Locales disponibles actualizadas  cada vez que un local nuevo se una a la web';
        return view('locales', compact('title', 'portadas', 'desc', 'posts'));
    }

    public function bacon_bros()
    {

        if (request()->has('empty')) {
            $products = [];
        } else {
            $products = ['https://zcpublicidad.com/laravel/public/img/locales-img/producto1.jpg', 'https://zcpublicidad.com/laravel/public/img/locales-img/producto2.jpg', 'https://zcpublicidad.com/laravel/public/img/locales-img/producto3.jpg',];   
        }

        if (request()->has('empty')) {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/zcpublicidad-logo.png', ]; 
        } else {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/bacon-bros-logo.jpg', ];   
        }

        if (request()->has('empty')) {
            $locations = []; 
        } else {
            $locations = ['<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1100.8818527306541!2d-57.55895511902952!3d-25.22700269883973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da70ceb25b95d%3A0x3697bf135b533e6!2sBacon%20Bros!5e1!3m2!1ses-419!2spy!4v1632405964770!5m2!1ses-419!2spy" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>', ];   
        }

        $title= 'Bacon Bros';
        $desc = 'Bacon bros es un local de ventas de deliciosas hamburguesas cocinadas a la parrilla, para saborearlas a tu gusto, no esperes más 
        y pedí la tuya, somos bacon bros';
         
        return view('locales-show', compact('title','desc', 'products', 'portadas', 'locations'));
    }

    public function didactoys()
    {

        if (request()->has('empty')) {
            $products = [];
        } else {
            $products = ['https://zcpublicidad.com/laravel/public/img/locales-img/didactoys-img/didactoys-img(1).jpg', 'https://zcpublicidad.com/laravel/public/img/locales-img/didactoys-img/didactoys-img(2).jpg', 'https://zcpublicidad.com/laravel/public/img/locales-img/didactoys-img/didactoys-img(3).jpg',];   
        }

        if (request()->has('empty')) {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/zcpublicidad-logo.png', ]; 
        } else {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/didactoys-img.jpg', ];   
        }
        if (request()->has('empty')) {
            $locations = []; 
        } else {
            $locations = [];   
        }

        $title= 'Didactoys';
        $desc = 'insert description';
        return view('locales-show', compact('title','desc', 'products', 'portadas', 'locations'));
    }

    public function mauxi_creaciones()
    {

        if (request()->has('empty')) {
            $products = [];
        } else {
            $products = ['https://zcpublicidad.com/laravel/public/img/locales-img/mauxi-img/termos/termo1.jpg', 'https://zcpublicidad.com/laravel/public/img/locales-img/mauxi-img/termos/termo2.jpg', 'https://zcpublicidad.com/laravel/public/img/locales-img/mauxi-img/termos/termo3.jpg',];   
        }

        if (request()->has('empty')) {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/zcpublicidad-logo.png', ]; 
        } else {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/mauxi-creaciones.jpg', ];   
        }
        if (request()->has('empty')) {
            $locations = []; 
        } else {
            $locations = [];   
        }

        $title= 'Mauxi creaciones';
        $desc = 'Te presento todos los prodcutos que realizo, termos forrados personalizados, tapabocas y tapabocas personalizados, hoppies, y hoppies personalizados, tambien toallas personalizables
        cortinas y entre otros';
        return view('locales-show', compact('title','desc', 'products', 'portadas', 'locations'));
    }
}



