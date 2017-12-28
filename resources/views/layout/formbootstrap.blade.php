@section('content')
@show

<html>
<head>
<title>USER REGISTRATION FORM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width ,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 
<body> 

<h1 class="text-center"><small>REGISTRATION FORM</small></h1>

<form method = "post" action = "/blog/public/go">

<div class="container">

<div class= "form-group row" style="background-color:#FFEBCD">LOGIN DETAILS:</div>

<div class="form-group row">
      <label for="username" class="col-md-2 col-form-label">USERNAME</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="username" name="username" maxlength=25 placeholder="Enter Username">
      </div>
      </div>

      
<div class="form-group row">
      <label for="password" class="col-md-2 col-form-label">PASSWORD</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="password" name="password" maxlength=25 placeholder="Enter Password">
      </div>
      </div>
      
      
<div class= "form-group row" style="background-color:#FFEBCD">PERSONAL INFORMATION:</div>

<div class="form-group row">
      <label for="first_name" class="col-md-2 col-form-label">FIRSTNAME</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="first_name" name="first_name" maxlength=25 placeholder="Firstname">
      </div>
      </div>

      
<div class="form-group row">
      <label for="last_name" class="col-md-2 col-form-label">LASTNAME</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="last_name" name="last_name" maxlength=25 placeholder="Lastname">
      </div>
      </div>      


<fieldset class="form-group row">
      <label for="gender" class="col-md-2 col-form-label">GENDER</label>
      <div class="col-sm-2">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Female" checked>
            FEMALE
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Male">
            MALE
          </label>
          </div>
        </div>
        </fieldset>
        
        
<div class="form-group row">
  <label for="dob" class="col-md-2 col-form-label">DATE OF BIRTH</label>
      <div class="col-sm-2">
        <input type="date" class="form-control" id="dob" name="dob" placeholder="DD-MM-YYYY">
      </div>
      </div>
      
      
<div class="form-group row">
<label for="specification" class="col-md-2 col-form-label">SPECIFICATION</label>
 <div class="col-sm-2">
 <input type="text" class="form-control" id="specification" name="specification" placeholder="M.D /M.S">
 </div>
 </div>
      
      
<!--  <div class="form-group row">
   <label for="initials" class="col-md-2 col-form-label">FIELD OF MEDICINE</label>
      <select id="Select" class="form-control">
        <option>MBBS</option>
        <option>BDS</option>
        <option>M.D</option>
        <option>B.A.M.S</option>
        <option>B.H.M.S</option>
        <option>Others</option>
        
      </select>
    </div>

      -->

      
<div class= "form-group row" style="background-color:#FFEBCD">CONTACT DETAILS:</div>
      

    
<div class="form-group row">
 <label for="contact_mobile" class="col-md-2 col-form-label">CONTACT MOBILE</label>
 <div class="col-sm-2">
 <input type="text"  class="form-control" name="contact_mobile"  maxlength="10"  placeholder="10-digit mobile no.">
  </div>
                  
</div>
            
  

<div class="form-group row">
      <label for="contact_work" class="col-md-2 col-form-label">CONTACT WORK</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="contact_work" name="contact_work" maxlength="10" placeholder="Office contact">
      </div>
      </div>



<div class= "form-group row" style="background-color:#FFEBCD">CONTACT ADDRESS:</div>

<div class="form-group row">
      <label for="address_line1" class="col-md-2 col-form-label">ADDRESS LINE 1</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="address_line1" id="address_line1" placeholder="addressline1">
      </div>
      </div>

<div class="form-group row">
      <label for="address_line2" class="col-md-2 col-form-label">ADDRESS LINE 2</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="address_line2" id="address_line2" placeholder="addressline2">
      </div>
      </div>
      
      
      <div class="form-group row">
      <label for="address_line3" class="col-md-2 col-form-label">ADDRESS LINE 3</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="address_line3" id="address_line3" placeholder="addressline3">
      </div>
      </div>
      
      
      <div class="form-group row">
      <label for="address_line4" class="col-md-2 col-form-label">ADDRESS LINE 4</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="address_line4" id="address_line4" placeholder="addressline4">
      </div>
      </div>
      
      <div class="form-group row">
      <label for="city" class="col-md-2 col-form-label">CITY</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
      </div>
      </div>
      
       <div class="form-group row">
      <label for="city" class="col-md-2 col-form-label">STATE</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="state" id="city" placeholder="Enter City">
      </div>
      </div>
      
      <div class="form-group row">
      <label for="pincode" class="col-md-2 col-form-label">PINCODE</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="pincode" id="pincode" placeholder="PINCODE">
      </div>
      </div>
      
      
      <div class="form-group row">
      <label for="iap_no" class="col-md-2 col-form-label">IAP NO.</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="iap_no" id="iap_no" placeholder="Enter iapno.">
      </div>
      </div>
      
      
      
      
      
      
      


<br>




<label class="custom-file">
  <input type="file" id="file" class="custom-file-input">
  <span class="custom-file-control"></span>
</label>


<input type = "hidden" name=_token value ="{{csrf_token()}}"/>
<button type="submit" class="btn btn-primary">Submit</button>





</div>
</form>
</body>
</html>

