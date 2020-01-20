@extends('layout')

@section('content')
Need to contact Resa?
@endsection('content')

    
    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
        <div class="text-center">
					<div class="main_title">
						<h2>Contact Me</h2>
					</div>
				</div>
            <div class="row">
                <div class="col-lg-3 col-xs-12">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Lagos, Nigeria</h6>
                            <p>5, Glorious Estate, Badore, Ajah.</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">(+234)90-944-75906</a></h6>
                            <p>Monday to Friday 9am to 6pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">theresaobamwonyi@gmail.com</a></h6>
                            <p>Send in your requests, anytime.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xs-12">
                    <form class="row contact_form" action="{{url('/postcontact')}}" method="post" id="contactForm" novalidate="novalidate">
                       {{csrf_field()}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="primary_btn">
                                <span>Send</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
        
        