@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Input Coffe Beans</h1>
        </div>
        <div class="row">
            <div class="col">
            <form action="{{ route('') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Bean Name:</label>
                        <input type="text" class="form-control" name="" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Bean Origin:</label>
                        <input type="text" class="form-control" name="" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Bean Type:</label>
                        <input type="text" class="form-control" name="" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Done</button>
                </form>
            </div>
        </div>
    </div>
@endsection
