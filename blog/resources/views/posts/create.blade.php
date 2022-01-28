@extends('layouts.app')
@section('content')
<section id="contact" class="blog-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contact-title text-center">
                    <h2 class="title">what do you want to publish</h2>
                </div> 
            </div>
        </div> 
        <div class="contact-box mt-70">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form">
                        <form id="contact-form" action="{{ route('posts.store') }}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="single-form form-group">
                                        <input type="text" id="title" name="title" placeholder="Enter Your Post Title"  required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> 
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <textarea name="content" name="content" placeholder="Enter Your Message" required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> 
                                </div>
                                <p class="form-message"></p>
                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <button class="main-btn" type="submit">Publish</button>
                                    </div> 
                                </div>
                            </div> 
                        </form>
                    </div> 
                </div>
            </div> 
        </div> 
    </div> 
</section>
@endsection