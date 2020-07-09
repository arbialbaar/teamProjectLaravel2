@extends('layout.master')
@section('title', 'Drone-Class')
@section('menuHome', 'active')  
@section('content')

<div class="container" id="compro">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <h1 class="compro">COMPANY PROFILE COURSE DRONE-CLASS</h1>
         <a href="/daftar" class="btn btn-secondary btn-lg" id="btn">Join Us</a>
    </div>
    <div class="col-md-3"></div>
</div>
</div>

<div class="container" >
      <div class="row">
            <div class="col-md-3 ">
              <h1><b>4 ALASAN untuk BELAJAR di DRONE-CLASS.ORG</b></h1>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2 text-center" id="icon">
                <i class='fa fa-clipboard' style='font-size:75px;'></i>
                <br>
                <br>
                <p>Lorem ipsum dolor amet </p>
            </div>
            <div class="col-md-2 text-center" id="icon">
                <i class='fa fa-clock-o' style='font-size:75px;'></i>
                <br>
                <br>
                <p>Lorem ipsum dolor amet consectetur</p>
            </div>
            <div class="col-md-2 text-center" id="icon">
                <i class='fa fa-file-text-o' style='font-size:75px;'></i>
                <br>
                <br>
                <p>Lorem ipsum dolor amet consectetur</p>
            </div>
            <div class="col-md-2 text-center" id="icon">
                <i class='fa fa-briefcase' style='font-size:75px;'></i>
                <br>
                <br>
                <p>Lorem ipsum dolor</p>
            </div>
      </div>
  </div>
  <br>
  <br>

<div class="container-fluid bg-secondary text-light py-5" >
    <div class="container">
        <div class="row">
            <div class="col md-6">
                <img src="/img/christin-hume-Hcfwew744z4-unsplash.jpg" class="imgabout">
            </div>
            <div class="col-md-6">
                <p><u>Drone-class</u> lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptates vel ullam incidunt quas reprehenderit blanditiis illum sunt maiores iure delectus ipsum autem amet, omnis distinctio neque libero natus temporibus. Culpa voluptates vel ullam incidunt quas reprehenderit blanditiis illum sunt maiores iure delectus ipsum autem amet, omnis distinctio neque libero natus temporibus.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptates vel ullam incidunt quas reprehenderit blanditiis illum sunt maiores iure delectus ipsum autem amet, omnis distinctio neque libero natus temporibus. Culpa voluptates vel ullam incidunt quas reprehenderit blanditiis illum sunt maiores iure delectus ipsum autem amet, omnis distinctio neque libero natus temporibus.</p>
            </div>
            <div class="col md-6">
                <img src="/img/drone4.jpg" class="imgabout">
            </div>
        </div>
    </div>
</div>

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1>APA SAJA YANG AKAN KAMU <strong>PELAJARI</strong> di <strong>DRONE-CLASS.ORG</strong>?</h1>
            <hr class="solid text-dark">
        </div>
    </div>
</div>
<br>
<br>
<div class="container text-center" id="card">
    <div class="card-deck">
        <div class="card border-dark mb-5">
          <br>
          <i class='fa fa-gamepad' style='font-size:100px;'></i>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
        <div class="card border-dark mb-5">
          <br>
          <i class='fa fa-cogs' style='font-size:100px;'></i>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
        <div class="card border-dark mb-5">
          <br>
          <i class='fa fa-address-card' style='font-size:100px;'></i>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
      </div>
</div>

@endsection