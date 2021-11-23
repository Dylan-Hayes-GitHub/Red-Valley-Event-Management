<!DOCTYPE html>
<html lang="en">
<head>
        <title>My Form Validation</title>
    </head>
    <body>
        <?php
        
            if (isset($validation)) {
                echo $validation->listErrors();
            } 

        ?>
  	  <!-- The validation_errors function returns error messages sent back 	  by the validator. If there are no messages, it returns an empty       	  string. -->
     
     	      <!-- form_open function create a form where on submit the Login script is loaded and the 	       validate method is executed. – Opens the Login Controller and the validate function -->
        <?php echo form_open('LoginV2'); ?>
        <h5>Username</h5>
        <input type="text" name="username" value="" size="50" />
        <h5>Password</h5>
        <input type="text" name="password" value="" size="50" />
        <h5>Password Confirm</h5>
        <input type="text" name="passconf" value="" size="50" />
        <h5>Email Address</h5>
        <input type="text" name="email" value="" size="50" />
        <div><input type="submit" value="Submit" /></div>
    </form>
</body>

</html>
