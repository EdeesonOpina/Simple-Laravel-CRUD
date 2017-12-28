@include('layouts.header')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">View Human</div>

                <div class="panel-body">
                    
                        <a href="{{ url('manage-humans') }}">
                            <input type="button" class="btn btn-default" value="Go Back">
                        </a>

                        <br><br>

                        <h5>Firstname: {{ $human->firstname }}</h5>
                        

                        <h5>Lastname: {{ $human->lastname }}</h5>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')