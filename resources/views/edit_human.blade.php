@include('layouts.header')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Human</div>

                <div class="panel-body">

                    <a href="{{ url('manage-humans') }}">
                        <input type="button" class="btn btn-default" value="Go Back">
                    </a>

                    <br><br>
                    
                    <form action="{{ url('edit-human') }}" method="post">
                        
                        {{ csrf_field() }}

                        <input type="hidden" name="human_id" value="{{ $human->id }}">

                        <h5>Firstname</h5>
                        <input type="text" name="firstname" class="form-control" placeholder="Firstname" value="{{ $human->firstname }}">

                        <h5>Lastname</h5>
                        <input type="text" name="lastname" class="form-control" placeholder="Lastname" value="{{ $human->lastname }}">

                        <br>

                        <input type="submit" class="btn btn-primary form-control">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')