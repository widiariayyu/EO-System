@extends('layouts.main')

@section('content')
			<!-- Content-->
			<div class="md-content">
				<div class="consult-projectDetail">
					
					<!-- carousel__element owl-carousel -->
					<div class="carousel__element owl-carousel consult-projectDetail__slider" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"autoplay":true,"animateOut":"fadeOut","margin":0}'>
						<div><img src="{{asset('theme/img/projects/detail-1.jpg')}}" alt=""></div>
						<div><img src="{{asset('theme/img/projects/detail-2.jpg')}}" alt=""></div>
						<div><img src="{{asset('theme/img/projects/detail-3.jpg')}}" alt=""></div>
					</div><!-- End / carousel__element owl-carousel -->
					
					<div class="container">
						<div class="consult-projectDetail__main">
							
							<!-- social-01 -->
							<div class="social-01 social-01__style-02">
								<nav class="social-01__navSocial"><a class="social-01__item" href="#"><i class="fa fa-facebook"></i></a><a class="social-01__item" href="#"><i class="fa fa-skype"></i></a><a class="social-01__item" href="#"><i class="fa fa-twitter"></i></a><a class="social-01__item" href="#"><i class="fa fa-instagram"></i></a>
								</nav>
							</div><!-- End / social-01 -->
							
							<div class="row">
								<div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">
									<div class="consult-projectDetail__content">
										<div class="row">
											<div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
												<h1>Mark Warner To Oppose Sessions For Attorney General.</h1>
												<p class="text">Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque. Sed rutrum ligula eu sagittis volutpat. Aliquam erat volutpat. Praesent mattis non nulla eget tempus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer accumsan tellus sed pur</p>
												<div class="row row-eq-height" style="margin-bottom:30px;">
													<div class="col-lg-6 ">
														
														<!-- infobox -->
														<div class="infobox">
															<h2 class="infobox__title"><a href="#">Client</a></h2>
															<div class="infobox__description">Bain Transportation & Logistics</div>
														</div><!-- End / infobox -->
														
													</div>
													<div class="col-md-6 ">
														
														<!-- infobox -->
														<div class="infobox">
															<h2 class="infobox__title"><a href="#">date</a></h2>
															<div class="infobox__description">21 August, 2017  -  Now</div>
														</div><!-- End / infobox -->
														
													</div>
													<div class="col-md-6 ">
														
														<!-- infobox -->
														<div class="infobox">
															<h2 class="infobox__title"><a href="#">Team</a></h2>
															<div class="infobox__description">
													<p>Mr. Hasib Sharifcompanies</p>
													<p>Mr. Clark Roberts</p>
												</div>
														</div><!-- End / infobox -->
														
													</div>
													<div class="col-md-6 ">
														
														<!-- infobox -->
														<div class="infobox">
															<h2 class="infobox__title"><a href="#">Project type</a></h2>
															<div class="infobox__description">Finance, Investment, Services</div>
														</div><!-- End / infobox -->
														
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 ">
												<div class="image-full"><img src="assets/img/blogs/detail/4.jpg" alt=""></div>
											</div>
											<div class="col-lg-6 ">
												<div class="image-full"><img src="assets/img/blogs/detail/3.jpg" alt=""></div>
											</div>
										</div>
										<div class="row">
											<div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
												<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet ut lacus a tincidunt. Quisque luctus nibh augue, non ultrices arcu molestie in. Integer finibus dolor lorem, tempor pretium lectus o</p>
											</div>
										</div>
										<div class="image-full"><img src="assets/img/projects/detail-1.jpg" alt=""></div>
										<div class="row">
											<div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
												<p class="text">Maecenas lorem ex, euismod eget pulvinar non, facilisis ut leo. Quisque placerat purus in neque efficitur ornare. Nam at justo magna. Aliquam venenatis odio ante, non euismod augue porttitor eget. Maecenas nec viverra eros, eget euismod felis. Integer cursus libero sed lorem euismod, vel iaculis fel</p>
											</div>
										</div>
										<div class="image-full"><img src="assets/img/projects/detail-2.jpg" alt=""></div>
										<div class="row">
											<div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
												<p class="text">Integer placerat ullamcorper urna nec rhoncus. Sed velit justo, lacinia non sapien imperdiet, sagittis fringilla risus. Nulla in est lobortis massa consectetur scelerisque. Etiam eu metus leo. Mauris a maximus magna. Maecenas odio tortor, tincidunt non lacus a, congue imperdiet diam. Pellentesque in</p>
											</div>
										</div>
										<div class="image-full"><img src="assets/img/projects/detail-3.jpg" alt=""></div>
										<div class="row">
											<div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
												<p class="text">Nam suscipit nisi risus, et porttitor metus molestie a. Phasellus id quam id turpis suscipit pretium. Maecenas ultrices, lacus ut accumsan maximus, odio augue rhoncus augue, vulputate maximus mi sapien sed nisl. Sed fermentum congue orci sed lacinia. Nulla nunc purus, consectetur eget rutrum et, rho</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

					<div class="container">
						<div class="title-01" style="margin-top: 50px";>
							<button onclick ="OpenModal()" type="button" class="btn btn-primary" data-toggle="modal" data-target="#OrderModal"> Order Now</button>
						</div>
					</div>
 
<div class="modal fade" id="OrderModal" tabindex="-1" role="dialog" aria-labelledby="OrderModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="OrderModalLabel">Order</h4>
	      </div>
	      <form action="{{route('user.store')}}" method="post">
	      	{{csrf_field()}}
	      	<div class="modal-body">
	        	@include('user.FormOrder')
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	<button type="submit" class="btn btn-primary">Save</button>
	      	</div>
	      </form>
	    </div>
	  </div>
	</div>


<!-- <style>
	.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    //overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}


.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>

<!-- The Modal -->
<!-- <div id="myModal" class="modal">

  <!-- Modal content -->
  <!-- <form action="{{route('user.store')}}" method="post">
	{{csrf_field()}}
		<div class="modal-content" >
			<span class="close">&times;</span>
				<div class="modal-body">
						@include('user.FormOrder')
				</div>
				<div class="modal-footer" style="margin-left: 450px;">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
	      		</div>		
 		</div>
	</form>
</div>

<script> --> 
<!-- // Get the modal
// var modal = document.getElementById('myModal');

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
//     modal.style.display = "block";
// }

// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }
// </script> --> -->
	
@endsection			