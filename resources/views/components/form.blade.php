<div class="backimage">
  <h1>FORM</h1>
</div>
<div class="container-3">
  <form method="POST" action="{{route('add')}}" >
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="exampleFirstName" class="form-label">First Name</label>
          <input type="text" name="fname" class="form-control" id="exampleFirstName">
        </div>
        <div class="mb-3">
          <label for="exampleSurName" class="form-label">Surname</label>
          <input type="text" name="sname" class="form-control" id="exampleSurName">
        </div>
        <div class="mb-3">
          <label for="exampleMiddleName" class="form-label">Middle Name</label>
          <input type="text" name="mname" class="form-control" id="exampleMiddleName">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="submit">
          <button type="submit" class="btn btn-danger button">Submit</button>
        </div>
        </div>
      <div class="offset-md-1 col-md-5">
        <img src="images/Forms-bro.png" alt="form">

      </div>

    </div>
    
  </form>
</div>