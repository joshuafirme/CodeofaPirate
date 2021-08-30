

@php
    $page_title = "Code of a Pirate";
@endphp

@include('header')

<div class="row">
  <div class="col-sm-12 col-md-6">
    <div class="card">
      <div class="card-body">
        <p class="card-title title">Enjoy high-quality programming products.</p>
        <p class="card-text">Make 2021 the year you learn to code. Change your career, change your life. Through this site, we can help you do that. 
          Enjoy high-quality ready made programming products at cheap cost!
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <img class="img-thumbnail" src="images/undraw_Code_thinking_re_gka2.svg" alt="">      
  </div>
</div>



<div class="row product-container">
  
<div id="products-container"></div>
<p class="title" style="text-align: center;">Source Codes Products</p> 

    @foreach ($product as $data)
    <div class="responsive col-sm-12 col-md-6">
      <div class="gallery">
        <a href="{{$data->tutorial_link}}"><img class="img-thumbnail" src="storage/{{$data->image}}" alt="Forest" width="600"></a>
        <div class="card-body">
          <b>{{$data->title}}</b>
          @php
            if(strlen($data->description) > 150) {
              $data->description = substr($data->description, 0, 150)."...";
            }
          @endphp
          <p  style="height: 35px;">{{$data->description}}</p>
       
        </div>
      </div>
    </div>
    @endforeach


</div>
<div  id="signup-container"></div>
<div class="row signup-container">
  <div class="col-sm-12 col-md-5">
    <div class="card">
      <div class="card-body">
        <p class="card-title title">Subscribe now!</p>
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input class="form-control" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="passwordInput">Password</label>
            <input type="password" class="form-control" id="passwordInput">
          </div>
          <div class="form-group">
            <label for="confirmPasswordInput">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPasswordInput">
          </div>
          <p>
						<div class="" id="passwordStrength"></div>
					</p>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <div id="or">or</div>   
        <button onclick="location.href = 'auth/google';" type="button" class="btn-google">Sign in with Google</button>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-7">
    <img class="img-thumbnail" src="images/undraw_Freelancer_re_irh4.svg" alt="">      
  </div>
</div>


<div class="row container-testimonial">
  <p class="title" style="text-align: center;">Get Inspired</p> 
  <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card">
      <div class="card-body">
        <div class="img-container">
          <img src="mark-zuck.jpg" width="70" style="border-radius: 50%;" alt="">
        </div>
        <p class="card-title">Mark Zuckerberg <br><i class="text-muted">Chairman and CEO, Facebook, Inc.</i></p>
        <p>“All of my friends who have younger siblings who are going to college or high school - my number one piece of advice is: You should learn how to program.”
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card">
      <div class="card-body">
        <div class="img-container">
          <img src="steve-jobs.jpeg" width="70" style="border-radius: 50%;" alt="">
        </div>
        <p class="card-title">Steve Jobs <br><i class="text-muted"> Chairman, CEO, and co-founder of Apple Inc.</i></p>
        <p>“Everyone in this country should learn how to program because it teaches you how to think”
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card">
      <div class="card-body">
        <div class="img-container">
         <img src="bill-gates.jpg" width="70" style="border-radius: 50%;" alt="">
        </div>
        <p class="card-title">Bill Gates <br><i class="text-muted">Co-Founder & Tech Advisor, Microsoft Corp.</i></p>
        <p>“It's fine to celebrate success but it is more important to heed the lessons of failure.”
        </p>
      </div>
    </div>
  </div>
</div>

<button onclick="topFunction()" id="btn-scroll-up" title="Go to top"><i class="fa fa-angle-up"></i></button>

@include('footer')