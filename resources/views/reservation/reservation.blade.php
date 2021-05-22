@extends('layouts.app')

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Réservation</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-10 panel panel-default">
            <div class="panel-body">
                 <div class="col-md-4">
                     <img src="img/hotel/standard.jpg" alt="" style="height: 200px; width: 300px">
                 </div>
                 <div class="col-md-6">
                     <h5 class="section-heading">CHAMBRE STANDARD</h5>
                     2 personnes<br/>
                     1 lit
                     <br/><br/>
                     <a class="btn btn-link" data-toggle="collapse" data-target="#standard">Details de la chambre</a>
                     <div id="standard" class="collapse">
                         <br/>

                         <ul class="list-group">
                             <li class="list-group-item">12 m²</li>
                             <li class="list-group-item">Vue: Coté rue</li>
                             <li class="list-group-item">Climatisation</li>
                             <li class="list-group-item">WiFi gratuit</li>
                             <li class="list-group-item">Télévision</li>
                             <li class="list-group-item">WC Interne</li>
                             <li class="list-group-item">Douche Interne</li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-md-2">
                     <a class="btn btn-outline" data-toggle="modal" href="#modal" style="background-color: lightgrey">RESERVER</a>
                 </div>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-10 panel panel-default">
            <div class="panel-body">
                <div class="col-md-4">
                    <img src="img/hotel/privilegeNor.jpg" alt="" style="height: 200px; width: 300px">
                </div>
                <div class="col-md-6">
                    <h5 class="section-heading">CHAMBRE PRIVILEGE</h5>
                    2 personnes<br/>
                    1 lit
                    <br/><br/>
                    <a class="btn btn-link" data-toggle="collapse" data-target="#privilege">Details de la chambre</a>
                    <div id="privilege" class="collapse">
                        <br/>

                        <ul class="list-group">
                            <li class="list-group-item">16 m²</li>
                            <li class="list-group-item">Vue: Coté rue</li>
                            <li class="list-group-item">Climatisation</li>
                            <li class="list-group-item">WiFi gratuit</li>
                            <li class="list-group-item">Télévision</li>
                            <li class="list-group-item">WC Interne</li>
                            <li class="list-group-item">Douche Interne</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-outline" data-toggle="#modal" href="modal" style="background-color: lightgrey">RESERVER</a>
                </div>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-10 panel panel-default">
            <div class="panel-body">
                <div class="col-md-4">
                    <img src="img/hotel/privilegeTer.jpg" alt="" style="height: 200px; width: 300px">
                </div>
                <div class="col-md-6">
                    <h5 class="section-heading">CHAMBRE PRIVILEGE</h5>
                    <h6 class="section-subheading text-muted">AVEC TERASSE</h6>
                    2 personnes<br/>
                    1 lit
                    <br/><br/>
                    <a class="btn btn-link" data-toggle="collapse" data-target="#privilegeTer">Details de la chambre</a>
                    <div id="privilegeTer" class="collapse">
                        <br/>

                        <ul class="list-group">
                            <li class="list-group-item">16 m²</li>
                            <li class="list-group-item">Vue: Coté rue</li>
                            <li class="list-group-item">Climatisation</li>
                            <li class="list-group-item">WiFi gratuit</li>
                            <li class="list-group-item">Télévision</li>
                            <li class="list-group-item">WC Interne</li>
                            <li class="list-group-item">Douche Interne</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-outline" data-toggle="modal" href="#modal" style="background-color: lightgrey">RESERVER</a>
                </div>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-10 panel panel-default">
            <div class="panel-body">
                <div class="col-md-4">
                    <img src="img/hotel/suite.jpg" alt="" style="height: 200px; width: 300px">
                </div>
                <div class="col-md-6">
                    <h5 class="section-heading">SUITE JUNIOR</h5>
                    2 personnes<br/>
                    1 lit
                    <br/><br/>
                    <a class="btn btn-link" data-toggle="collapse" data-target="#junior">Details de la chambre</a>
                    <div id="junior" class="collapse">
                        <br/>

                        <ul class="list-group">
                            <li class="list-group-item">20 m²</li>
                            <li class="list-group-item">Vue: Coté rue</li>
                            <li class="list-group-item">Climatisation</li>
                            <li class="list-group-item">WiFi gratuit</li>
                            <li class="list-group-item">Télévision</li>
                            <li class="list-group-item">WC Interne</li>
                            <li class="list-group-item">Douche Interne</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-outline" data-toggle="#modal" href="modal" style="background-color: lightgrey">RESERVER</a>
                </div>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-10 panel panel-default">
            <div class="panel-body">
                <div class="col-md-4">
                    <img src="img/hotel/suite.jpg" alt="" style="height: 200px; width: 300px">
                </div>
                <div class="col-md-6">
                    <h5 class="section-heading">SUITE MIRAMBEAU</h5>
                    2 personnes<br/>
                    1 lit
                    <br/><br/>
                    <a class="btn btn-link" data-toggle="collapse" data-target="#mirambeau">Details de la chambre</a>
                    <div id="mirambeau" class="collapse">
                        <br/>

                        <ul class="list-group">
                            <li class="list-group-item">30 m²</li>
                            <li class="list-group-item">Vue: Coté rue</li>
                            <li class="list-group-item">Climatisation</li>
                            <li class="list-group-item">WiFi gratuit</li>
                            <li class="list-group-item">Télévision</li>
                            <li class="list-group-item">WC Interne</li>
                            <li class="list-group-item">Douche Interne</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-outline" data-toggle="modal" href="#modal" style="background-color: lightgrey">RESERVER</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h1>Réserver</h1>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form name="sentMessage" id="contactForm" method="post" enctype="text/plain" action="mailto:drumont06@gmail.com" novalidate>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-lg-12 text-center">
                                                <div id="success"></div>
                                                <button type="submit" class="btn btn-xl">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>