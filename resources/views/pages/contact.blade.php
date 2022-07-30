@extends('layouts.app')

@section('content')
    <section class="pageTitleSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pageTitleContent">
                        <h2>Contact</h2>
                        <div class="breadcrumbs">
                            <a href="/">HOME</a> &nbsp;/ &nbsp;<a href="#">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle text-center">
                        <h2>Leave us a message</h2>
                        <div class="titleBars"></div>
                        <p>
                            The Love Boat soon will be making another run the love boat promises something for everyone
                            one two three four five
                            six seven eight Sclemeel schlemazel hasenfeffer incorporated.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="contactForms">
                        <form method="post" action="#" id="contactForm">
                            <div class="col-lg-6 noPaddingLeft">
                                <label class="con_label">Your Name *</label>
                                <input type="text" name="con_name" id="con_name" class="required" />
                            </div>
                            <div class="col-lg-6 noPaddingRight">
                                <label class="con_label">Your Email *</label>
                                <input type="text" name="con_email" id="con_email" class="required" />
                            </div>
                            <div class="col-lg-12 noPadding">
                                <label class="con_label">Your Message (Optional)</label>
                                <textarea name="con_message" id="con_message" class="required"></textarea>
                            </div>
                            <div class="col-lg-12 noPadding">
                                <button type="submit" id="con_submit">Send Your Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mtop75">
                <div class="col-lg-12">
                    <div class="map" id="map"></div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
