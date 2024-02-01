<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Handling</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
        <h2>Contact Us</h2>
  <form action="contact" method="POST">
    @csrf
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      @error('name')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      @error('email')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="meassage">Meassage:</label>
    <textarea class="form-control" name="message" placeholder="Enter message..." rows="5"></textarea>
    @error('message')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>
  </form>
</div>
</body>
</html>
           
        </div>
    </div>
 
