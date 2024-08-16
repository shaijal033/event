<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: black; /* Default text color for the body */
    background-color: #f4f4f4; /* Default background color for the body */
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #1E90FF; /* Blue background for the header */
    color: white; /* White text color */
    padding: 10px 20px;
}

.header-left h1 {
    margin: 0;
    font-size: 24px;
    color: white; /* Ensure the title text is white */
}

.header-right nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.header-right nav ul li {
    display: inline;
    margin-left: 20px;
}

.header-right nav ul li a {
    color: white; /* White color for navigation links */
    text-decoration: none;
}

.container {
    display: flex;
    margin-top: 20px;
}

.sidebar {
    width: 25%;
    background-color: #f4f4f4;
    padding: 15px;
    color: black; /* Black text color for the sidebar content */
}

.content {
    width: 75%;
    padding: 15px;
    color: black; /* Black text color for the main content */
}
.new-container {
    display: flex;
    margin-top: 20px;
    color: white; /* Ensure text in new-container is white */
}

.actions {
    width: 25%; /* One third of the total page width */
    padding: 15px;
    background-color: #1E90FF; /* Blue background for the actions div */
    color: white; /* White text color */
}

.additional-content {
    width: 66.67%; /* Two thirds of the total page width */
    padding: 15px;
    background-color: #1E90FF; /* Blue background for the additional content div */
    color: white; /* White text color */
}

.actions ul {
    list-style-type: none;
    padding: 0;
}

.actions ul li {
    margin-bottom: 10px;
}

.actions ul li a {
    color: white; /* White color for links */
    text-decoration: none;
}

.actions ul li a:hover {
    text-decoration: underline;
}
.form-container {
    background-color: #ffffff; /* White background for the form */
    padding: 20px;
    border-radius: 8px;
    max-width: 800px;
    margin: 0 auto; /* Center the form */
    color: black; /* Black text for form inputs */
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #1E90FF; /* Blue color for labels */
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    color: black; /* Black text in the input fields */
}

.form-actions {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
}

.btn-save {
    background-color: #1E90FF; /* Blue background for Save button */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-save:hover {
    background-color: #006bb3; /* Darker blue on hover */
}

.btn-cancel {
    background-color: #ccc; /* Gray background for Cancel button */
    color: black;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-cancel:hover {
    background-color: #999; /* Darker gray on hover */
}


</style>
<body>
    <header>
        <div class="header-left">
            <h1>Event Scheduler</h1>
        </div>
        <div class="header-right">
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/events') }}">Events</a></li>
                    <li><a href="{{ url('/sessions') }}">Sessions</a></li>
                    <li><a href="{{ url('/speakers') }}">Speakers</a></li>
                    <li><a href="{{ url('/schedule') }}">Schedule</a></li>
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="new-container">
        
        <div class="actions">
            <h2>Manage</h2>
            <ul>
                <li><a href="{{ url('/events/create') }}">Create Event</a></li>
                <li><a href="{{ url('/events') }}">View Events</a></li>
                <li><a href="{{ url('/sessions/create') }}">Create Session</a></li>
                <li><a href="{{ url('/sessions') }}">View Sessions</a></li>
                <li><a href="{{ url('/speakers/create') }}">Create Speaker</a></li>
                <li><a href="{{ url('/speakers') }}">View Speakers</a></li>
                <li><a href="{{ url('/schedule/optimize') }}">Optimized Schedule</a></li>
            </ul>
        </div>
    
        <form method="post" action="{{url('/bb')}}">
        <div class="container">
        <div class="row">
          @csrf

            
                <h3 class="text-center">Create Event</h3>
                <div class="form-group text-center">
                    <label for="">TITLE</label>
                    <input type="varchar" name="title"   class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">DESCRIPTION</label>
                    <input type="varchar" name="description"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="">DATE</label>
                    <input type="date" name="date"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="">LOCATION</label>
                    <input type="varchar" name="location" class="form-control">
                </div>
                
                <input type="submit" value="Enter" class="btn btn-primary">
            </div>
</form>
</div>
</div>
            <div class="col-8 mt-4">
                <!--Table Starts-->
                <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">TITLE</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">DATE</th>
      <th scope="col">LOCATION</th>
      <th scope="col">Operation</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach($items as $item)
    <tr>
        <th scope="row">{{$loop->index+1}}</th>
        <td>{{$item->title}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->location}}</td>
        <td><a href="{{url('/delete_contact').'/'.$item->id}}">Delete</a>/<a href="{{url('/edit_contact').'/'.$item->id}}">Edit</a></td>
       
</tr>
@endforeach
</tbody>
</table>





</div>

        </div>
    </div>
</body>
</html>
