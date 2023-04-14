@extends('Main')

@section('Main-section')
    <div class="container">
        <div class="row">
            <form>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Name</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" id="submit" class="btn btn-primary">Action</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
