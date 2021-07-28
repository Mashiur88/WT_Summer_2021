function validateForm() 
{
    var fname = document.getElementById("fname").value;
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var password = document.getElementById("password").value;
    var comment = document.getElementById("comment").value;
    if (fname == "" ) {
     document.getElementById("errorfname").innerHTML="Please fill out first name";
      return false;
    }
    if (password.length < 5) {
        document.getElementById("errorpass").innerHTML="Please enter password";
        return false;
      }
    if (comment=""||comment.length < 5) {
        document.getElementById("errorcomm").innerHTML="Please comment";
        return false;
      }
    if(!res)
    {
      document.getElementById("errormail").innerHTML="Email format is not correct";
      return false; 
    }
    if (document.getElementById("male").checked == false && document.getElementById("female").checked == false && document.getElementById("other").checked == false)
    {
      document.getElementById("errortext").innerHTML="Please select your gender";
      return false;
    }
    if (document.getElementById("sing").checked == false && document.getElementById("dance").checked == false && document.getElementById("read").checked == false)
    {
      document.getElementById("errorhobby").innerHTML="Please select your hobby";
      return false;
    }
  }