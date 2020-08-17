<!DOCTYPE html>
<html>
<head></head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<table border="1">

  <thead>
<tr>
    <th scope="col">Id</th>

  <th scope="col">Customer_First_Name</th>
  <th scope="col">Customer_Last_Name</th>
  <th scope="col">Customer_Phone_Number</th>
  <th scope="col">Customer_Email</th>
  <th scope="col">Customer_Address</th>
  <th scope="col">Book_ID</th>
  <th scope="col">Book_Name</th>
  <th scope="col">Author</th>
  <th scope="col">Book_Type</th>
  <th scope="col">Start_Date</th>
  <th scope="col">Due_Date</th>
</tr>

</thead>
<tbody>
 
  @foreach($books as $row)
  <tr>
   <td>{{$row->id}}</td>
  
  <td>{{$row->fname}}</td>
  <td>{{$row->lname}}</td>
  <td>{{$row->phone}}</td>
  <td>{{$row->email}}</td>
  <td>{{$row->address}}</td>
  <td>{{$row->bid}}</td>
  <td>{{$row->bname}}</td>
  <td>{{$row->author}}</td>
  <td>{{$row->btype}}</td>
  <td>{{$row->sdate}}</td>
    <td>{{$row->ddate}}</td>



  
</tr>
  
  @endforeach
  

</tbody>
</table>

</body>

</html>