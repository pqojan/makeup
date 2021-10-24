<div class="container">
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>	
          <strong>{{ $message }}</strong>
  </div>
  @endif
    
<form action="/send" method="POST">
  @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
        </div>
        <div class="form-group">
          <label for="text">Your message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="text"></textarea>
        </div>
        <button type="submit">Send</button>

</form>

</div>