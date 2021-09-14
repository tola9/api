@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-flex flex-row justify-content-center">
      <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>Login</h3>
            </div>
          <div class="card-body">
            <form>
                <div class="form-group">
                <label for="formGroupExampleInput">Example label</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput2">Another label</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
