<div class="container">
    <div class="row space-100 justify-content-center">
      <div class="col-lg-10 col-md-12 col-xs-12">
        <div class="contents">
          <h2 class="head-title">Encontre vagas para o seu perfil!</h2>
          <p>
              Não é que os profissionais de TI se acham melhores ou são "estrelas" como dizem. É que eles tem uma espécie de potencial que os diferenciam dos outros; eles enxergam o mundo virtual.</p>
          <div class="job-search-form">
            <form>
              <div class="row">
                <div class="col-lg-5 col-md-6 col-xs-12">
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Título da Vaga">
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                  <div class="form-group">
                    <div class="search-category-container">
                      <label class="styled-select">
                        <select>
                          <option value="none">Local</option>
                          @foreach ($cities as $city)
                            <option value="{{$city->id}}">{{$city->title}}</option>
                          @endforeach
                        </select>
                      </label>
                    </div>
                    <i class="lni-map-marker"></i>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                  <div class="form-group">
                    <div class="search-category-container">
                      <label class="styled-select">
                        <select>
                          <option>Categorias</option>
                          @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->description}}</option>
                          @endforeach

                        </select>
                      </label>
                    </div>
                    <i class="lni-layers"></i>
                  </div>
                </div>
                <div class="col-lg-1 col-md-6 col-xs-12">
                  <button type="submit" class="button"><i class="lni-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
