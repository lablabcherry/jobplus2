@extends('masters.primary')
@section('css')
 	<link rel="stylesheet" href="/css/custom.css">
 @endsection
@section('body')
<div class="jp-head">
	<h1>Job Searching</h1>
</div>
	<div class="row">

		<section>
		 <form role="form" action="jobsearch#step2" method="post" class="registration-form">
        <div class="wizard">
            <div class="wizard-inner">
                <div class="jobpost-connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                               <i class="fa fa-wrench" aria-hidden="true"></i>
                            </span>
                        </a>
                        <p>Step 1</p>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </span>
                        </a>
                     <p>Step 2</p>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="fa fa-filter" aria-hidden="true"></i>
                            </span>                     
                        </a>
                          <p>Step 3</p>
                    </li>
                </ul>
            </div>

         
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h2>Categories and Skills </h2>
                         <p>Select your desired categories and skills to start with.</p>
                              <div class="form-box">
                                <div class="col-sm-12">
                                   
                                <div class="panel">
                                <div class="panel-heading"><h3>Housekeeping</h3></div>
                                <div class="panel-body">
                                    <ul class="input-list">
                                         <li class="setup-skills">
                                        <div class="pure-checkbox">
                                            <input id="housekeeping[]" name="housekeeping[]" type="checkbox">
                                            <tag></tag>
                                        </div>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                                <div class="panel-heading"><h3>Construction</h3></div>
                                <div class="panel-body">
                                    <ul class="input-list">
                                         <li class="setup-skills">
                                        <div class="pure-checkbox">
                                            <input id="construction[]" name="construction[]" type="checkbox">
                                            <tag></tag>
                                        </div>
                                        </li>
                                    </ul>
                                </div>
                                 <hr>
                                <div class="panel-heading"><h3>Personel</h3></div>
                                <div class="panel-body">
                                    <ul class="input-list">
                                         <li class="setup-skills">
                                        <div class="pure-checkbox">
                                            <input id="con[]" name="personel[]" type="checkbox">
                                            <tag></tag>
                                        </div>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                 <div class="panel-heading"><h3>Maintenance</h3></div>
                                <div class="panel-body">
                                    <ul class="input-list">
                                         <li class="setup-skills">
                                        <div class="pure-checkbox">
                                            <input id="maintenance[]" name="maintenance[]" type="checkbox">
                                            <tag></tag>
                                        </div>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                               
                               </div>
                            </div>
                            <hr>
                        <ul class="list-inline ">
                            <li><button type="button" class="btn btn-primary next-step">Next<span class="glyphicon glyphicon-menu-right"></span></button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h2>Location</h2>
                        <p>Search jobs nearby you.</p>
                           <div class="form-box">
                		</div>
                        <ul class="list-inline">
                            <li><button type="button" class="btn btn-primary prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h2>Basic Filters</h2>
                        <p>Filter your results.</p>
         				<br> <br>
                                <h3>Salary</h3>
                                <div class="col-sm-6">
                                <p>Minimum</p>
                                   <div class="range range-danger">
						            <input type="range" name="min" min="250" max="10000" step="250" value="50" onchange="minimum.value=value">
						            <output id="minimum">50</output>
						          </div>
						         </div>
						         <div class="col-sm-6">
						            <p>Maximum</p>
                                   <div class="range range-danger">
						            <input type="range" name="range" min="250" max="10000" step="250" value="50" onchange="maximum.value=value">
						            <output id="maximum">50</output>
						          </div>
                                </div>

                                <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                <br>
                                <h3>Date Posted</h3>
                               <ul class="input-list">
                                         <li class="setup-skills">
                                        <div class="pure-checkbox">
                                            <input id="posted1" name="posted1" type="checkbox">
                                            <tag>Today</tag>
                                        </div>
                                        </li>
                                          <li class="setup-skills">
                                        <div class="pure-checkbox">
                                            <input id="posted2" name="posted2" type="checkbox">
                                            <tag>days ago</tag>
                                        </div>
                                        </li>
                                         <li class="setup-skills">
                                        <div class="pure-checkbox">
                                            <input id="posted3" name="posted3" type="checkbox">
                                            <tag>weeks ago</tag>
                                        </div>
                                        </li>
                                 </ul>
                                 </div>
                                 </div>
                               
                                 <hr>
                        <ul class="list-inline ">
                            <li><button type="button" class="btn btn-primary prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Search</button></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>
   </div>

@stop
