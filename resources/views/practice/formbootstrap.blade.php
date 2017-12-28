@extends('layout.app1')
@section ('content')
<!-- action = "/registration"-->
<body>
@isset($av,$az)
@foreach ($av['errors'] as $key => $value )
@if(is_array($value))
 @foreach ($value as $s)
   {{$key}}: {{ $s }} <br>
     @endforeach
@endif
@endforeach

@foreach ($az['message'] as $key => $value )

	{{$value}}

@endforeach

@endisset




<h1 class="text-center"><small>REGISTRATION FORM</small></h1>

<form action=""  method = "post">


<div class="container">

<div class= "form-group row" style="background-color:#FFEBCD">LOGIN DETAILS:</div>



      
<div class="form-group row">
      <label for="password" class="col-md-2 col-form-label">PASSWORD</label>
      <div class="col-sm-2">
        <input type="password" class="form-control" id="password" name="password" maxlength=25 placeholder="Enter Password" required>
      </div>
      </div>
      
      
<div class= "form-group row" style="background-color:#FFEBCD">PERSONAL INFORMATION:</div>

<div class="form-group row">
      <label for="first_name" class="col-md-2 col-form-label">FIRSTNAME</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="first_name" name="first_name" maxlength=25 placeholder="Firstname" required>
      </div>
      </div>

      
<div class="form-group row">
      <label for="last_name" class="col-md-2 col-form-label">LASTNAME</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="last_name" name="last_name" maxlength=25 placeholder="Lastname" required>
      </div>
      </div>      



              
      


      
<div class= "form-group row" style="background-color:#FFEBCD">CONTACT DETAILS:</div>
      
<div class="form-group row">
 <label for="EMAIL" class="col-md-2 col-form-label">EMAIL</label>
 <div class="col-sm-2">
 <input type="email"  class="form-control" name="email"  placeholder="Enter email" required>
  </div>
                  
</div>
    
<div class="form-group row">
 <label for="contact_mobile" class="col-md-2 col-form-label">CONTACT MOBILE</label>
 <div class="col-sm-2">
 <input type="text"  class="form-control" name="contact_mobile"  maxlength="10"  placeholder="10-digit mobile no." required>
  </div>
                  
</div>
            
  




      <div class="form-group row">
      <label for="iap_no" class="col-md-2 col-form-label">IAP NO.</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="iap_no" id="iap_no" placeholder="Enter iapno." required>
      </div>
      </div>
      
      
      
   <div class="form-group row">
      <label for="imi_no" class="col-md-2 col-form-label">IMI NO.</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="imi_no" id="imi_no" placeholder="Enter imino." required>
      </div>
      </div>
         
      
      
      


<br>







<input type = "hidden" name=_token value ="{{csrf_token()}}"/>
<button type="submit" class="btn btn-primary">Submit</button>

</div>
</form>
</body>

@endsection
