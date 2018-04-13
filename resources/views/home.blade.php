@extends('layouts.main')

@section('content')

            
            <!-- Content-->
            <div class="md-content">
                
                <!-- slider -->
                <div class="slider">
                    
                    <!-- carousel__element owl-carousel -->
                    <div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": true, "autoplayTimeout": 3000}'>
                        <div class="slider__item" style="background-image: url('https://picsum.photos/1080/1083');"> 
                            <div class="md-tb">
                                <div class="md-tb__cell">
                                    <div class="slider__content">
                                        <div class="container">
                                            <h2>We are Making an Event</h2>
                                            <p>Event Organizer bla bla bla </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item" style="background-image: url('https://picsum.photos/1920/1080');">
                            <div class="md-tb">
                                <div class="md-tb__cell">
                                    <div class="slider__content">
                                        <div class="container">
                                            <h2>We create the trend</h2>
                                            <p>Curabitur elementum urna augue, eu porta purus gravida in. Cras consectetur, lorem a cursus vestibulum, ligula purus iaculis nulla, in dignissim risus turpis id justo. Sed eleifend ante et ligula elei</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End / carousel__element owl-carousel -->
                    
                </div><!-- End / slider -->
                
                <!-- Service-->
                
                <!-- Section -->
                <section class="md-section" style="background-color:#f7f7f7;padding:0;">
                    <div class="container">
                        <div class="textbox-group">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 ">
                                    
                                    <!-- textbox -->
                                    <div class="textbox">
                                        <div class="textbox__image"><a href="#"><img src="{{ asset('theme/img/cupcakes.jpg') }}" alt=""/></a></div>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><a href="#">Birthday Party</a></h2>
                                            <div class="textbox__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet ut lacus a tincidunt. Quisque lu</div>
                                        </div>
                                    </div><!-- End / textbox -->
                                    
                                </div>
                                <div class="col-md-4 col-lg-4 ">
                                    
                                    <!-- textbox -->
                                    <div class="textbox">
                                        <div class="textbox__image"><a href="#"><img src="{{ asset('theme/img/wedding.jpg') }}" alt=""/></a></div>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><a href="#">Wedding Party</a></h2>
                                            <div class="textbox__description">Nam elit ligula, egestas et ornare non, viverra eu justo. Aliquam ornare lectus ut pharetra dictum. </div>
                                        </div>
                                    </div><!-- End / textbox -->
                                    
                                </div>
                                <div class="col-md-4 col-lg-4 ">
                                    
                                    <!-- textbox -->
                                    <div class="textbox">
                                        <div class="textbox__image"><a href="#"><img src="{{ asset('theme/img/grad.jpg') }}" alt=""/></a></div>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><a href="#">Graduation</a></h2>
                                            <div class="textbox__description">Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque. Sed rutrum ligula eu</div>
                                        </div>
                                    </div><!-- End / textbox -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End / Section -->
                
                
                <!-- Section -->
           
                   
                            <!-- Section -->
                        <section class="md-section" style="padding-bottom:0;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">
                                        
                                        <!-- title-01 -->
                                        <div class="title-01" style="margin-bottom:50px;">
                                            <h2 class="title-01__title">Promo</h2>
                                        </div><!-- End / title-01 -->
                                        
                                    </div>
                                </div>
                                <div class="consult-slide">
                                    
                                    <!-- carousel__element owl-carousel -->
                                    <div class="carousel__element owl-carousel" data-options='{"loop":true,"dots":true,"nav":false,"margin":30,"responsive":{"0":{"items":1},"992":{"items":2}}}'>
                                        
                                        <!-- testimonial -->
                                        <div class="testimonial">
                                            <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img src="{{ asset('theme/img/avatars/avatar-01.jpg') }}" alt=""/></a>
                                                <h5 class="testimonial__name">Brandon Hanson</h5><span class="testimonial__position">Support</span>
                                            </div>
                                            <div class="testimonial__content">
                                                <div class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet ut lacus a tincidunt. Quisque luctus nibh augue, non ultrices arcu molestie in. In</div>
                                            </div>
                                        </div><!-- End / testimonial -->
                                        
                                        
                                        <!-- testimonial -->
                                        <div class="testimonial">
                                            <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img src="{{ asset('theme/img/avatars/avatar-02.jpg') }}" alt=""/></a>
                                                <h5 class="testimonial__name">Brandon Hanson</h5><span class="testimonial__position">CEO &amp; Founder</span>
                                            </div>
                                            <div class="testimonial__content">
                                                <div class="testimonial__text">Sed ante nisl, fermentum et facilisis in, maximus sed ipsum. Cras hendrerit feugiat eros, ut fringilla nunc finibus sed. Quisque vitae dictum augue, v</div>
                                            </div>
                                        </div><!-- End / testimonial -->
                                        
                                        
                                        <!-- testimonial -->
                                        <div class="testimonial">
                                            <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img src="{{ asset('theme/img/avatars/1.jpg') }}" alt=""/></a>
                                                <h5 class="testimonial__name">Maria Gutierrez</h5><span class="testimonial__position">Designer</span>
                                            </div>
                                            <div class="testimonial__content">
                                                <div class="testimonial__text">Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque. Sed rutrum ligula eu sagittis volutpat. Aliquam erat volutpat. Praesen</div>
                                            </div>
                                        </div><!-- End / testimonial -->
                                        
                                    </div><!-- End / carousel__element owl-carousel -->
                                    
                                </div>
                            </div>
                        </section>
                        <!-- End / Section -->

                <section class="md-section consult-background">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">
                                
                                <!-- title-01 -->
                                <div class="title-01">
                                    <h2 class="title-01__title">Galleries</h2>
                                </div><!-- End / title-01 -->
                                
                            </div>
                        </div>
                        
                        <!-- carousel__element owl-carousel -->
                        <div class="carousel__element owl-carousel" data-options='{"loop":false,"dots":false,"nav":true,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>
                            
                            <!--  -->
                            <div>
                                <div class="post-01__media"><a href="#"><img src="{{ asset('theme/img/blogs/related-1.jpg') }}" alt=""/></a>
                                </div>
                                <div>
                                    <ul class="post-01__categories">
                                        <li><a href="#">Birthday Party</a></li>
                                    </ul>
                                    <h2 class="post-01__title"><a href="#">Getting Started with Vue.Js</a></h2>
                                    <div class="post-01__time">Nov 16, 2017</div>
                                    <div class="post-01__note">by Bryan Ryan</div>
                                </div>
                            </div><!-- End /  -->
                            
                            
                            <!--  -->
                            <div>
                                <div class="post-01__media"><a href="#"><img src="{{ asset('theme/img/blogs/related-2.jpg') }}" alt=""/></a>
                                </div>
                                <div>
                                    <ul class="post-01__categories">
                                        <li><a href="#">Wedding</a></li>
                                    </ul>
                                    <h2 class="post-01__title"><a href="#">Getting Started with Vue.Js</a></h2>
                                    <div class="post-01__time">Nov 4, 2017</div>
                                    <div class="post-01__note">by Ashley Mills</div>
                                </div>
                            </div><!-- End /  -->
                            
                            
                            <!--  -->
                            <div>
                                <div class="post-01__media"><a href="#"><img src="{{ asset('theme/img/blogs/related-3.jpg') }}" alt=""/></a>
                                </div>
                                <div>
                                    <ul class="post-01__categories">
                                        <li><a href="#">Graduation</a></li>
                                    </ul>
                                    <h2 class="post-01__title"><a href="#">How to Create and Manage SVG Sprites</a></h2>
                                    <div class="post-01__time">Nov 21, 2017</div>
                                    <div class="post-01__note">by Alan Lane</div>
                                </div>
                            </div><!-- End /  -->
                            
                            
                            <!--  -->
                            <div>
                                <div class="post-01__media"><a href="#"><img src="{{ asset('theme/img/blogs/related-4.jpg') }}" alt=""/></a>
                                </div>
                                <div>
                                    <ul class="post-01__categories">
                                        <li><a href="#">Business</a></li>
                                    </ul>
                                    <h2 class="post-01__title"><a href="#">Free Sketch Plugins</a></h2>
                                    <div class="post-01__time">Nov 2, 2017</div>
                                    <div class="post-01__note">by Alan Lane</div>
                                </div>
                            </div><!-- End /  -->
                            
                        </div><!-- End / carousel__element owl-carousel -->
                        
                        
                    </div>
                </section>
                <!-- End / Section -->
                
 <section class="md-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 ">
                                
                                <!-- title-01 -->
                                    <div class="title-01 title-01__style-03 md-text-left">
                                            <h6 class="title-01__subTitle">about</h6>
                                            <h2 class="title-01__title">We Organize Your Event</h2>
                                        <div>We help you to reach your moments dream and make it happen!</div>
                                    </div><!-- End / title-01 -->
                            </div>
                            <div class="col-lg-6 ">
                                <div id="map" style="width:100%;height:500px;"></div>
                                    <script>
                                        function myMap() {
                                            var myCenter = new google.maps.LatLng(51.508742,-0.120850);
                                            var mapCanvas = document.getElementById("map");
                                            var mapOptions = {center: myCenter, zoom: 5};
                                            var map = new google.maps.Map(mapCanvas, mapOptions);
                                            var marker = new google.maps.Marker({position:myCenter});
                                            marker.setMap(map);

                                            // var infowindow = new google.maps.InfoWindow({
                                            //     content: "Hello World!"
                                            // });
                                            // infowindow.open(map,marker);
                                            }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                        
                      <!-- </div> -->
                   
            <!-- End / Content-->
            
       
@endsection
