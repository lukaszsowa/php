<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First name</th>
      <th scope="col">Second name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
    <tr>
        <td>{{ $student->cne }}</td>
        <td>{{ $student->firstName }}</td>
        <td>{{ $student->secondName }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->speciality }}</td>
        <td>
            <a href="{{ url('/show/'.$student->id)}}" class="btn btn-sm btn-info">Show</a>
            <a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ url('/destroy/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach

  </tbody>
</table>