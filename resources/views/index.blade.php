@extends('layouts.app')

@section('content')
<div class="container">
    <div class="index-logo">
        <div class="index-logo-inner panel-body">
            <img class="col-xs-12" src="{{ asset('images/logo.png') }}" />
            <div class="page-header">
                <h3>Discover</h3>
            </div>
            <div class="text-center">
                <h3><a href="#main" class="btn btn-default">Borneo Reefer</a></h3>
                <h3><a href="#" class="btn btn-default">Our Services</a></h3>
                <h3><a href="#vision" class="btn btn-default">Our Vision</a></h3>
                <h3><a href="#mission" class="btn btn-default">Our Misson</a></h3>
                <h3><a href="#history" class="btn btn-default">Our History</a></h3>
                <h3><a href="#find" class="btn btn-default">Find Us</a></h3>
            </div>
        </div>
    </div>
    <div class="row-page">
        <div class="col-xs-12 col-sm-8">
            <div class="page-header" id="main">
                <h1>We're Borneo Reefer</h1>
            </div>
            <div class="text-right">
                <h3>A Container Refrigeration Company</h3>
                <h3>Based in Kuching</h3>
                <h3>
                    <a class="btn btn-default" role="button" data-toggle="collapse" href="#services" aria-expanded="false" aria-controls="collapseServices">Our Services</a>
                </h3>
            </div>
            <div class="collapse" id="services">
                <div class="well">
                <li>Pre-Trip Inspection</li>
                <li>Washing</li>
                <li>Plugging & Unplugging (On Dock & On Board Vessel)</li>
                <li>Pre-Sail Check On Board Vessel</li>
                <li>Reefer Monitoring </li>
                <li>Reefer Survey & Valuation</li>
                <li>Data-Logger Readings & Analysis</li>
                <li>Emergency Reefer Care Response (24 hour/365 Days)</li>
                <li>Reefer Machinery Repair</li>
                <li>Reefer Structural Repair</li>
                <li>Sales of reconditioned Reefer units for cold storage.</li>
                <li>Sales & Maintenance of “Clip-On” & “Underslung” Generator Sets. </li>
                <li>Other Industrial Refrigeration Related Services. </li>
                </div>
            </div>
        </div>
    </div>
    <div class="row-page">
        <div class="col-xs-12 col-sm-8">
            <div class="page-header">
                <div class="space-header" id="vision"></div>
                <h1>Our Vision</h1>
            </div>
            <div class="text-left">
                <ul>
                    <li><h4></h4></li>
                    <li><h4></h4></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row-page">
        <div class="col-xs-12 col-sm-8">
            <div class="page-header">
                <div class="space-header" id="mission"></div>
                <h1>Our Mission</h1>
            </div>
            <div class="text-left">
                <ul>
                    <li><h4>Providing clients and associates with the highest standard of service at all times.</h4></li>
                    <li><h4>Nurturing personnel though ample space for self-development through responsibility and job satisfaction.</h4></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row-page">
        <div class="col-xs-12 col-sm-8">
            <div class="page-header">
                <div class="space-header"></div>
                <h1>Find Us</h1>
            </div>
            <div class="text-right">
                <h3>
                    <a class="btn btn-default" role="button" data-toggle="collapse" href="#contact" aria-expanded="true" aria-controls="collapseContact">Contact</a>
                    <a class="btn btn-default" role="button" data-toggle="collapse" href="#address" aria-expanded="false" aria-controls="collapseAddress">Address</a>
                    <a class="btn btn-default" role="button" data-toggle="collapse" href="#map" aria-expanded="false" aria-controls="collapseMap">Map</a>
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
    </div>
</div>
@stop

@section('script_extra')
    <script src="{{ asset('js/index.js') }}" ></script>
@stop
