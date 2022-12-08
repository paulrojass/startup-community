@extends('layouts.roles')

@section('content')
<div class=" col-xl-12 col-sm-12">
    <div class="roles">
        <div class="container">
            <div class="row justify-content-center " style="height:100vh">
                <div class=" col-xl-12 col-sm-12 text-center">				          
                <h1> Completa tu registro </h1>
                <h2> ¿Que tipo de tripulante eres? </h1>                                                                                                                
                </div>     
                <div class="alinearabajo">
                    <button type="button" class="boton-seccion-8">STARTUP</button> 
                    <button type="button" class="boton-seccion-8">PROFESIONAL</button> 
                    <button type="button" class="boton-seccion-8">INVERSOR</button>
                </div>  
                <section v-if="message">
                    <p class="text-white text-center"> intente de nuevo</p>
                </section>
            </div>
        </div>
    </div>   
</div>  
</div>
@endsection
