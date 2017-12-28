@include('layouts.header')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Manage Humans</div>

                <div class="panel-body">
                    
                    <a href="{{ url('add-human') }}">
                        <input type="button" class="btn btn-primary" value="Add Human">
                    </a>

                    <br><br>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Firstname</td>
                                <td>Lastname</td>
                                <td>View</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($humans as $human)
                            <tr>
                                <td>{{ $human->id }}</td>
                                <td>{{ $human->firstname }}</td>
                                <td>{{ $human->lastname }}</td>

                                <td>
                                    <a href="{{ url('view-human/'.$human->id) }}">
                                        <input type="button" class="btn btn-primary" value="View">
                                    </a>
                                </td>

                                <td>
                                    <a href="{{ url('edit-human/'.$human->id) }}">
                                        <input type="button" class="btn btn-info" value="Edit">
                                    </a>
                                </td>

                                <td>
                                    <a href="{{ url('delete-human/'.$human->id) }}">
                                        <input type="button" class="btn btn-danger" value="Delete" onclick="if (!confirm('Are you sure?')) return false;">
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <center>
                        {{ $humans->links() }}
                    </center>

                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')