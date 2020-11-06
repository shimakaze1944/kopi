@extends('layouts.app')
@section('content')

    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Coffee Beans</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
            <a href="{{ route('') }}" class="btn btn-primary btn-block" role="button">Add Beans</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr style="background-color: rgba(255, 255, 255, 0.8)">
                    <th scope="col">Bean Name</th>
                    <th scope="col">Bean Origin</th>
                    <th scope="col">Bean Type</th>
                </tr>
                </thead>
                <tbody>

                @foreach()
                    <tr style="background-color: rgba(255, 255, 255, 0.5)">
                    <td><a href="{{ route() }}" onmouseover="this.style.textShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.textShadow='0px 0px 0px LightSkyBlue'">{{}}</a></td>
                        <td>{{}}</td>
                        <td>{{}}</td>
                        <td>{{}}</td>
                        <td>{{}}</td>
                        <td>
                            <form action="{{ route() }}" method="post" onsubmit="return confirm('This will delete all your data, continue ?')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onmouseover="this.style.boxShadow='0px 0px 15px HotPink'" onmouseout="this.style.boxShadow='0px 0px 0px HotPink'">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
