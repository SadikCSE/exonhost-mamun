@extends('frontend.partials.master')
@section('title','About US - ExonHost')

@section('maincontent')

    <!--banner. No label? Add 26px padding with nolabel class -->
    <div class="blue banner innerpage">
        <div id="gradient">
            <div class="content">
                <h1 class="nolabel">About Us</h1>
                <div class="breadcrumb"><a href="{{url('/')}}">home</a><span class="devider">&nbsp; /  &nbsp;</span><span>company: about us</span></div>
            </div>
        </div>
    </div>
    <!--end banner -->
    <!--plans /tab content -->
    <div class="white">
        <div class="content" id="contact">
            <h2>About ExonHost</h2>
            <p>ExonHost was founded on January, 2009. We offer Premium Web Hosting , Reseller Hosting and Virtual Private Server solutions brought to you by premium hardware. Our main intentions is delivering enterprise level solutions at affordable prices.
                If you're thinking of moving from another host to us and find it hard to transfer all your files over, no worries, as we'll do this for you free! All you have to do is sit back, relax and wait for your site to be up while our technicians do the transfers - We care for all our clients.
            </p>
            <h2>Our History</h2>
            <p>In 2009, ExonHost CEO Saleh Ahmed embraced the potential of the web and began the web hosting service company in Bangladesh to provide web hosting service in locally. The Company first name was obosor.com.
                In 2010, We acquired SoCheapHost (a USA small web hosting company), and we rebranded our company obosor.com to SoCheapHost.
                As a growing company and market demand, we decided to enter the premium market from the budget market.
                So we rebranded the company name SoCheap Host to HostPair in 2013.  In 2015, We registered our company in USA as HostPair LLC. For Trade Mark related issue with PARI Network, we forced to change our Company name HostPair LLC to ExonHost
            </p>
            <h2>Our Vision</h2>
            <p>Our vision is simple and one that combines creativity with the latest research and development in the tech world. We are a very customer oriented company, putting our customers first and always focusing on gaining and deserving the trust of every single one of our customers.
                So, we Listening to our customers, staying at the cutting edge of the latest trends in tech research, and constantly developing better web hosting products and services which enable us to fulfill this vision better and better every day.
            </p>
            <h2>Our Mission</h2>
            <p>Our mission is simple. To provide trouble-free, customer-focused, reliable, and affordable web hosting services. WE simply want to continue to operate a profitable web hosting company that makes customers happy.
                Since the beginning, we have backed our rock solid hosting solutions and top-notch infrastructure with the best customer service and technical support. A common feeling about the technology field is it's all about machines, yes, It does take machines but, Host Pair also knows it takes good people to run a well oiled machine.
                Yes, a successful business needs to be committed to client solutions, innovation, creativity and a warm, caring attitude to all of our customers' business needs. We don't just provide 24x7 support. we really do listen and care.
            </p>
        </div>
    </div>
    <!--end plans -->


@endsection
