@extends('layouts.main')

@section('content')
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

@endsection