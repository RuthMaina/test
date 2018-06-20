<?php
/**
 * Created by PhpStorm.
 * User: Ruth
 * Date: 11/06/2018
 * Time: 20:44
 */
?>
<html>
<head>
    <title>Student Form</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="/student">Student</a></li>
      <li><a href="/fees">Fees</a></li>
      <li><a href="/searchPage">Search</a></li>
    </ul>
  </div>
</nav>

<br>

<!--Validation error message-->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <h3 align="center">Student Details</h3>
    <form class="form-horizontal" action="/student/store" method="post">
        {{@csrf_field()}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Student Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="e.g. John Doe" align="center">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="dob">Date of Birth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="dob" placeholder="e.g. 29/02/2000">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="address">Student Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="address" placeholder="e.g. 12792, Nakuru">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
<br><br>

<div class="container">
    <!--A table that displays all the registered students-->
    <div class="row" style="margin: 0 auto; width: 75%;">
        <div class="col-md-12">
            <h3 align="center">Student Records</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Full Name</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody >
                @foreach($students as $row)
                    <tr>
                        <td>{{$row['studentNo']}}</td>
                        <td>{{$row['fullName']}}</td>
                        <td>{{$row['dob']}}</td>
                        <td>{{$row['address']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
