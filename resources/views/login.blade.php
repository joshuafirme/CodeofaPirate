

@php
$page_title = "Code of a Pirate | Login";
@endphp

@include('header')

<div  id="signup-container"></div>
<div class="row signup-container" style="height: 700px">
<div class="col-sm-12 col-md-5">
<div class="card">
  <div class="card-body">
    <p class="card-title title">Login</p>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" >
      </div>
      <div class="form-group">
        <label for="passwordInput">Password</label>
        <input type="password" class="form-control" id="passwordInput">
      </div>
      <button type="submit" class="btn btn-primary btn-login" id="btn-login">Log In</button>
    </form>
    <div id="or">or</div>   
    <button onclick="location.href = 'auth/google';" type="button" class="btn-google">Log In with Google</button>
  </div>
</div>
</div>
<div class="col-sm-12 col-md-7">
<img class="img-thumbnail" src="images/undraw_Freelancer_re_irh4.svg" alt="">      
</div>
</div>

<button onclick="topFunction()" id="btn-scroll-up" title="Go to top"><i class="fa fa-angle-up"></i></button>

@include('footer')