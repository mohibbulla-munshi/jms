@extends('layouts.master')

@section('bodySection')
    <!-- Info Section -->
    <div class="login-section">
        <!-- Login Form -->
        <div class="login-form default-form">
            <div class="form-inner">
                <h3>Add Employer</h3>
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
                        <label>Employer Name</label>
                        <input type="email" name="email" placeholder="Enter the Job Title">
                    </div>

                    <div class="form-group">
                        <label>Employer Category</label>
                        <input type="text" name="location" placeholder="Enter the Job Category">
                    </div>
                    <div class="form-group">
                        <label>Employer Location</label>
                        <input type="text" name="location" placeholder="Enter the Job Location">
                    </div>
                    <div class="form-group">
                        <label class="" for="inputGroupSelect01">Job Type</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Choose...</option>
                            <option value="1">Private</option>
                            <option value="2">Urgent</option>
                            <option value="3">Full Time</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Employer Description</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a description here...." id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="" for="inputGroupFile01">Image</label>
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
