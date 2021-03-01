@extends('frontend.partials.master')
@section('maincontent')
    <div class="blue banner">
        <div class="content">
            <span class="labelred">Now with SSD</span>
            <h1 itemscope itemtype="http://schema.org/Product">Next Level
                <span itemprop="name">Web Hosting</span>!
            </h1>
            <p>Experience the next level web hosting which built for speed! We utilize solid-state drives(SSD) for our all hosting plans. For Enhanced performance we use LiteSpeed Web Server, HTTP/2, PHP7. We make your website faster, which will help you to increase search ranking! </p>
            <a href="https://clients.exonhost.com/cart.php" class="silverbutton">SIGN UP</a><a href="{{url('web-hosting')}}" class="bluebutton transparent">VIEW PLANS</a>
        </div>
    </div>
    <!--end banner -->
    <!--plans -->
    <ul id="threeplansmin">
        <!--plan webhosting -->
        <li class="planone">
            <div class="plantitle">Web Hosting <span>Ideal to get started and go on to a more advanced hosting package.</span></div>
            <div class="row">CloudLinux Powered</div>
            <div class="row">cPanel Control Panel Powered</div>
            <div class="row">DNS Cluster Powered</div>
            <div class="row">LIteSpeed Web Server Powered</div>
            <div class="row">Pure SSD RAID-10</div>
            <div class="row specialoffer-mob"><b>FREE .XYZ</b> Domain<br> <b>FREE</b>  Website Transfer <br> <b>FREE</b>  One Click Installer <br> <span>Free-XYZ</span></div>
            <div class="row price"><span class="from">From</span><i>$</i><b>2.99</b><span>/mo</span><a href="{{url('web-hosting')}}" class="bluebutton">View Plans</a></div>
        </li>
        <li class="plantwo">
            <div class="plantitle">Virtual Servers  <span>Get started with a VPS or enjoy the flexibility of our SSD VPS solutions.</span></div>
            <div class="row">WHM/cPanel ( Control Panel )</div>
            <div class="row">SolusVM Control Panel Powered</div>
            <div class="row">Full Root Access Available</div>
            <div class="row">Fully Managed 24/7/365 Support</div>
            <div class="row">Pure SSD RAID-10</div>
            <div class="row price"><span class="from">From</span><i>$</i><b>23.95</b><span>/mo</span><a href="{{url('ssd-vps')}}" class="bluebutton">View Plans</a></div>
        </li>
        <li class="planthree">
            <div class="plantitle">
                <span class="labelyellow">Fully Managed</span>
                <div class="clear"></div>
                Dedicated Servers  <span>Gain maximum power and complete control of your server.</span>
            </div>
            <div class="row">WHM/cPanel ( Control Panel )</div>
            <div class="row">Single or Dual Processors</div>
            <div class="row">Full Root Access Available</div>
            <div class="row">Fully Managed 24/7/365 Support</div>
            <div class="row">Multiple Locations</div>
            <div class="row price"><span class="from">From</span><i>$</i><b>169</b><span>/mo</span><a href="{{url('dedicated-server')}}" class="bluebutton">Configure</a></div>
        </li>
    </ul>
    <div class="specialoffer"><b>Free .XYZ</b> Domain<span>&nbsp; + &nbsp;</span> <b>Free</b> Site Transfer <span>&nbsp; + &nbsp;</span> <b>Free</b> One Click Installer <span>&nbsp; + &nbsp;</span> <b>Free</b> Server Setup.     &nbsp; Coupon: <b>Free-XYZ</b></div>
    <!--end plans -->
    <!-- blue 4 boxes -->
    <div class="blue">
        <div class="content">
            <h1>A Full Range of Hosting Solutions.</h1>
            For Web Master, Affiliate Marketer, Small Business Owner, E-commerce Owner and High Traffic Website Owner.
            <div class="flex-grid">
                <div class="five">
                    <h3>
                        <a href="{{url('web-hosting')}}">
                            <img src="{{asset('Frontend/images')}}/bic10.png"  alt="Web Hosting">
                            <hr>
                            Web Hosting
                        </a>
                    </h3>
                </div>
                <div class="five">
                    <h3>
                        <a href="{{url('reseller-hosting')}}">
                            <img src="{{asset('Frontend/images')}}/bic7.png"  alt="Reseller Hosting">
                            <hr>
                            Reseller Hosting
                        </a>
                    </h3>
                </div>
                <div class="five">
                    <h3>
                        <a href="{{url('ssd-vps')}}">
                            <img src="{{asset('Frontend/images')}}/bic1.png"  alt="Virtual Server">
                            <hr>
                            Virtual Servers
                        </a>
                    </h3>
                </div>
                <div class="five">
                    <h3>
                        <a href="{{url('dedicated-server')}}">
                            <img src="{{asset('Frontend/images')}}/bic2.png"  alt="Dedicated Servers">
                            <hr>
                            Dedicated Servers
                        </a>
                    </h3>
                </div>
                <div class="five">
                    <h3>
                        <a href="https://clients.exonhost.com/domain/?a=add&domain=register">
                            <img src="{{asset('Frontend/images')}}/bic4.png"  alt="Domane Names">
                            <hr>
                            Domain Names
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- end blue 4 boxes -->
    <!-- help links -->
    <div class="bluebrighter">
        <div class="content">
            <ul>
                <li class="intro">
                    <b>Need Help for Deciding or looking help for technical issue?</b>
                    Talk to one of our hosting specialist who will review your needs and propose a tailored hosting solution that will match your specific business reality and needs.
                </li>
                <li class="buttonsset"><a href="https://clients.exonhost.com/submitticket.php?step=2&deptid=1" class="bluebutton transparent">Support Desk</a><br>
                    <a href="#" class="greenbutton">Sales Chat Online</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end help links -->
    <!-- Global Footer -->
    <div class="white padseptente" >
        <div class="content">
            <!-- testimonials -->
            <div class="flex-grid">
                <div class="onefird" id="yellow">
                    <span class="qty">+ 5000</span><span class="lineto">customers rely on us</span>
                    <hr>
                    <p>We hosted more than 5000 happy customers. Small website to high traffic website customers. <br><br>
                        <a href="#" class="bluebutton transparent"><span class="hidetablet">WHAT THEY HAVE TO SAY</span><span class="mobonly">TESTIMONIALS</span></a>
                    </p>
                </div>
                <div class="twhofird" id="customer">
                    <div class="text">
                        "I have been using ExonHost since 2012. They are providing execellent service. So I moved my all accounts from Hostgator to ExonHost!"<span>Abu Syeed Mahmud Hasan
              <br>Digitech Valley</span>
                    </div>
                    <div id="whatheuse">Solution -<br><b><a href="ssd-vps.html">SSD VPS</a></b></div>
                </div>
            </div>
@endsection

