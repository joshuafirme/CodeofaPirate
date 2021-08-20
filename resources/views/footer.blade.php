
    </div>
  <footer class="footer">
      <div class="container">
        <span class="text-muted">© @php echo date('Y') @endphp The Code Of A Pirate. All rights reserved. Images, logos, marks or names mentioned herein are the property of their respective owners.</span>
      </div>
  </footer>          
     
<!-- jQuery library -->
<script src="{{asset('libs/jquery.js')}}"></script>

<!-- bootstrap JavaScript -->
<script src="{{asset('libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/docs-assets/js/holder.js')}}"></script>

<script>

  // password strength
$('#passwordInput, #confirmPasswordInput').on('keyup', function(e) {

if($('#passwordInput').val() == '' && $('#confirmPasswordInput').val() == ''){
  $('#passwordStrength').removeClass().html('');
  return false;
}

if($('#passwordInput').val() != ''
  && $('#confirmPasswordInput').val() != ''
  && $('#passwordInput').val() != $('#confirmPasswordInput').val()
){
  $('#passwordStrength').removeClass().addClass('alert alert-danger').html('Passwords do not match!');
  return false;
}

// Must have capital letter, numbers and lowercase letters
var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");

// Must have either capitals and lowercase letters or lowercase and numbers
var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");

// Must be at least 6 characters long
var okRegex = new RegExp("(?=.{6,}).*", "g");

if (okRegex.test($(this).val()) === false) {
  // If ok regex doesn't match the password
  $('#passwordStrength').removeClass().addClass('alert alert-danger').html('Password must be 6 characters long.');
}

else if (mediumRegex.test($(this).val())) {
  $('#passwordStrength').removeClass().addClass('alert alert-success').html('Good Password!');
}

else {
  // If password is ok
  $('#passwordStrength').removeClass().addClass('alert alert-danger').html('Weak Password, try using numbers and capital letters.');
}

return true;
});



  //Get the button
  var mybutton = document.getElementById("btn-scroll-up");
  

  window.onscroll = function() {scrollFunction()};
  
  function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    window.scrollTo({top: 0, behavior: 'smooth'});
  }
  </script>
    </body>
</html>
