function validate()
{
  document.getElementById("output").innerHTML= "";
  var pass= document.getElementById("passWord").value;
  var email= document.getElementById("userName").value;
  if(validateEmail(email) && validatePass(pass))
  {
    return true;
  }
  else
  {
    document.getElementById("passWord").value = "";
    return false;
  }
}

function validatePass(password)
{
    if (password.length == 0)
    {
      document.getElementById("output").innerHTML= "Invalid Password";
      return false;
    }
    else
    {
      return true;
    }
}

function validateEmail(email)
{
  if(email.length == 0 || !email.includes(".com") || !email.includes('@'))
  {
    document.getElementById("output").innerHTML= "Invalid email";
    return false;
  }
  else
  {
    return true;
  }
}

function resetOrder()
{
  document.getElementById("output").innerHTML= "";
  document.getElementById("passWord").value= "";
  document.getElementById("userName").value= "";
  document.getElementById("duckquan").value= 0;
  document.getElementById("friedricequan").value= 0;
  document.getElementById("eggrollquan").value= 0;
}
