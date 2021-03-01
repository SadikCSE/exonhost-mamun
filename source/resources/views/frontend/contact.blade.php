<link rel="stylesheet" type="text/css" href="{{asset('Frontend/css')}}/tabcontent-contact.css" />
@extends('frontend.partials.master')
@section('title','Contact US - ExonHost')

@section('maincontent')


    <!--banner. No label? Add 26px padding with nolabel class -->
    <div class="blue banner innerpage">
        <div id="gradient">
            <div class="content">
                <h1 class="nolabel">Contact Us</h1>
                <div class="breadcrumb"><a href="index.html">home</a><span class="devider">&nbsp; /  &nbsp;</span><span>support: contact us</span></div>
            </div>
        </div>
    </div>
    <!--end banner -->
    <!--plans /tab content -->
    <div class="white">
        <div class="content" id="contact">
            <h2>Select a Category</h2>
            <p class="hdm">Please choose a topic below. When we know at a glance what kind of issue you have, we can give you help more quickly.</p>
            <ul id="countrytabs" class="shadetabs">
                <li class="first">
                    <a href="#" rel="country1" class="selected">
                        <span class="icon">&nbsp;</span>
                        <hr>
                        Need assistance<br>
                        to place your order?
                    </a>
                </li>
                <li>
                    <a href="#" rel="country2">
                        <span class="icon gear">&nbsp;</span>
                        <hr>
                        Do you have <br>
                        a technical question?
                    </a>
                </li>
                <li class="lastx">
                    <a href="#" rel="country3">
                        <span class="icon sos">&nbsp;</span>
                        <hr>
                        Your server is down<br>
                        or has been hacked?
                    </a>
                </li>
            </ul>
            <div>
                <div id="country1" class="tabcontent">
                    <!--contact 1 -->
                    <div class="spacer">&nbsp;</div>
                    <div class="flex-grid centered" style="margin-bottom:75px">
                        <div class="onefird">
                            <h3>Live Chat</h3>
                            <img src="{{asset('Frontend/images')}}/sic1.png"  alt="">
                            <p>Need Help for Deciding? Talk to one of our hosting specialist who can help you to choose perfect plan for your needs.</p>
                            <a href="#" class=" greenbutton">Start Sales Chat</a>
                        </div>
                        <div class="onefird">
                            <h3>Frequently Asked Questions</h3>
                            <img src="{{asset('Frontend/images')}}/sic3.png"  alt="">
                            <p>Find answers to frequently asked questions about web hosting, including how to find the right host or package for your website.</p>
                            <a href="https://clients.exonhost.com/index.php?rp=/knowledgebase" class="bluebutton">Knowledgebase</a>
                        </div>
                        <div class="onefird">
                            <h3>Contact Sales</h3>
                            <img src="{{asset('Frontend/images')}}/sic2.png"  alt="">
                            <p>We are available to help you. Send us email from contact form. A team member will contact with you as soon possible.</p>
                            <a href="https://clients.exonhost.com/submitticket.php?step=2&deptid=2" class="bluebutton">Send Email</a>
                        </div>
                    </div>
                    <!-- end contact1 -->
                </div>
                <div id="country2" class="tabcontent">
                    <!--contact 2 -->
                    <div class="spacer">&nbsp;</div>
                    <div class="flex-grid centered" style="margin-bottom:75px">
                        <div class="onefird">
                            <h3>Frequently Asked Questions</h3>
                            <img src="images/sic3.png"  alt="">
                            <p>Find answers to frequently asked questions about web hosting. <a href="https://clients.exonhost.com/index.php?rp=/knowledgebase">Click here</a></p>
                        </div>
                        <div class="twhofird">
                            <div class="supp">
                                <p>Our friendly Support Team is available to help you 24 hours a day, seven days a week. We look forward to hearing from you! Our 24/7 support team is available to assist you with your domain, hosting and online presence needs. We know you're busy, so we provide you with a number of options for you to contact us. From phone, chat, to online form submission, our friendly and knowledgeable staff is waiting to hear from you. All contacts will be responded to by the same means they are received.</p>
                                <div class="set"><a href="tel:09666744755" class=" greenbutton">Call: 09666744755</a> <a href="https://clients.exonhost.com/submitticket.php?step=2&deptid=1" class="bluebutton">Submit a Ticket</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- end contact2 -->
                </div>
                <div id="country3" class="tabcontent">
                    <!--contact 3 -->
                    <div class="spacer">&nbsp;</div>
                    <div class="flex-grid centered" style="margin-bottom:75px">
                        <div class="onefird">
                            <h3>Live Chat</h3>
                            <img src="images/sic1.png"  alt="">
                            <p>Need Help for Deciding? Talk to one of our hosting specialist who can help you to choose perfect plan for your needs.</p>
                            <a href="#" class=" greenbutton">Start Sales Chat</a>
                        </div>
                        <div class="onefird">
                            <h3>Frequently Asked Questions</h3>
                            <img src="images/sic3.png"  alt="">
                            <p>Find answers to frequently asked questions about web hosting, including how to find the right host or package for your website.</p>
                            <a href="https://clients.exonhost.com/index.php?rp=/knowledgebase" class="bluebutton">Knowledgebase</a>
                        </div>
                        <div class="onefird">
                            <h3>Contact Sales</h3>
                            <img src="images/sic2.png"  alt="">
                            <p>We are available to help you. Send us email from contact form. A team member will contact with you as soon possible.</p>
                            <a href="https://clients.exonhost.com/submitticket.php?step=2&deptid=2" class="bluebutton">Send Email</a>
                        </div>
                    </div>
                    <!-- end contact3 -->
                </div>
                <script type="text/javascript">
                    var countries=new ddtabcontent("countrytabs")
                    countries.setpersist(true)
                    countries.setselectedClassTarget("link") //"link" or "linkparent"
                    countries.init()

                </script>
            </div>
        </div>
        <!--end plans -->


@endsection
