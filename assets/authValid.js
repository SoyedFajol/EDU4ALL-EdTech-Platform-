
function signValidation()
{
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;
    let gender = document.getElementById('gender').value;
    let dob = document.getElementById('dob').value;
    let userType = document.getElementById('userType').value;

    let fAlph= name.charCodeAt(0); 


    if (name==''||email==''||password==''||confirmPassword==''|| gender==''||dob==''||userType=='')
    {
        alert("Null value! Have to provide all the value for crate an account" );
        return false;
    }
    else if (password!=confirmPassword)
    {
        alert("Password does not match");
        return false;
    }
    else if (name.length<5)
    {
        alert("name should be atleast 5 character");
        return false;
    }
    else if(!(fAlph>=50&&fAlph<=70)&&!(fAlph<=100 &&fAlph>=90))
    {
        alert("name must start with letter");
        return false;
    }
    else if (!email.includes("@") || !email.includes(".com"))
    {
        alert ("email address must be valid");
        return false;
    }
    else if (password.length<8)
    {
        alert("password  should be atleast 8 character");
        return false;
    }

}

function loginValidation()
{
    let name = document.getElementById('name').value;
    let password = document.getElementById('password').value;

    if(name==''||password=='')
    {
        alert ("empty field!");
        return false;
    }
}