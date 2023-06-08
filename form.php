<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<style type="text/css">
		
		h{
			text-align: center;
		}
	</style>
		
</head>
<body>
	<h4><a href="contact.html">BACK</a></h4>
	<h><b>REGISTRATION FORM</b></h>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myForm').submit(function(event) {
        event.preventDefault(); // Prevent form submission
        
        var formData = $(this).serialize(); // Serialize form data
        
        $.ajax({
          type: 'POST',
          url: 'validate_form.php', // Replace with your server-side validation script
          data: formData,
          success: function(response) {
            // Handle the response from the server
            if (response === 'success') {
              // Form validation succeeded
              alert('Form submitted successfully!');
              // Optionally, redirect the user to another page
              window.location.href = 'success.html';
            } else {
              // Form validation failed
              alert('Form validation failed. Please check your inputs.');
            }
          },
          error: function() {
            // Handle the AJAX request error
            alert('Error occurred while submitting the form.');
          }
        });
      });
    });
  </script>

</head>
<body>
<form id="myForm" method="post">
   <table>
      <tr>
        <td>
          First Name:
        </td>
        <td>
          <input type="text" placeholder="First Name" name="">
          </td>
          </tr>
        <tr>
        <td>
          Surname Name:
        </td>
        <td>
          <input type="text" placeholder="Surname" name="">
          </td>
          </tr>
        <tr>
        <td>
          Nationality:
        </td>
        <td>
          <input type="text" placeholder="Nationality" name="">
          </td>
          </tr>
            <tr>
            <td>
              Phone:
          </td>
          <td>
            <input type="Phone" placeholder="Phone" name=" ">
            </td>
            <tr>
            <td>
            <tr>
            <td>  
            Email:
            </td>
            <td>
            <input type="mail" placeholder="Email" name="">
            </td>
            </tr>

          <tr>
            <td>
              Password:
          </td>
          <td>
            <input type="Password" placeholder="Password" name=" ">
            </td>
            </tr>

            <tr>
            <td>
            Gender:
            </td>
            <td>
            <input type="radio" name="Gender">Male
            <input type="radio" name="Gender">Female
            <input type="radio" name="Gender">Other
            </td>
            </tr> 
            <tr>
            <td>
              <input type="submit" placeholder="submit" value="submit">
          </td>
  </form>
</body>
</html>