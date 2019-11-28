@extends('layouts.app')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-header">
              <h3>Postar Vagas</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->


<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-xs-12">
                <div class="post-job box">
                    <h3 class="job-title">Postar uma nova oportunidade</h3>
                <form class="form-ad" action="{{ route('vacancies.store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label class="control-label">Categoria</label>
                            <div class="search-category-container">
                                <label class="styled-select">
                                    <select class="dropdown-product selectpicker">
                                        <option value=null>--Selecione--</option>
                                        @foreach ($categories as $category)
                                          <option value={{ $category->id }}>{{ $category->description }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                          </div>

                        <div class="form-group">
                            <label class="control-label">Título</label>
                            <input type="text" class="form-control" name="title" placeholder="título da vaga">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Descrição</label>
                          <textarea class="form-control" rows="5" name="description" placeholder="descrição da vada"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Local de Atuação</label>
                            <div class="search-category-container">
                                <label class="styled-select">
                                    <select class="dropdown-product selectpicker">
                                        <option value=null>--Selecione--</option>
                                        @foreach ($cities as $city)
                                          <option value={{ $city->id }}>{{ $city->title }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                          </div>

                          <div class="form-group">
                              <label class="control-label">Número de Vagas</label>
                              <input type="text" class="form-control" name="number_vacancies" placeholder="numero de vagas">
                          </div>


                        <div class="form-group">
                            <label class="control-label">Data Publicação <span>(optional)</span></label>
                            <input type="date" class="form-control" name="dt_publish"  placeholder="yyyy-mm-dd">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Enviar Currículo Até: <span>(optional)</span></label>
                            <input type="date" class="form-control" name="dt_expire" placeholder="yyyy-mm-dd">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Requisitos Obrigatórios<span>(optional)</span></label>
                            <textarea class="form-control" rows="5" name="requirements" placeholder="descrição da vada"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Benefícios<span>(optional)</span></label>
                            <textarea class="form-control" rows="5" name="benefities" placeholder=" VL+VT+CB"></textarea>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Email da vaga </label>
                            <input type="email" class="form-control" name="email" placeholder="enviar email para ">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Telefone para contato <span>(optional)</span></label>
                            <input type="tex" class="form-control" name="contact" placeholder="ligar para  ">
                        </div>

                        <div class="divider">
                            <h3 class="job-title">Dados da Empresa</h3>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nome Fantasia</label>
                            <input type="text" class="form-control" placeholder="Digite o nome da empresa">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Observação:<span>(optional)</span></label>
                            <textarea class="form-control" rows="5" name="note" placeholder="Observação"></textarea>
                        </div>

                        {{-- <a href="#" class="btn btn-common">Submit your job</a> --}}
                        <button type="submit" class="btn btn-common"> Incluir Vaga</button>
                      <input type="hidden"  name="user_id" value="{{Auth::user()->id}}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script src="/example.js"></script>
@endpush
