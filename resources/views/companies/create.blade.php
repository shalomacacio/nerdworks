@extends('layouts.app')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-header">
              <h3>Cadastre Sua Empresa</h3>
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
                    <h3 class="job-title">Adicionar Empresa </h3>
                    <form class="form-ad" action="{{ route('companies.store') }}" method="POST">
                      @csrf
                        <div class="form-group">
                          <label class="control-label">Nome Fantazia</label>
                          <input type="text" class="form-control" name="company_name" placeholder="nome da empresa">
                        </div>

                        <div class="form-group">
                          <label class="control-label">CNPJ</label>
                          <input type="text" class="form-control" name="register_number" placeholder="CNPJ">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Contato</label>
                          <input type="text" class="form-control" name="contact" placeholder="Telefone para contato">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Email</label>
                          <input type="email" class="form-control" name="email" placeholder="Email para contato">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Site</label>
                          <input type="text" class="form-control" name="site" placeholder="www.site.com.br">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Facebook</label>
                          <input type="text" class="form-control" name="facebook" placeholder="www.facebook.com/sua-empresa">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Twitter</label>
                          <input type="text" class="form-control" name="twitter" placeholder=" twitter da empresa ">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Linkedin</label>
                          <input type="text" class="form-control" name="facebook" placeholder="linkedin">
                        </div>

                        {{-- <a href="#" class="btn btn-common">Submit your job</a> --}}
                        <button type="submit" class="btn btn-common"> Incluir Empresa</button>
                        <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>

<script src="{{ URL::asset('assets/js/contact-form-script.js') }}"></script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
@endpush
