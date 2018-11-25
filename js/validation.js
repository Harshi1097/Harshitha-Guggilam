    var firstname=false;
    var lastname=false;
    var useremail=false;
    var password=false;
    var confirm_password=false;
    var check_confirm=false;

    var email_reg=/^([a-zA-Z][a-zA-Z0-9_.]*@[a-zA-Z0-9_.]*.[a-zA-Z][a-zA-Z0-9_.]{2}.[a-zA-Z][a-zA-Z0-9_.]{2}$|^[a-zA-Z][a-zA-Z0-9_.]*@[a-zA-Z][a-zA-Z0-9_.]*.[a-zA-Z][a-zA-Z0-9_.]{3})$/;
    
    var pan_reg = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
    var phn_reg=/^([1-9]){1}([0-9]){9}$/;
    var password_reg= /^(?=.*\d).{4,12}$/;
    var temp,temp1,temp2;

    function validation(field)
    {
      if(field=='firstname')
      {
        if(document.getElementById("firstname").value=="")
        {
          document.getElementById("error_firstname").style.display="block";
          firstname=false;
        } 
        else
        {
          document.getElementById("error_firstname").style.display="none";
          firstname=true;
        } 
      } 

      if(field=='pan')
      {
        temp1=document.getElementById("pan").value;
        temp1=pan_reg.test(String(temp1).toLowerCase());
        
        if(temp1=="" && temp1==false)
        {
          document.getElementById("error_pan").style.display="block";
          pan=false;
        } 
        else
        {
          document.getElementById("error_pan").style.display="none";
          pan=true;
        } 
      }

      if(field=='phnumber')
      {
        temp2=document.getElementById("phnumber").value;
        temp2=phn_reg.test(String(temp2).toLowerCase());
        
        if(temp2=="" && temp2==false)
        {
          document.getElementById("error_phnumber").style.display="block";
          phnumber=false;
        } 
        else
        {
          document.getElementById("error_phnumber").style.display="none";
          phnumber=true;
        } 
      }
      
      if(field=='address')
      {
        if(document.getElementById("address").value=="")
        {
          document.getElementById("error_address").style.display="block";
          address=false;
        } 
        else
        {
          document.getElementById("error_address").style.display="none";
          address=true;
        } 
      } 
      
      else if(field=='lastname')
      {
        if(document.getElementById("lastname").value=="")
        {
          document.getElementById("error_lastname").style.display="block";
          lastname=false;
        } 
        else
        {
          document.getElementById("error_lastname").style.display="none";
          lastname=true;
        } 
      }

      else if(field=='useremail')
      {
        
        temp=document.getElementById("email").value;
        temp=email_reg.test(String(temp).toLowerCase());
        if((temp=="")||(temp==false))
        {
          document.getElementById("error_email").style.display="block";
          useremail=false;
        } 
        else
        {
          document.getElementById("error_email").style.display="none";
          useremail=true;
        } 
      }

      else if(field=='password')
      {
        
        temp=document.getElementById("password").value;
        temp=password_reg.test(temp);
        if((temp=="")||(temp==false))
        {
          document.getElementById("error_password").style.display="block";
          password=false;
        } 
        else
        {
          document.getElementById("error_password").style.display="none";
          password=true;
        }

        if((temp!=document.getElementById("confirm_password").value)&&(check_confirm==true))  
        {
          document.getElementById("error_confirmpassword").style.display=
          "block";
          confirm_password=false;
        } 
        else
        {
          document.getElementById("error_confirmpassword").style.display="none";
          confirm_password=true;  
        } 
          
      }

      else if(field=='confirm_password')
      {
        
        temp=document.getElementById("confirm_password").value;
        
        if((temp=="")||(temp!=document.getElementById("password").value))
        {
          document.getElementById("error_confirmpassword").style.display="block";
          confirm_password=false;
        } 
        else
        {
          document.getElementById("error_confirmpassword").style.display="none";
          confirm_password=true;
        } 
      }

      if((firstname==true)&&(lastname==true)&&(useremail==true)&&(password==true)&&(confirm_password==true))
      {
        document.getElementById("button1").disabled=false;
      } 
      else
      {
        document.getElementById("button1").disabled=true;
      } 
    }

    function check() {
      check_confirm=true;
    }
    function form_send() 
    {
      console.log("successful validation");
    }
  
  