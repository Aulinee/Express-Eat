function registration()
{  
    var uname= document.getElementById("usern").value;
    var fname= document.getElementById("fnm").value;
    var lname= document.getElementById("lnm").value;
    var email= document.getElementById("emailadd").value;
    var phone= document.getElementById("hpno").value;
    var address1= document.getElementById("ad1").value;
    var postc= document.getElementById("pst").value;
    var city= document.getElementById("cty").value;
    var state1= document.getElementById("state").value; 
    var gender= document.forms["register"]["gender"].value;
    var pwd= document.getElementById("psw").value;			
    var cpwd= document.getElementById("cpsw").value;
    var termcon= document.getElementById("terms").checked;

    //regex expression code
    var pwd_expression = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])[A-Za-z\d!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]{6,6}$/;
    var usrname = /^[A-Za-z]+$/;
    var names = /^([A-Z]){1}([a-z]){1,}$/;
    var mobile = /^[\+][6][0][1]\d{8,9}$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(uname=='')
    {
        alert('Please enter your username');
        return false;
    }
    else if(!usrname.test(uname))
    {
        alert('Name field required only alphabet characters');
        return false;
    }
    else if(fname=='')
    {
        alert('Please enter your first name');
        return false;
    }
    else if(!names.test(fname))
    {
        alert('Name field required only alphabet characters and uppercase first letter');
        return false;
    }
    else if(lname=='')
    {
        alert('Please enter your last name');
        return false;
    }
    else if(!names.test(lname))
    {
        alert('Name field required only alphabet characters');
        return false;
    }
    else if(email=='')
    {
        alert('Please enter your user email');
        return false;
    }
    else if (!filter.test(email))
    {
        alert('Invalid email');
        return false;
    }
    else if(phone=='')
    {
        alert('Please enter phone number.');
        return false;
    }
    else if(!mobile.test(phone))
    {
        alert('Phone no. field requires +60 and only numbers');
        return false;
    }
    else if(address1=='')
    {
        alert('Please enter your address line 1');
        return false;
    }
    else if(postc=='')
    {
        alert('Please enter your postcode');
        return false;
    }
    else if(document.getElementById("pst").value.length < 5)
    {
        alert ('Postcode digit length is 5');
        return false;
    }
    else if(city=='')
    {
        alert('Please enter your city');
        return false;
    }
    else if(state1=='')
    {
        alert("Please select your state");
        return false;
    }
    else if(document.forms["register"]["male"].checked==false && document.forms["register"]["female"].checked==false)
    {
        alert("You must select male or female");
        return false;
    }
    else if(pwd=='')
    {
        alert('Please enter Password');
        return false;
    }
    else if(cpwd=='')
    {
        alert('Enter Confirm Password');
        return false;
    }
    else if(!pwd_expression.test(pwd))
    {
        alert ('At least ONE Uppercase, ONE Lowercase, ONE Special character, ONE Numeric letter and 6 DIGITS LENGTH are required in Password filed');
        return false;
    }
    else if(pwd != cpwd)
    {
        alert ('Password not Matched');
        return false;
    }
    else if(document.getElementById("terms").checked==false)
    {
        alert('Please agree on the terms and conditions!');
        return false;
    }
    else if(gender.checked==false)
    {
        alert('Please agree on the terms and conditions!');
        return false;
    }
    else
    {
        alert('Thank You for Registering & Please Login'); 
        // registerPage.style.display = 'none';
        // successPage.style.visibility = 'visible';
        // return false;
        // location.pathname= "login.html";
        // return false;
    }

}

function clearFunc()
{
    document.getElementById("usern").value="";
    document.getElementById("fnm").value="";
    document.getElementById("lnm").value="";
    document.getElementById("emailadd").value="";
    document.getElementById("hpno").value="";
    document.getElementById("ad1").value="";
    document.getElementById("ad2").value=""; 
    document.getElementById("pst").value="";
    document.getElementById("cty").value="";
    document.getElementById("state").value="";
    document.getElementById("psw").value="";			
    document.getElementById("cpsw").value="";
    document.getElementById("terms").checked="";
}
