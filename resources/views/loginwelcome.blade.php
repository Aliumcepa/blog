<html>
<head>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{!! asset('/js/bootstrap.min.js') !!}"></script>
 <script src="https://use.fontawesome.com/c64e27a7a9.js"></script>

</head>

<div class="member-dashboard"> Welcome  <b>{{ucfirst($data['first_name'])}} {{ucfirst($data['middle_name'])}} {{ucfirst($data['last_name'])}} </b> You have successfully logged in!<br><br><br>
<a href="/addclinic">Add Clinic</a>
<input type="hidden" name=_token value="{{csrf_token()}}" />
<a href="/assistantregister">Add Assistant</a>
</div>

</html>