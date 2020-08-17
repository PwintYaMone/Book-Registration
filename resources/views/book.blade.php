<!DOCTYPE html>
<html>
<head></head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<section>
	<div class="container">
		<div class="col-sm-6">
			
              <form method="post" action="{{route('book.store')}}">

				  @csrf
				<h2>Book Registration</h2>
 				 <div class="form-group">
 				 	<div class="form-group">
            
                   
  				<div>
    				<label for="name">Customer_First_Name</label>
    				<input type="text" class="form-control" name="fname" id="fname" aria-describedby="fnameHelp">
  				</div>
         <div>
            <label for="name">Customer_Last_Name</label>
            <input type="text" class="form-control" name="lname" id="lname" aria-describedby="lnameHelp">
          </div>
          <div>
            <label for="phone">Customer_Phone_Number</label>
            <input type="text" class="form-control" name="phone" id="phone" aria-describedby=phoneHelp>
          </div>
            <div>
    				<label for="email">Customer_Email</label>
    				<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
  				</div>
           <div>
            <label for="address">Customer_Address</label>
            <input type="address" class="form-control" name="address" id="address" aria-describedby="addressHelp">
          </div>
          <div>
            <label for="bid">Book_ID</label>
            <input type="number" class="form-control" name="bid" id="bid" aria-describedby="idHelp">
          </div>
          <div>
            <label for="bname">Book_Name</label>
            <input type="text" class="form-control" name="bname" id="bname" aria-describedby="bnameHelp">
          </div>
          <div >
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" id="author" aria-describedby="authorHelp">
          </div>
          <div >
            <label for="bname">Book_Type</label>
            <input type="text" class="form-control" name="btype" id="btype" aria-describedby="btypeHelp">
          </div>
           <div>
            <label for="sdate">Start_Date</label>
            <input type="date" class="form-control" name="sdate" id="sdate" aria-describedby="sdateHelp">
          </div>
           <div>
            <label for="ddate">Due_Date</label>
            <input type="date" class="form-control" name="ddate" id="ddate" aria-describedby="sdateHelp">
          </div>
  				
  				
 				 
  				
  				          <button type="submit" class="btn btn-primary">ADD</button>
                    <button type="submit" class="btn btn-primary">Edit</button>

                    <button type="reset" class="btn btn-primary">Cancel</button>

			</form>
		</div>
		
	</div>
</section>
</body>

</html>