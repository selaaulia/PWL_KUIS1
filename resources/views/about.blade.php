@extends('layouts.app')

@section('title')
    {{$title}}
@endsection

@section('statusAbout')
    {{$status}}
@endsection

@section('content')
            <!-- Page Content -->
    <div class="page-heading about-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-content">
                <h4>about us</h4>
                <h2>our company</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      <div class="best-features about-features">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Our Background</h2>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-image">
                <img src="assets/images/feature-image.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-content">
                <h4>Who we are &amp; What we do?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis.</p>
                <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      
      <div class="team-members">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Our Team Members</h2>
              </div>
            </div>
            @foreach ($members as $member)
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src={{$member->image}} alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>{{$member->name}}</h4>
                  <span>{{$member->job}}</span>
                  <p>{{$member->info}}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <br>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="/about?page=1">1</a></li>
                <li class="page-item"><a class="page-link" href="/about?page=2">2</a></li>
                <li class="page-item"><a class="page-link" href="/about?page=3">3</a></li>
              </ul>
            </nav>
          <br><br>
        </div>
      </div>
  
  
      <div class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-gear"></i>
                </div>
                <div class="down-content">
                  <h4>Product Management</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                  <a href="#" class="filled-button">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-gear"></i>
                </div>
                <div class="down-content">
                  <h4>Customer Relations</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                  <a href="#" class="filled-button">Details</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-gear"></i>
                </div>
                <div class="down-content">
                  <h4>Global Collection</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                  <a href="#" class="filled-button">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      <div class="happy-clients">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Happy Partners</h2>
              </div>
            </div>
            <div class="col-md-12">
              <div class="owl-clients owl-carousel">
                <div class="client-item">
                  <img src="assets/images/client-01.png" alt="1">
                </div>
                
                <div class="client-item">
                  <img src="assets/images/client-01.png" alt="2">
                </div>
                
                <div class="client-item">
                  <img src="assets/images/client-01.png" alt="3">
                </div>
                
                <div class="client-item">
                  <img src="assets/images/client-01.png" alt="4">
                </div>
                
                <div class="client-item">
                  <img src="assets/images/client-01.png" alt="5">
                </div>
                
                <div class="client-item">
                  <img src="assets/images/client-01.png" alt="6">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection