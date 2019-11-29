@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-xs-12">
        <div class="breadcrumb-wrapper">
          <div class="img-wrapper">
            <img src="assets/img/about/company-logo.png" alt="">
          </div>
          <div class="content">
          <h3 class="product-title">@isset($vacancy->user->name)@endisset @empty($vacancy->user->name) Não Informado @endempty</h3>
            <p class="brand">UIDeck Inc.</p>
            <div class="tags">
            <span><i class="lni-map-marker"></i> {{$vacancy->city->title}}</span>
            <span><i class="lni-calendar"></i> {{ $vacancy->created_at}}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="month-price">
          <span class="year">Salário</span>
          <div class="price">@isset($vacancy->salary)@endisset @empty($vacancy->salary) Não Informado @endempty</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Job Detail Section Start -->
<section class="job-detail section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-8 col-md-12 col-xs-12">
        <div class="content-area">
          <h4>Descrição da Vaga</h4>
          <p>{{ $vacancy->description }}</p>

          <h5>Benefícios</h5>
          <p>{{ $vacancy->benefities }}</p>

          <h5>Regime de Contratação</h5>
          <p>{{ $vacancy->contractType->description }}</p>

          <h5>Salário:</h5>
          <p>@isset($vacancy->salary)@endisset @empty($vacancy->salary) Não Informado @endempty</p>


          <h5>Enviar currículo para: </h5>
          <p>{{ $vacancy->email }}</p>
          {{-- <a href="#" class="btn btn-common">Apply job</a> --}}
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-xs-12">
        <div class="sideber">
          <div class="widghet">
            <h3>Compartilhar esta vaga</h3>
            <div class="share-job">
              <ul class="mt-4 footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Job Detail Section End -->
@endsection
