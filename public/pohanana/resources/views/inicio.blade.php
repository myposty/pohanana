@extends('layouts.layout')
@section('contenido')
<main>
    <article data-stellar-background-ratio="0.5" id="parallax">
        <h1>Yuyos mas utilizados</h1>
    </article>
</main>
    <!--row containers content-->
     <div class="row-container">
        <div class="col-container">
            <a href="{{url('/')}}">
            <div class="card-container">
                <div class="card-img"><img src="{{asset('img/coladecaballo.webp')}}" alt="imagen de caballo"></div>
                <div class="card-body">
                    <div class="body-container">
                        <h1>cola de caballo</h1>
                        <p>La cola de caballo se utiliza para tratar la retención de líquidos (edema), las infecciones de las vías urinarias, la pérdida del control de la vejiga (incontinencia urinaria), las heridas y muchas otras condiciones; aunque no existe buena evidencia científica para apoyar estos usos. </p>
                    </div>
                </div>
            </div>
        </a></div>
        <div class="col-container">
            <a href="{{url('/')}}">
            <div class="card-container">
                <div class="card-img"><img src="{{asset('img/dientedeleon.webp')}}" alt="imagen de diente de leon"></div>
                <div class="card-body">
                    <div class="body-container">
                        <h1>diente de leon</h1>
                        <p>El diente de león actúa como fármaco amargo de suave acción colerético, diurética y estimuladora del apetito; y como coadyuvante en las patologías hepáticas, las colecistopatías y los trastornos de la digestión, especialmente cuando existe una mala digestión de las grasas.</p>
                    </div>
                </div>
            </div>
        </a></div>
        <div class="col-container">
            <a href="{{url('/')}}">
            <div class="card-container">
                <div class="card-img"><img src="{{asset('img/eucalipto.webp')}}" alt="imagen de eucalipto"></div>
                <div class="card-body">
                    <div class="body-container">
                        <h1>eucalipto</h1>
                        <p>La hoja de eucalipto es usada como descongestionante nasal y para combatir infecciones respiratorias. Se utiliza en forma de ungüento, en pastillas, caramelos inhalantes, infusiones, jarabes o en vaporizaciones.</p>
                    </div>
                </div>
            </div>
        </a></div>
        <div class="col-container">
            <a href="{{url('/')}}">
            <div class="card-container">
                <div class="card-img"><img src="{{asset('img/jengibre.webp')}}" alt="imagen de jengibre"></div>
                <div class="card-body">
                    <div class="body-container">
                        <h1>jengibre</h1>
                        <p>El jengibre tiene diversas propiedades como ayudar en la pérdida de peso, tratar la amigdalitis, la ronquera, el colesterol alto, la presión alta, el dolor de garganta, tos, resfriados, dolores musculares, problemas de la circulación sanguínea, migraña y artritis. También ayuda en el tratamiento de afecciones intestinales como indigestión, cólicos, gases, acidez, inapetencia, mareos y náuseas </p>
                    </div>
                </div>
            </div>
        </a></div>
        <div class="col-container">
            <a href="{{url('/')}}">
            <div class="card-container">
                <div class="card-img"><img src="{{asset('img/menta.webp')}}" alt="imagen de menta"></div>
                <div class="card-body">
                    <div class="body-container">
                        <h1>menta</h1>
                        <p>La menta es una de las plantas más utilizada por la población del país en todo tipo de desórdenes digestivos, como antiparasitario y para combatir cefaleas. Las hojas y sumidades floridas tienen propiedades estimulantes, estomáquicas, carminativas y antisépticas.</p>
                    </div>
                </div>
            </div>
        </a></div>
        <div class="col-container">
            <a href="{{url('/')}}">
            <div class="card-container">
                <div class="card-img"><img src="{{asset('img/romero.webp')}}" alt="imagen de romero"></div>
                <div class="card-body">
                    <div class="body-container">
                        <h1>Romero</h1>
                        <p>La menta es una de las plantas más utilizada por la población del país en todo tipo de desórdenes digestivos, como antiparasitario y para combatir cefaleas. Las hojas y sumidades floridas tienen propiedades estimulantes, estomáquicas, carminativas y antisépticas.</p>
                    </div>
                </div>
            </div>
        </a></div>
    </div> 
@endsection