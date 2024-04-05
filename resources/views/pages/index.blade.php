@extends('layouts.app')
@section('content')


<div class="ugf-wrapper">
    <div class="logo">
      <a href="{{url('/')}}">
        <img src="assets/images/logo.png" class="img-fluid logo-white" alt="logo" element-id="173" style="
    width: 80%;
">
        <img src="assets/images/logo-dark.png" class="img-fluid logo-black" alt="logo">
      </a>
    </div>
    <div class="ugf-content-block">
      <div class="content-block">
        <h1>A Free Career Guidance program for Class 9 to 12  Students.</h1>

      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-7 ">




            <div class="ufg-job-application-wrapper pt80 mobiledev">

                @if(session('error'))
    <div id="errorAlert" class="alert alert-light-danger alert-dismissible fade show" role="alert">
        <div class="txt-danger">
            {{ session('error') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

                <form action="{{ route('submitForm') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="studentName">Student Name</label>
                        <input type="text" oninput="this.value = this.value.toUpperCase().replace(/[^A-Z\s]/g, '')" class="form-control" id="studentName" name="student_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span element-id="43" style="
                            font-size: 1rem;
                            color: red;
                        ">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="whatsappNumber">Mobile Number (WhatsApp)</label>
                        <input type="tel" onclick="if(this.value.length === 0) this.value = '+91 '" oninput="this.value = this.value.replace(/\D/g, '').substring(0, 12)"  class="form-control" id="whatsappNumber" name="whatsapp_number" required>
                    </div>
                    <div class="form-group">
                        <label for="iam">I am a</label>
                        <select class="form-control" id="iam" name="education_level" required>
                            <option value="">Select...</option>
                            <option value="9th Std Student">9th Std Student</option>
                            <option value="10th Std Student">10th Std Student</option>
                            <option value="11th Std Student">11th Std Student</option>
                            <option value="12th Std Student">12th Std Student</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="board">Board of Studies</label>
                        <select class="form-control" id="board" name="board_of_studies" required>
                            <option value="">Select...</option>
                            <option value="State Board or Matriculation">State Board or Matriculation</option>
                            <option value="ICSE">ICSE</option>
                            <option value="CBSE">CBSE</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="queries">Any Queries?</label>
                        <textarea class="form-control" id="queries" name="queries" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <x-turnstile />
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>





      </div>
    </div>
    <div class="footer">
      <div class="social-links">
        <a href="#"><i class="lab la-facebook-f"></i></a>
        <a href="#"><i class="lab la-twitter"></i></a>
        <a href="#"><i class="lab la-linkedin-in"></i></a>
        <a href="#"><i class="lab la-instagram"></i></a>
      </div>
      <div class="copyright text-black">
        <p class="text-black">Copyright © 2006 - {{ date('Y') }} EGS Pillay Group of Institution. All Rights Reserved</p>
      </div>
    </div>
  </div>
@endsection

