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

            <form class="login-form" action="{{ route('users.store') }}" method="POST">
                <div class="form-group">
                    <div class="input-icon">
                        <i class="lni-user"></i>
                        <input type="text" class="form-control" name="name" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="lni-envelope"></i>
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="lni-lock"></i>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="lni-unlock"></i>
                        <input type="password" class="form-control" placeholder="Retype Password">
                    </div>
                </div>
                <button class="btn btn-common log-btn mt-3">Register</button>
                <p class="text-center">Already have an account?<a href="login.html"> Sign In</a></p>
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
