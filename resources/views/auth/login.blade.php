<!DOCTYPE html>
<html lang="en">
  @include('partials.head')

  <body>
    <!-- Content section Start -->
    <section id="content" class="section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6 col-xs-12">
            <div class="page-login-form box">
              <h3>
                Login
              </h3>
            <form class="login-form" action="{{route('auth')}}" method="POST">
              @csrf
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-user"></i>
                    <input type="text" id="sender-email" class="form-control" name="email" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-lock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Keep Me Signed In</label>
                </div>
                <button class="btn btn-common log-btn" type="submit ">Submit</button>
              </form>
              <ul class="form-links">
                <li class="text-center"><a href="register.html">Don't have an account?</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
@include('partials.scripts')

  </body>
</html>
