@extends('layouts.master')

@section('bodySection')
    <!-- Info Section -->
    <div class="login-section">
        <!-- Login Form -->
        <div class="login-form default-form">
            <div class="form-inner">
                <h3>Add Your CV</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            <!--Login Form-->
                <form method="post" action="{{route('login')}}">
                    @csrf

                    <div class="form-group">
                        <label class="" for="inputGroupFile01">CV</label>
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                    <div class="form-group">
                        <button class="theme-btn btn-style-one" type="submit" name="log-in">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!--End Login Form -->
    </div>
    <!-- End Info Section -->
@endsection
