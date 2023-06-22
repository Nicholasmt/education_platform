@extends('front-layouts.body')
@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/custom.css')}}">
@endsection
@section('content')
{{-- Services starts --}}
<section id="blog" class="section-padding">
<div class="container">
<h3 class="section-title_custom">COLLEGE CONSULTING SERVICES</h3>   
<p class="text-center font-18">Our unique service packages provide intensive support on every element of a student’s college application – from selection strategies, project planning, and test preparation to personal goal-setting, mentoring, and interview practice – all the tools for success.</p>
<div class="row mt-5">
<div class="col-lg-6 col-md-6 col-xs-12 blog-item">
<div class="blog-item-wrappe">
<div class="blog-item-img">
<a href="#"><img src="{{ asset('front/assets/img/services/img-1.jpg')}}" class="services-img" width="540" height="303" alt=""></a>
</div>
<div class="card mb-3 text-center">
<h3>Portfolio Building</h3>
<p class="services-sub-header mb-3">9th, 10th, and 11th Grade</p>
<p class="services-content">We offer a year long customized package that aids Year 9 to Year 11 students in extracurricular development, exam timelines, community service, internship/research, opportunities, and every other thing to ensure students stand out.</p>
</div>
<div class="text-center services_button mb-4">
<a href="#" class="btn btn-common btn-lg text-capitalize">Learn More</a>
</div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-xs-12 blog-item">
<div class="blog-item-wrappe">
<div class="blog-item-img">
<a href="#"><img src="{{ asset('front/assets/img/services/img-2.jpg')}}" class="services-img" width="540" height="303" alt=""></a>
</div>
<div class="card mb-3 text-center">
<h3>College Application</h3>
<p class="services-sub-header mb-5">12th Grade</p>
<p class="services-content mb-3">Through our unique approach, students build a bullet proof college list, a solid resume, work on their extracurricular activities list and develop compelling essays.</p>
</div>
<div class="text-center services_button">
<a href="#" class="btn btn-common btn-lg text-capitalize">Learn More</a>
</div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-xs-12 blog-item">
<div class="blog-item-wrappe mt-5">
<div class="blog-item-img">
<a href="#"><img src="{{ asset('front/assets/img/services/img-3.jpg')}}" class="services-img" width="540" height="303" alt=""></a>
</div>
<div class="card mb-3 text-center">
<h3 class="mb-4">Tutoring & Test Prep</h3>
<p class="services-content mb-4">Beyond our expert SAT/ACT admissions exam test prep, we offer in person and virtual specific tutoring for our students to help them achieve outstanding results through our team of experienced tutors.</p>
</div>
<div class="text-center services_button">
<a href="#" class="btn btn-common btn-lg text-capitalize">Learn More</a>
</div>
</div>
</div>


<div class="col-lg-6 col-md-6 col-xs-12 blog-item">
<div class="blog-item-wrappe mt-5">
<div class="blog-item-img">
<a href="#"><img src="{{ asset('front/assets/img/services/img-4.jpeg')}}" class="services-img" width="540" height="303" alt=""></a>
</div>
<div class="card mb-3 text-center">
<h4>College Drop Off/ Monitoring</h4>
{{-- <p class="services-sub-header mb-3">2023 College Application Booster®</p> --}}
<p class="services-content">Our experienced mentors are former international students who critically understand the system of academics abroad. This experience gives them the added advantage of being the perfect people to assist you in dropping your child off to college and monitoring your child academically. Giving you constant updates on the well-being of your child..</p>
</div>
<div class="text-center services_button">
<a href="#" class="btn btn-common btn-lg text-capitalize">Learn More</a>
</div>
</div>
</div>

</div>
</div>
</section>
{{-- Sevices ends --}}

{{-- Testimonial Starts--}}
<section class="testimonial section-padding">
<h3 class="section-title">TESTIMONIALS</h3>
<div id="main-slide" class="carousel slide bg-auto" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
<div class="text-center">
<h1 class="animated wow fadeInDown hero-heading base-color hero-area-title" data-wow-delay=".4s">OVER 10+ OUT OF MANY</h1>
<h3 class="animated fadeInUp wow hero-sub-heading base-color text-uppercase hero-area-sub-title" data-wow-delay=".6s">
  Of our students where accepted to one or more of their top three schools
</h3>
 <p class="font-18 mt-2 text-white">
   At Command Education, we strive to spark curiosity and genuine enthusiasm  towards <br> a constructive passion that will form the critical building block of our students’ futures.
 </p>
<a href="#" class="btn btn-common btn-lg mt-3">Learn More</a>
</div>
</div>
<div class="carousel-item">
<div class="text-center">
<div class="container">
<p class="sub-hero" data-wow-delay=".6s"> 
    “THANK YOU!!! THANK YOU!!!! THANK YOU!!!! I am so thrilled to have been accepted to all  of my reach schools. Thank you for your expertise and knowledge in helping me craft the perfect essay. I can’t begin to appreciate how grateful I am for your help.”
    Daniel K., Harvard College
</p>
</div>
<h5 class="text-white mt-3 font-italic"> Josh Rossi</h5>
</div>
</div>
</div>
{{-- <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
<span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left" data-ripple-color="#F0F0F0"></i></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
<span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right" data-ripple-color="#F0F0F0"></i></span>
<span class="sr-only">Next</span>
</a> --}}
</div>
</section>



{{-- Testimonial Ends--}}

{{-- Why us Start--}}
<section class="section-padding">
<div class="">
<div class="row">
<div class="col-lg-5 col-md-5 col-xs-12 consult-bg card_body">
<h3 class="text-center text-white">Why College Au Pier</h3>
<p class="text-title mt-4"></p>
<div class="container">
<p class="text-center font-18 mt-5">
  Did you know that the black student enrollment for most of the Ivy League universities ranges between 7-8%? This is inclusive of all those that identify as black Americans, Blacks and Africans. 
  We are driven by the belief that we can increase African representation at Top Universities globally. 
  College Au Pier is an independent education consulting firm focused on assisting college-bound students to plan and realize their dreams. We are constantly evolving to fulfil many crucial unmet educational needs in an ever-changing educational environment.  
  We are committed to using our skills and experience to make a difference .</p>
</div>
<div class="text-center mt-5">
<p class="base-color font-18 mt-2"> ✓ <span class="text-white">For Middle School</span></p>
<p class="base-color font-18 mt-2"> ✓ <span class="text-white">For Freshmen</span> </p>
<p class="base-color font-18 mt-2"> ✓ <span class="text-white">For Sophomores</span></p>  
<p class="base-color font-18 mt-2"> ✓ <span class="text-white">For Juniors</span></p>  
<p class="base-color font-18 mt-2"> ✓ <span class="text-white">For Seniors</span></p>  
</div>
</div>  
<div class="col-lg-7 col-md-7 col-xs-12 form-bg">
<div class="bg-light">
<h3 class="section-title">BOOK A CONSULTATION</h3>
<div class="col-lg-12 col-md-12 col-xs-12">
<div class="row">
<div class="col-lg-6 col-md-6 col-xs-12">
<div class="form-group has-error">
<label for="first_name">Parent First Name</label>
<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
</div> 
<div class="form-group has-error">
<label for="email">Parent Email</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Email">
</div> 
</div>
<div class="col-lg-6 col-md-6 col-xs-12">
<div class="form-group has-error">
<label for="last_name">Parent Last Name</label>
<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
</div>  
<div class="form-group has-error">
<label for="last_name">Phone Number</label>
<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
</div> 
</div>
</div>
 
<div class="form-group has-error">
<label for="location">Where are you located?*</label>
<input type="text" class="form-control" name="location" placeholder="Location">
</div>

<div class="form-group has-error">
<label for="student_name">Student Full Name</label>
<input type="text" class="form-control" id="student_name" name="student_name" placeholder="Student Name">
</div> 

<div class="row">
<div class="col-lg-6 col-md-6 col-xs-12">
<label for="current_year">Current School Year</label>
<input type="month" class="form-control" name="current_year" placeholder="Current Year">
</div>
<div class="col-lg-6 col-md-6 col-xs-12">
<label for="graduation_year">Student's Graduation Year</label>
<input type="month" class="form-control" name="graduation_year" placeholder="Graduation Year">
</div>
</div> 

<div class="form-group has-error">
<label for="about">Tell us more about your student</label>
<textarea name="about"  class="form-control" id="" cols="30" rows="5"></textarea>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-xs-12">
<label for="current_year">How did you hear about us?</label>
<select name="current_year" class="form-control">
<option disabled selected value="">Please Select</option>
<option value="Google/ Search Engine">Google/Search Engine</option>
<option value="LinkedIn">LinkedIn</option>
<option value="Social Media (Instagram, Facebook, TikTok, etc)">Social Media (Instagram, Facebook, TikTok, etc)</option>
<option value="News Article (Forbes, NY Post, etc)">News Article (Forbes, NY Post, etc)</option>
<option value="Magazine / Media">Magazine / Media</option>
<option value="Friend or Colleague">Friend or Colleague</option>
<option value="Other">Other</option>
</select>
</div>
<div class="col-lg-6 col-md-6 col-xs-12">
<label for="graduation_year">How soon would you like to start working with us?</label>
<select name="graduation_year" class="form-control">
<option disabled selected value="">Please Select</option>
<option value="Immediately">Immediately</option>
<option value="Within the next 3 months">Within the next 3 months</option>
<option value="Not sure">Not sure</option>
</select>
</div>
</div> 
<div class="form-group mt-5">
<input type="checkbox" name="terms_of_service">
<label for="terms_of_service" class="ml-2">I agree to the <a href="" class="text-color">terms and conditions</a> and  <a href="" class="text-color">privacy policy</a></label>
</div>
<div class="form-group">
 <button type="submit" class="btn btn-common">Submit</button>
</div>
</div>
</div>
</div>  
</div>
</div>
</section>
{{-- Why us Ends--}}

 
@endsection