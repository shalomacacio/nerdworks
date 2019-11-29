@extends('layouts.app-home')

@section('content')

<section class="job-browse section">

  <div class="container">
      <div class="section-header">
        <h2 class="section-title">Vagas Recentes</h2>
        <p> Todos os dias com novas vagas, encontre uma que se encaixe no seu perfil! Let's Go</p>
      </div>
      <div class="row">
        <!-- SEARCH -->
          {{-- <div class="col-lg-12 col-md-12 col-xs-12">
              <div class="wrap-search-filter row">
                  <div class="col-lg-5 col-md-5 col-xs-12">
                      <input type="text" class="form-control" placeholder="Keyword: Name, Tag">
                  </div>
                  <div class="col-lg-5 col-md-5 col-xs-12">
                      <input type="text" class="form-control" placeholder="Location: City, State, Zip">
                  </div>
                  <div class="col-lg-2 col-md-2 col-xs-12">
                      <button type="submit" class="btn btn-common float-right">Filter</button>
                  </div>
              </div>
          </div> --}}
          <!-- VAGAS -->
          @foreach($vacancies as $vacancy)
          <div class="col-lg-12 col-md-12 col-xs-12">
          <a class="job-listings-featured" href="{{ route('vacancies.show', $vacancy)}}">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12">
                          <div class="job-company-logo">
                              <img src="assets/img/features/img4.png" alt="">
                          </div>
                          <div class="job-details">
                            <h3>{{ $vacancy->title }}</h3>
                              <span class="company-neme"> Empresa: @isset($vacancy->user->company->title)@endisset @empty($vacancy->user->company->title) Não informada  @endempty </span>
                              <div class="tags">
                                  <span><i class="lni-map-marker"></i>{{ $vacancy->city->title }}</span>
                                  <span><i class="lni-user"></i>{{ $vacancy->user->name }}</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-xs-12 text-right">
                          <div class="tag-type">
                              {{-- <span class="heart-icon">
                                  <i class="lni-heart"></i>
                              </span> --}}
                              <span class="full-time">Regime: {{ $vacancy->contractType->description}}</span>

                            </div>
                      </div>
                  </div>
              </a>
          </div>
          @endforeach
          <div class="col-lg-12 col-md-12 col-xs-12">
              {{$vacancies->links()}}
          </div>
      </div>
  </div>

</section>

@endsection
