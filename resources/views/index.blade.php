@extends('layouts.app')
@section('menu')
<div><a class="menu-item" data-target="0">Services</a></div>
<div><a class="menu-item" data-target="1">Values</a></div>
<div><a class="menu-item" data-target="2">Mission</a></div>
<div><a id="menu-history">History</a></div>
<div><a class="menu-item" data-target="4">Contact</a></div>
@stop

@section('content')
<div id="index-row-0" class="collapse">
    <div class="page-header" id="main">
        <h1>We're Borneo Reefer</h1>
    </div>
    <div class="text-right">
        <h3>A Container Refrigeration Company</h3>
        <h3>Based in Kuching</h3>
        <div class="visible-xs">
            <a class="btn btn-default" href="#find"><span class="fa fa-phone"></span></a>
            <a class="btn btn-default" role="button" data-toggle="collapse" href="#index-row-1" aria-expanded="false" aria-controls="collapseValues">
                <span class="fa fa-heart"></span>
            </a>
            <a class="btn btn-default" role="button" data-toggle="collapse" href="#index-row-2" aria-expanded="false" aria-controls="collapseMission">
                <span class="fa fa-lightbulb-o"></span>
            </a>
            <a class="btn btn-default" role="button" data-toggle="collapse" href="#index-row-3" aria-expanded="false" aria-controls="collapseHistory">
                <span class="fa fa-history"></span>
            </a>
        </div>
    </div>
    <ul class="item-list">
        <li>Pre-Trip Inspection</li>
        <li>Washing</li>
        <li>Plugging & Unplugging (On Dock & On Board Vessel)</li>
        <li>Pre-Sail Check On Board Vessel</li>
        <li>Reefer Monitoring</li>
        <li>Reefer Survey & Valuation</li>
        <li>Data-Logger Readings & Analysis</li>
        <li>Emergency Reefer Care Response (24 hour/365 Days)</li>
        <li>Reefer Machinery Repair</li>
        <li>Reefer Structural Repair</li>
        <li>Sales of reconditioned Reefer units for cold storage</li>
        <li>Sales & Maintenance of “Clip-On” & “Underslung” Generator Sets</li>
        <li>Other Industrial Refrigeration Related Services</li>
    </ul>
</div>
<div id="index-row-1" class="collapse">
    <div class="page-header">
        <div class="space-header" id="values"></div>
        <h1>Our Values</h1>
    </div>
    <div class="well text-left">
        <div id="carousel-values" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">Team Work</div>
                <div class="item">Customer Focus</div>
                <div class="item">Quality & Professionalism</div>
                <div class="item">Open Communication</div>
                <div class="item">Continuous Improvement & Innovation</div>
                <div class="item">Ethical Business Practice</div>
            </div>
        </div>
    </div>
</div>
<div id="index-row-2" class="collapse">
    <div class="page-header">
        <div class="space-header" id="mission"></div>
        <h1>Our Mission</h1>
    </div>
    <div class="well text-left">
        <ul>
            <li><h4>Providing clients and associates with the highest standard of service at all times.</h4></li>
            <li><h4>Nurturing personnel though ample space for self-development through responsibility and job satisfaction.</h4></li>
        </ul>
    </div>
</div>
<div id="index-row-3" class="collapse">
    <div class="page-header">
        <div class="space-header" id="history"></div>
        <h1>Our History</h1>
    </div>
    <div class="well text-left">
        <p>Mr. Maniam, The Managing Director, started his career at MCS Container Sdn. Bhd. in the year 1991. In the year 2000, Mr. Maniam went into business with his two younger brothers by forming Passage Back-Up Sdn. Bhd in Port Klang with the main idea of exploring the world of containerization. Passage Back-Up was the first company of its kind to do major reefer container structural repair while focusing on a total reefer service concept.  </p>
        <p>In due time, Passage Back-Up Sdn. Bhd was able to proudly include shipping industry giants like Hapag-Lyod, NYK, PIL, PDZ and P&O into its clientele. Borneo Reefer Sdn. Bhd was set up in 2003 to pave way to the birth of a localised Total Reefer Care Service industry in Kuching, Sarawak. Since its inception, Borneo Reefer has tirelessly worked to help Shipping Liners and their local agents to reduce the number of freight claims by assuring that every single Reefer unit is in optimum working condition before it is despatched for the consignee’s premises for loading.</p>
        <p>In 2013, Borneo Reefer was given the opportunity by Senari Machinery Sdn. Bhd to provide Pre-Trip Inspection (PTI) services for a selected group of clients at Senari Port’s On-Dock Depot (ODD) facility. </p>
    </div>
</div>
<div id="index-row-4" class="collapse">
    <div class="page-header">
        <div class="space-header" id="find"></div>
        <h1>Find Us</h1>
    </div>
    <div class="text-right">
        <h3>
            <a class="btn btn-default" role="button" data-toggle="collapse" href="#contact" aria-expanded="true" aria-controls="collapseContact">Contact</a>
            <a class="btn btn-default" role="button" data-toggle="collapse" href="#address" aria-expanded="false" aria-controls="collapseAddress">Address</a>
            <a class="btn btn-default" role="button" data-toggle="collapse" href="#map" aria-expanded="false" aria-controls="collapseMap">
                <span class="fa fa-map"></span>
            </a>
        </h3>
    </div>
    <div class="collapse in" id="contact">
        <div class="well">
            <address>
                <abbr title="Mobile">Mobile:</abbr> +60 123456789<br/>
                <abbr title="Phone">Phone:</abbr> +60 82222<br/>
                <abbr title="Email">Email:</abbr> reefer@example.com<br/>
            </address>
        </div>
    </div>
    <div class="collapse" id="address">
        <div class="well">
            <address>
                <strong>Borneo Reefer</strong><br>
                1st floor, Lot 1905, Section 66, KTLD,<br>
                Jalan Pending,<br>
                93450 Kuching, Sarawak<br>
            </address>
        </div>
    </div>
    <div class="collapse" id="map">
        <div class="well">
            Map
        </div>
    </div>
</div>
@stop

@section('script_extra')
    <script src="{{ asset('js/index.js') }}" ></script>
@stop
