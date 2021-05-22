@extends('layouts.app')

<section id="content">
        <div id="banS" class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Salles</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4" style="margin-top: 30px; margin-bottom: 30px;">
                    <a href="../../../img/hotel/salles.jpg">
                        <img class="img-thumbnail img-responsive" src="../../../img/hotel/salles.jpg">
                    </a>
                </div>
                <div class="col-sm-8" style="color: #777;margin-top: 30px; margin-bottom: 30px;">
                    <p>
                        L’Hôtel Mirambeau vous propose des salles de réunion et de banquets, entièrement équipées,
                        adaptables à vos besoins, des pauses-café et déjeuners à la carte et sur-mesure,
                        un service traiteur comme nulle part ailleurs pour accompagner vos évènements.
                    </p>
                    <div>
                        Les salles de réunion disposent de :
                        <div class="row" style="font-style: italic">
                            <div class="col-sm-6">
                                <ul>
                                    <li style="text-align: left;">Mobilier (chaises + tables)</li>
                                    <li style="text-align: left;">Vidéoprojecteur</li>
                                    <li style="text-align: left;">Ecran</li>
                                    <li style="text-align: left;">Sonorisation</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li style="text-align: left;">Accès wifi</li>
                                    <li style="text-align: left;">Eau minérale</li>
                                    <li style="text-align: left;">Assistance technique</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div>
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#SalleBas" data-toggle="tab">Salle 1</a></li>
                        <li><a href="#SalleHaut" data-toggle="tab">Salle 2</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="SalleBas">
                            D’une capacité de 70 à 250 personnes selon l’aménagement souhaité,
                            cette salle est propice aux réceptions de grandes envergures : salons, banquets, séminaires,
                            conférences, mariages, cocktails, défilés de mode, fêtes familiales, etc.
                        </div>
                        <div class="tab-pane fade" id="SalleHaut">
                            D’une capacité de 50 à 150 personnes selon l’aménagement souhaité,
                            cette salle est propice aux réceptions de grandes envergures : salons, banquets, séminaires,
                            conférences, mariages, cocktails, défilés de mode, fêtes familiales, etc.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-3">
                    <a href="../../../img/hotel/s1.jpg">
                        <img class="img-thumbnail img-responsive" src="../../../img/hotel/s1.jpg">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="../../../img/hotel/s3.jpg">
                        <img class="img-thumbnail img-responsive" src="../../../img/hotel/s3.jpg">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="../../../img/hotel/salles.jpg">
                        <img class="img-thumbnail img-responsive" src="../../../img/hotel/salles.jpg">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="../../../img/hotel/s5.jpg">
                        <img class="img-thumbnail img-responsive" src="../../../img/hotel/s5.jpg">
                    </a>
                </div>
            </div>
        </div>
</section>