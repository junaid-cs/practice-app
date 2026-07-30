@extends('layout1.mainlayout');
@section('content')
    <form action="{{route('update.students',$data->id)}}" method="POST">
        @csrf
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">
                                    <i class="fas fa-user me-1"></i>Full Name
                                </label>
                                <input type="text" 
                                       class="form-control form-control-lg" 
                                       id="name" 
                                       value="{{$data->name}}"
                                       name="name" 
                                       placeholder="Enter your full name" 
                                       required>
                                <div class="invalid-feedback">
                                    Please enter your name.
                                </div>
                            </div>

                            <!-- Age Field -->
                            <div class="mb-3">
                                <label for="age" class="form-label fw-bold">
                                    <i class="fas fa-calendar-alt me-1"></i>Age
                                </label>
                                <input type="number" 
                                       class="form-control form-control-lg" 
                                       id="age" 
                                       name="age" 
                                       value="{{$data->age}}"
                                       placeholder="Enter your age" 
                                       min="1" 
                                       max="150" 
                                       required>
                                <div class="invalid-feedback">
                                    Please enter a valid age (1-150).
                                </div>
                            </div>

                            <!-- City Field -->
                            <div class="mb-3">
                                <label for="city" class="form-label fw-bold">
                                    <i class="fas fa-city me-1"></i>City
                                </label>
                                <input type="text" 
                                       class="form-control form-control-lg" 
                                       id="city" 
                                       name="city"
                                       value="{{$data->city}}" 
                                       placeholder="Enter your city" 
                                       required>
                                <div class="invalid-feedback">
                                    Please enter your city.
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Submit
                                </button>
                            </div>
                        </form>


@endsection