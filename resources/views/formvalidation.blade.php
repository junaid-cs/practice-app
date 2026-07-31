@extends('layout1.mainlayout');
@section('content')





    <form action="{{route('add.validation')}}" method="POST">
        @csrf
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">
                                    <i class="fas fa-user me-1"></i>Full Name
                                </label>
                                <input type="text" 
                                       class="form-control form-control-lg" 
                                       id="name" 
                                       value="{{old('name')}}" 
                                       name="name" 
                                       placeholder="Enter your full name" 
                                       >
                                       @error('name')  
                                       <div class="text-danger">
                                           {{$message}}
                                        </div>
                                        @enderror
                            </div>

                            <!-- Age Field -->
                            <div class="mb-3">
                                <label for="age" class="form-label fw-bold">
                                    <i class="fas fa-calendar-alt me-1"></i>Age
                                </label>
                                <input type="number" 
                                       class="form-control form-control-lg @error('age') invalid @enderror" 
                                       id="age" 
                                       value="{{old('age')}}" 
                                       name="age" 
                                       placeholder="Enter your age" 
                                       min="1" 
                                       max="150" 

                                       >
                                @error('age')  
                                       <div class="text-danger">
                                           {{$message}}
                                        </div>
                                        @enderror
                            </div>

                            <!-- City Field -->
                            <div class="mb-3">
                                <label for="city" class="form-label fw-bold">
                                    <i class="fas fa-city me-1"></i>City
                                </label>
                                <input type="text" 
                                       class="form-control form-control-lg" 
                                       id="city"
                                       value="{{old('city')}}" 
                                       name="city" 
                                       placeholder="Enter your city" 
                                       >
                                @error('city')  
                                       <div class="text-danger">
                                           {{$message}}
                                        </div>
                                        @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Submit
                                </button>
                            </div>
                        </form>


@endsection