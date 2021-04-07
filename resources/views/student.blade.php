<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Student managment system</title>
  </head>
  <body>

  @include("navbar")
    
    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5"></section>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">
            <form action="{{ url('/store')}}" method="post">
            @csrf
              <div class="form-group">
                <label>CNE</label>
                <input name="cne"type="text" class="form-control" placeholder="Enter CNE">
              </div>
              <div class="form-group">
                <label>First Name</label>
                <input name="firstName"type="text" class="form-control" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label>Second name</label>
                <input name="secondName"type="text" class="form-control" placeholder="Enter Second name">
              </div>
              <div class="form-group">
                <label>Age</label>
                <input name="age"type="text" class="form-control" placeholder="Enter age">
              </div>
              <div class="form-group">
                <label>Speciality</label>
                <input name="speciality" type="text" class="form-control" placeholder="Enter speciality">
              </div>
              <input type="submit" class="btn btn-info" value="Save">
              <input type="reset" class="btn btn-warning" value="Reset">
            </form>
            </section>
            </div>
        </div>
    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
            <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">
                <div class="form-group">
                  <label>CNE</label>
                  <input value="{{ $student->cne }}" name="cne"type="text" class="form-control" placeholder="Enter CNE" readonly>
                </div>
                <div class="form-group">
                  <label>First Name</label>
                  <input value="{{ $student->firstName }}" name="firstName"type="text" class="form-control" placeholder="Enter First Name" readonly>
                </div>
                <div class="form-group">
                  <label>Second name</label>
                  <input value="{{ $student->secondName }}" name="secondName"type="text" class="form-control" placeholder="Enter Second name" readonly>
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input value="{{ $student->age }}" name="age"type="text" class="form-control" placeholder="Enter age" readonly>
                </div>
                <div class="form-group">
                  <label>Speciality</label>
                  <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter speciality" readonly>
                </div>
            </section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">
              <form action="{{ url('/update/'.$student->id) }}" method="post">
              @csrf
                <div class="form-group">
                  <label>CNE</label>
                  <input value="{{ $student->cne }}" name="cne"type="text" class="form-control" placeholder="Enter CNE">
                </div>
                <div class="form-group">
                  <label>First Name</label>
                  <input value="{{ $student->firstName }}" name="firstName"type="text" class="form-control" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                  <label>Second name</label>
                  <input value="{{ $student->secondName }}" name="secondName"type="text" class="form-control" placeholder="Enter Second name">
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input value="{{ $student->age }}" name="age"type="text" class="form-control" placeholder="Enter age">
                </div>
                <div class="form-group">
                  <label>Speciality</label>
                  <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter speciality">
                </div>
                <input type="submit" class="btn btn-info" value="Update">
                <input type="reset" class="btn btn-warning" value="Reset">
              </form>
            </section>
            </div>
        </div>
    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>