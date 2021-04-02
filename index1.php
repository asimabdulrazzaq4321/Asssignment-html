<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
</head>
<body>
	<form class="form-horizontal" action="form.php" method="post">
		<div class="row">

			<div class="col-md-4">
				
			</div>

			<div class="col-md-4">
				<fieldset>
						<legend style="font-size: 30px;"> <b>Personal Information</b></legend>
						<div class="form-group">
						<label  style="font-size: 20px;">First Name:</label>
						<input type="text" name="fname" class="form-control">
						</div>
						<div class="form-group">
							<label style="font-size: 20px;">Last Name:</label>
						<input type="text" name="lname" class="form-control">
							
						</div>
						
						<div class="form-group">
							<label style="font-size: 20px;">Gender:</label>
						<label for="male" style="font-size: 17px;">Male</label>
						<input type="radio" name="gender"  id="male">
						<label for="female" style="font-size: 17px;">Female</label>
						<input type="radio" name="gender"  id="female">
							
						</div>
						<div class="form-group">
							<label>Email:</label>
							<input type="Email" name="email" placeholder="email@gmail.com" class="form-control">
							
						</div>
		

				</fieldset>

				</div>
			
					<div class="col-md-4">
					
					</div>
				
	
		</div>

		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				<fieldset>
					<legend>Academic Information</legend>
					<label>Degree</label>
					<select class="form-control" name="selected">
						<option selected="selected">Master of Bussiness Admistration</option>
						<option value="Master of Computer Science">Master of Computer Science</option>
						<option value="Master of Arts">Master of Arts</option>
						<option value="Master of Zoology">Master of Zoology</option>
						<option value="Master of Biology">Master of Biology</option>
						<option value="Master of Chemistry">Master of Chemistry</option>

					</select>
					<div class="form-group">
					<label>Student ID:</label>
					<input type="password" name="sid" class="form-control">
					</div>

				</fieldset>
				
			</div>
		</div>

			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<div class="form-group" >
			<label>Message:</label>
			<p>
			<textarea rows="10" cols="40" readonly="readonly" cols="form-control">Terms and Condition....</textarea></p>
					
				</div>
				<div class="col-md-4">
					
				</div>
				
			</div>
		
			
			</div>
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<button type="Submit" class="btn btn-success">Submit</button>
				</div>
				<div class="col-md-4">
					<button type="Reset" class="btn btn-primary" style="margin-left: -250px;">Reset</button>
				</div>
				
			</div>





	
	</form>
</body>
</html>