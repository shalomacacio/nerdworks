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
          <h3 class="product-title">@isset($vacancy->user->company->title)@endisset @empty($vacancy->user->company->title) Não Informado @endempty</h3>
            <p class="brand">UIDeck Inc.</p>
            <div class="tags">
            <span><i class="lni-map-marker"></i> {{$vacancy->city->title}}</span>
              <span><i class="lni-calendar"></i> {{ $vacancy->created_at->format('d-m-Y')}}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="month-price">
          <span class="year">Salário</span>
          <div class="price">$65,000</div>
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
          <h5>Requisitos Obrigatórios:</h5>
          <p>{{ $vacancy->requirements }}</p>
          <ul>
            <li>- Objective-C</li>
            <li>- iOS SDK</li>
            <li>- XCode</li>
            <li>- Cocoa</li>
            <li>- ClojureScript</li>
          </ul>
          <h5>Benefícios</h5>
          <p>{{ $vacancy->benefities }}</p>
          <a href="#" class="btn btn-common">Apply job</a>
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
