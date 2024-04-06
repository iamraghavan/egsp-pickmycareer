@extends('layouts.app')
@section('content')


<div class="ugf-wrapper">
    <div class="logo">
      <a href="{{url('/')}}">

        <h2>EGS Pillay Group of Institution</h2>
        <h5>Nagapattinam</h5>


        <div>


            <img src="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/naac_a.png?alt=media&token=a751dd62-e967-407a-acb2-4053b11a7160">
        <img src="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/National_Board_of_Accreditation.svg?alt=media&token=e397b82f-131e-452c-8a7f-dc24f0742047">
        <img src="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/National_Institutional_Ranking_Framework_logo.png?alt=media&token=43e764eb-2f80-4e59-99e5-363bc6d07721">


        <img src="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/All_India_Council_for_Technical_Education_logo.png?alt=media&token=3313913e-3dd9-48f0-bda5-cc272520eb56">
        <img src="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/NAAC_LOGO.png?alt=media&token=c2551b08-6a99-4315-8d35-5fc4ff3f7504">
            <img src="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/ISO_9001-2015.svg?alt=media&token=ef99263d-fb8a-44c8-b9aa-040735cb8816">
        </div>

        <div>
            <img src="https://lmes.in/lmes-logo-new.jpg">
            <img src="https://hubble.cdn.chittiapp.com/cdn/2024/3/18db3080-e526-11ee-ad98-dffa60db209f_aduthailakku-without-bg_min.webp">
            <img src="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/logo.8ab488a.png?alt=media&token=2411d9ea-3522-47b4-9db2-ae81e7164e09">


        </div>


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

