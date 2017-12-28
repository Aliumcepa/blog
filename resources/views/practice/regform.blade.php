<!Doctype html>
 <html>  
   <head>
      <title>PHP Form Validation</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
   </head>
   
   <body>
      <?php
         
         // define variables and set to empty values
         $name = $email = $gender = $password = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            //$website = test_input($_POST["website"]);
            $password = test_input($_POST["password"]);
            $gender = test_input($_POST["gender"]);
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
      
  
      <h2>USER REGISTRATION FORM</h2>
      
      <form method = "post" action = "/blog/public/go">
         <table>
            <tr>
               <td>USERNAME:</td> 
               <td><input type = "text" name = "name"></td>
            </tr>
            
            <tr>
               <td>FIRST_NAME:</td>
               <td><input type = "text" name = "email"></td>
            </tr>
            
              <tr>
               <td>LAST_NAME:</td>
               <td><input type = "text" name = "website"></td>
            </tr> 
            
           
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
               </td>
            </tr>
            <tr>
               <td>Password:</td>
               <td>
                 <input type = "text" name = "password">
               </td>
          
            </tr>
            
            <tr>
               <td>
                  <input type = "hidden" name=_token value ="{{csrf_token()}}"/>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
         </table>
      </form>