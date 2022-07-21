@extends('layouts.app');

@section('titulo')
    Catálogo
@endsection

@section('contenido')

 <div class="card" style="width: 18rem;">
  <img src="{{ asset('img/torta_meme1.jpg') }}" class="card-img-top" alt="Torta meme">
  <div class="card-body">
    <h5 class="card-title">Meme Cake</h5>
    <p class="card-text">Tortas meme tamano estandar, de 8 a 10 personas</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div> 


@endsection
