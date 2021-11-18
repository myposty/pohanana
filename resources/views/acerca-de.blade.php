@extends('layout')
@section('content')
<title>{{ $title }}</title>
<div class="main-about-image" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
  <div class="main-about-content">
    <h1>{{ $title }}</h1>
  </div>
</div>

<div class="main--all-container">
  <div class="main-about">
    <div class="main-about-content">
      <div class="main-about-img">
        <div class="image-profile"></div>
        <h3>Brahian Riveros</h3>
        <p><em>Fundador de ZCpublicidad</em></p>
      </div>
    </div>
    <!-- end main-about content-->
    <div class="skills-container">
      <h1>Mis Skills</h1>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="circular-progress html "></div>    
          </div>
          <div class="col">
            <div class="circular-progress css "></div>
          </div>
          <div class="col">
            <div class="circular-progress sass "></div>
          </div>
          <div class="col">
            <div class="circular-progress js "></div>
          </div>
          <div class="col">
            <div class="circular-progress php "></div>
          </div>
          <div class="col">
            <div class="circular-progress mysql "></div>
          </div>
          <div class="col">
            <div class="circular-progress laravel "></div>
          </div>
        </div>
      </div>
    </div>
    <!-- end skills container-->

      <div class="enterprise-main">
        <div class="enterprise-main-logo">
          <img src="{{ asset('img/zcpublicidad-logo.png') }}" alt="logo de la empresa" class="enterprise-logo">
        </div>
        <h1>Nombre de la empresa</h1>
        <p>breve descripcion de la empresa</p>
        <p>fecha de creacion:<strong>18/18/18</strong></p>
        <div class="enterprise-history">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus molestias beatae ut velit nisi aliquam suscipit possimus doloribus odio laudantium, inventore enim quam minus ullam distinctio itaque earum id voluptatem ipsam? Aspernatur, iste omnis alias similique numquam repellat unde suscipit deleniti ut, deserunt beatae consequatur dolores ducimus libero! Itaque provident repellendus at deserunt ad perferendis nisi illo ut minima molestiae similique, laboriosam in saepe porro quo rem qui. Ipsam odio ipsa harum soluta quaerat dolor ab eum. Fugit tempore qui voluptates, ipsam eveniet iusto, corrupti cum quo illum sed laboriosam aut dolores esse nihil vel vero magnam rerum reiciendis veniam?</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus molestias beatae ut velit nisi aliquam suscipit possimus doloribus odio laudantium, inventore enim quam minus ullam distinctio itaque earum id voluptatem ipsam? Aspernatur, iste omnis alias similique numquam repellat unde suscipit deleniti ut, deserunt beatae consequatur dolores ducimus libero! Itaque provident repellendus at deserunt ad perferendis nisi illo ut minima molestiae similique, laboriosam in saepe porro quo rem qui. Ipsam odio ipsa harum soluta quaerat dolor ab eum. Fugit tempore qui voluptates, ipsam eveniet iusto, corrupti cum quo illum sed laboriosam aut dolores esse nihil vel vero magnam rerum reiciendis veniam?</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus molestias beatae ut velit nisi aliquam suscipit possimus doloribus odio laudantium, inventore enim quam minus ullam distinctio itaque earum id voluptatem ipsam? Aspernatur, iste omnis alias similique numquam repellat unde suscipit deleniti ut, deserunt beatae consequatur dolores ducimus libero! Itaque provident repellendus at deserunt ad perferendis nisi illo ut minima molestiae similique, laboriosam in saepe porro quo rem qui. Ipsam odio ipsa harum soluta quaerat dolor ab eum. Fugit tempore qui voluptates, ipsam eveniet iusto, corrupti cum quo illum sed laboriosam aut dolores esse nihil vel vero magnam rerum reiciendis veniam?</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus molestias beatae ut velit nisi aliquam suscipit possimus doloribus odio laudantium, inventore enim quam minus ullam distinctio itaque earum id voluptatem ipsam? Aspernatur, iste omnis alias similique numquam repellat unde suscipit deleniti ut, deserunt beatae consequatur dolores ducimus libero! Itaque provident repellendus at deserunt ad perferendis nisi illo ut minima molestiae similique, laboriosam in saepe porro quo rem qui. Ipsam odio ipsa harum soluta quaerat dolor ab eum. Fugit tempore qui voluptates, ipsam eveniet iusto, corrupti cum quo illum sed laboriosam aut dolores esse nihil vel vero magnam rerum reiciendis veniam?</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus molestias beatae ut velit nisi aliquam suscipit possimus doloribus odio laudantium, inventore enim quam minus ullam distinctio itaque earum id voluptatem ipsam? Aspernatur, iste omnis alias similique numquam repellat unde suscipit deleniti ut, deserunt beatae consequatur dolores ducimus libero! Itaque provident repellendus at deserunt ad perferendis nisi illo ut minima molestiae similique, laboriosam in saepe porro quo rem qui. Ipsam odio ipsa harum soluta quaerat dolor ab eum. Fugit tempore qui voluptates, ipsam eveniet iusto, corrupti cum quo illum sed laboriosam aut dolores esse nihil vel vero magnam rerum reiciendis veniam?</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus molestias beatae ut velit nisi aliquam suscipit possimus doloribus odio laudantium, inventore enim quam minus ullam distinctio itaque earum id voluptatem ipsam? Aspernatur, iste omnis alias similique numquam repellat unde suscipit deleniti ut, deserunt beatae consequatur dolores ducimus libero! Itaque provident repellendus at deserunt ad perferendis nisi illo ut minima molestiae similique, laboriosam in saepe porro quo rem qui. Ipsam odio ipsa harum soluta quaerat dolor ab eum. Fugit tempore qui voluptates, ipsam eveniet iusto, corrupti cum quo illum sed laboriosam aut dolores esse nihil vel vero magnam rerum reiciendis veniam?</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus molestias beatae ut velit nisi aliquam suscipit possimus doloribus odio laudantium, inventore enim quam minus ullam distinctio itaque earum id voluptatem ipsam? Aspernatur, iste omnis alias similique numquam repellat unde suscipit deleniti ut, deserunt beatae consequatur dolores ducimus libero! Itaque provident repellendus at deserunt ad perferendis nisi illo ut minima molestiae similique, laboriosam in saepe porro quo rem qui. Ipsam odio ipsa harum soluta quaerat dolor ab eum. Fugit tempore qui voluptates, ipsam eveniet iusto, corrupti cum quo illum sed laboriosam aut dolores esse nihil vel vero magnam rerum reiciendis veniam?</p>
        </div>
        <!-- end enterprise history-->
        <div class="enterprise-proyects">
          <h1>Mis proyectos a futuro</h1>
          <div class="container">
            <div class="row align-items-center">
              <div class="col mb-5">
                <div class="card" style="width: 18rem;">
                  <img src="https://zcpublicidad.com/laravel/public/img/store.png" class="card-img-top" alt="imagen del proyecto">
                  <div class="card-body">
                    <h5 class="card-title">Sistema de ventas y tienda en linea</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{url('locales') }}" class="btn btn-primary stretched-link">leer más</a>
                  </div>
                </div>
              </div>

              <div class="col mb-5">
                <div class="card" style="width: 18rem;">
                  <img src="https://zcpublicidad.com/laravel/public/img/perros-en-calle.jpg" class="card-img-top" alt="imagen del proyecto">
                  <div class="card-body">
                    <h5 class="card-title">Cuidado de animales en situación de calle</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{url('locales') }}" class="btn btn-primary stretched-link">Go somewhere</a>
                  </div>
                </div>
              </div>

              <div class="col mb-5">
                <div class="card" style="width: 18rem;">
                  <img src="https://zcpublicidad.com/laravel/public/img/cuidado-del-medio-ambiente.jpg" class="card-img-top" alt="imagen del proyecto">
                  <div class="card-body">
                    <h5 class="card-title">Proyecto del cuidado del medio ambiente</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{url('locales') }}" class="btn btn-primary stretched-link">Go somewhere</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- end row -->
          </div>
          <!-- end container-->
        </div>
      </div>
      <!-- end enterprise main-->
</div>
</div>

 
@endsection