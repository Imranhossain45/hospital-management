@extends('layouts.backend')
@section('content')
<div class="page-section">
  <div class="container">
    <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

    <form action="{{ route('appointment.update',$appointment->id) }}" method="POST" class="main-form">
      @csrf
      <div class="row mt-5 ">
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="text" name="name" class="form-control" placeholder="Full name" value="{{ $appointment->name }}">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input type="email" name="email" class="form-control" placeholder="Email address.." value="{{ $appointment->email }}">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <input type="date" name="date" class="form-control" 
          value="{{ $appointment->date }}">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select name="doctor" class="custom-select" value="{{ $appointment->doctor }}">
            <option disabled selected>Select Doctor</option>
            @foreach ($doctors as $doctor)
              <option value="{{ $doctor->name }}">{{ $doctor->name }} ({{ $doctor->designation }})</option>
            @endforeach
          </select>
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <input type="number" name="phone" class="form-control" placeholder="Number.." value="{{ $appointment->phone }}">
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message..">{{ $appointment->message }}</textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Update</button>
    </form>
  </div>
</div>
@endsection