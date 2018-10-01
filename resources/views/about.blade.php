@extends('layouts.app')
@section('content')
<div class="shadow-md p-3 mb-5 rounded" style="background-color: #ECECEA;">
  <p align="justify">The <b>Herald Discussion Forum(HDF)</b> is a discussion forum that gives information about various programming languages, general knowledge related questions, information related to Asp.net,Vb.net ,Java,Php,Os related questions,etc. </p>
  <p align="justify">This forum is useful for the beginners to get information  related to  various topics. There is a centralized database in which all the information is managed. The administrator acts as the highest authority and has the rights to update, delete and edit the database. The user has to create the account to access the data. Once the user has created the account in the database he becomes the connected user. When some other user asks the  questions these connected user if  knows the answer can reply the answer it. The user who logged in can select the questions according to the category. The administrator can insert new topic  dynamically. The connected user while logged in can exchange messages with each other. If the message is present in the database the answer is received to the person who asked the question immediately. When the user asks the question related to any topic all the related question  and their answers will be displayed. This site also gives the number of times the question is viewed and  number of times the question is answered. This site also gives us information who had asked the questions and which users has replied to those question.  </p>
</p>
</div>
@endsection
@section('contents')
<section class="testimonials text-center shadow-lg p-3 rounded" style="background-color:#567D8C; color:white;">
      
        <h2 class="mb-5">What Users are saying...</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
             <img  src="assets/rashmi.jpg" class="img-fluid shadow-lg" style=" border-radius:50%;height:150px;width:150px;">
              <h5>Rashmi K.C</h5>
              <p class="font-weight-bold mb-0">"This is fantastic! Thanks so much guys!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img  src="assets/user.jpg" class="img-fluid shadow-lg" style=" border-radius:50%;height:150px;width:150px;">
              <h5>Santosh Ghimere</h5>
              <p class="font-weight-bold mb-0">"This is amazing. I've been using it to create lots of super job dones."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img  src="assets/kabin.jpg" class="img-fluid shadow-lg" style=" border-radius:50%;height:150px;width:150px;">
              <h5>Kabin Gurung</h5>
              <p class="font-weight-bold mb-0">"Thanks so much for making these free resources available to us!"</p>
            </div>
          </div>
        </div>
     
    </section>
@endsection
