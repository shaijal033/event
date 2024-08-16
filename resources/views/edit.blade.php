<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="{{asset('bst/css/bootstrap.min.css')}}">
    
</head>
<body>




<div class="container">
    <div class="row">
    <div class="col-4 mt-4">
       
<form method="post" action="{{url('/update_contact')}}">
<div class="container">
        <div class="row">
          @csrf

            <input type="hidden" name="id" value="{{$selected_contact->id}}">
                <h3 class="text-center">Edit here</h3>
                <div class="form-group">
                    <label for="">TITLE</label>
                    <input type="varchar" name="title"   class="form-control"  value="{{$selected_contact->name}}" required>
                </div>
                <div class="form-group">
                    <label for="">DESCRIPTION</label>
                    <input type="varchar" name="description"  class="form-control"  value="{{$selected_contact->age}}">
                </div>
                <div class="form-group">
                    <label for="">date</label>
                    <input type="date" name="date"  class="form-control"  value="{{$selected_contact->email}}">
                </div>
                <div class="form-group">
                    <label for="">LOCATION</label>
                    <input type="varchar" name="location" class="form-control"  value="{{$selected_contact->mobile}}">
                </div>
                
                <input type="submit" value="Enter" class="btn btn-primary">
            </div>
</form>
</div>
</div>
            <div class="col-8 mt-4">
                <!--Table Starts-->
       


</div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>