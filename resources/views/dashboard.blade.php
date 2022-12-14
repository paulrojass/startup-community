@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <div class="contaner">
                    <div class="row">
                    <form action="">
            <div class="wrapper ">
                <div class="searchBox justify-content-center">
                  <div class="dropdown">
                    <div class="defaultOption search-font">
                    <i class="bi bi-card-checklist"></i>
                    Categorías
                    </div>
                    <ul class="ul">
                      <li>Startup</li>
                      <li>Profesionales</li>
                      <li>Inversores</li>
                    </ul>
                  </div>
                  <div class="dropdown">
                    <div class="defaultOption search-font">
                    <i class="bi bi-geo-alt"></i>
                    Ubicación
                    </div>
                    <ul class="ul">
                      <li>Startup</li>
                      <li>Profesionales</li>
                      <li>Inversores</li>
                    </ul>
                  </div>
                  <div class="searchField">
                    <input type="text" class="input" placeholder="Search">
                    <i class="fa fa-search"></i>
                  </div>
                  <input type="submit" class="btn btn-primary"value="Buscar">
                </div>
              </div>
            </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection
