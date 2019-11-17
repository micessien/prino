@extends('layouts.main')

@section('content')
<div class="bg-real bg-fixed" style="height: auto; min-height: 100%; background-image: url(assets/img/banner/11.jpg)">
    <!-- <form method="POST" action="{{ route('users.store') }}" aria-label="{{ __('Register') }}" class="register"> -->
    <form class="register">
        @csrf
        <!-- Start Banner 
============================================= -->
        <div class="banner-area auto-height text-center text-normal text-light shadow dark-hard bg-fixed">
            <div class="container">
                <div class="row justify-content-center padding-top-160">
                    <div class="col-md-12">
                        <div class="card card-register">
                            <div class="card-header text-shadow-10 text-white">
                                <h1>{{ __('Prix Hydrocarbures') }}</h1>
                            </div>

                            <div class="card-body">
                                <input type="hidden" name="type" value="Hydrocarbures">
                                @if ($errors->has('g-recaptcha-response'))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <p id="demoCountdown"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-11 col-md-offset-1">
                                                <div class="form-group">
                                                    <select class="form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}" name="genre" id="genre" required style="height: 50px;">
                                                        <option value="M">M</option>
                                                        <option value="Mme">Mme</option>
                                                        <option value="Mlle">Mlle</option>
                                                    </select>
                                                    @if ($errors->has('genre'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('genre') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-11 col-md-offset-1">
                                                <div class="form-group">
                                                    <input id="entreprise" type="text" placeholder="Entreprise / Domaine d’activité" class="form-control{{ $errors->has('entreprise') ? ' is-invalid' : '' }}" name="entreprise" value="{{ old('entreprise') }}" autofocus>

                                                    @if ($errors->has('entreprise'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('entreprise') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-1" style="line-height: 3;font-size: 20px;text-align: right;color: #ff0000;">*</div>
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <input id="name" type="text" placeholder="Nom" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                                    @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-1" style="line-height: 3;font-size: 20px;text-align: right;color: #ff0000;">*</div>
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <input id="email" type="email" placeholder="Adresse Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                    @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-1" style="line-height: 3;font-size: 20px;text-align: right;color: #ff0000;">*</div>
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <input id="prenom" type="text" placeholder="Prénom(s)" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                                    @if ($errors->has('prenom'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('prenom') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-1" style="line-height: 3;font-size: 20px;text-align: right;color: #ff0000;">*</div>
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <input id="password" type="password" placeholder="Mot de passe" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                    @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-1" style="line-height: 3;font-size: 20px;text-align: right;color: #ff0000;">*</div>
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <input id="telephone" type="text" placeholder="Téléphone" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required autofocus>

                                                    @if ($errors->has('telephone'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('telephone') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-1" style="line-height: 3;font-size: 20px;text-align: right;color: #ff0000;">*</div>
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <input id="password-confirm" placeholder="Confirmer mot de passe" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                                                    @if ($errors->has('password_confirmation'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <a href="#" data-toggle="modal" data-target="#myReglement" class="btn btn-primary btn-vert btn-inscrire btn-lg">{{ __('Suivant') }}</a> -->
                                        <a href="javascript:void(0)" class="btn btn-primary btn-vert btn-inscrire btn-lg">{{ __('Suivant') }}</a>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-md-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->

        <!-- Start modal inscription -->
        <div class="modal fade" id="myReglement" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document" style="width:80%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Règlement à lire absolument jusqu'au bout afin de validé votre inscription</h4>
                    </div>
                    <div class="modal-body" style="height:300px; width:100%; overflow-y:scroll; display:block;">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Article 1 : D&eacute;finitions<br />
                                    Les termes ci-dessous d&eacute;finis auront la signification suivante :<br />
                                    &laquo; Innovation &raquo; : Une technologie, un proc&eacute;d&eacute; ou un service novateur qui peut faire l&rsquo;objet<br />
                                    d&rsquo;une diffusion &agrave; grande &eacute;chelle pour une utilisation plus efficace des ressources.<br />
                                    &laquo; MPEER &raquo; : Minist&egrave;re du P&eacute;trole, de l&rsquo;Energie et des Energies Renouvelables ou
                                    Ministre du<br />P&eacute;trole, de l&rsquo;Energie et des Energies Renouvelable selon les cas.<br />
                                    &laquo; Prix &raquo; ou &laquo; Concours &raquo; : &laquo; Les Prix de l&rsquo;Innovation du Minist&egrave;re du P&eacute;trole, de l&rsquo;Energie et des<br />
                                    Energies Renouvelables &raquo; organis&eacute; par ledit minist&egrave;re.<br />
                                    &laquo; Finaliste &raquo; Personne physique ou morale ayant concouru dans une ou plusieurs cat&eacute;gorie<br />(s)
                                    et retenue pour pr&eacute;senter son projet au jury<br />&laquo; Laur&eacute;at &raquo; Personne physique ou morale qui
                                    remporte le prix dans la cat&eacute;gorie dans<br />laquelle elle a concouru dans le cadre du prix<br />
                                    &laquo; Organisation &raquo; ou &laquo; Organisateur &raquo; : d&eacute;signe le Minist&egrave;re du P&eacute;trole, de l&rsquo;Energie et des<br />
                                    Energies Renouvelables, en abr&eacute;g&eacute; MPEER, repr&eacute;sent&eacute; par le Ministre du P&eacute;trole, de<br />l&rsquo;Energie et des Energies
                                    Renouvelables dont le cabinet est situ&eacute; au 15eme Etage de<br />l&rsquo;immeuble SCIAM au Plateau &agrave; Abidjan<br />
                                    &laquo; Propri&eacute;t&eacute; Intellectuelle &raquo; correspond &agrave; l&rsquo;ensemble des droits exclusifs d&eacute;
                                    tenus sur une<br />cr&eacute;ation intellectuelle.<br />Article 2 : Objectif du Prix<br />&laquo; Les prix de l&rsquo;innovation
                                    du Minist&egrave;re du P&eacute;trole de l&rsquo;Energie et des Energies Renouvelables &raquo;<br />ont pour vocation d&rsquo;encourager,
                                    de soutenir et de valoriser la recherche et d&eacute;veloppement<br />dans les secteurs des Hydrocarbures et des Energies pour
                                    d&rsquo;une part, une exploitation durable<br />et &agrave; moindre co&ucirc;t des ressources &eacute;nerg&eacute;tiques et
                                    d&rsquo;autre part, pour un impact significatif et<br />b&eacute;n&eacute;fique des &eacute;nergies dans la vie socio-&eacute;
                                    conomique de la C&ocirc;te d&rsquo;Ivoire .<br />Ainsi, ces prix font la promotion des travaux et projets d&rsquo;innovation
                                    technologique et<br />scientifique et de service visant sp&eacute;cifiquement &agrave; :<br />-<br />
                                    r&eacute;duire le taux de carbone dans le mix &eacute;nerg&eacute;tique ;<br />vulgariser l&rsquo;acc&egrave;s
                                    &agrave; l&rsquo;&eacute;nergie pour tous ;<br />accro&icirc;tre la part des &eacute;nergies renouvelables dans le
                                    mix &eacute;nerg&eacute;tique ;<br />r&eacute;duire le co&ucirc;t d&rsquo;acc&egrave;s &agrave; l&rsquo;&eacute;nergie,
                                    au gaz ou aux produits p&eacute;troliers ;<br />accro&icirc;tre les rendements d&rsquo;exploitation des installations
                                    des secteurs hydrocarbures<br />et de l&rsquo;&eacute;lectricit&eacute; ;<br />lutter contre les pollutions de
                                    l&rsquo;air, de l&rsquo;eau et du sol, et contre le r&eacute;chauffement<br />climatique ;<br />
                                    r&eacute;habiliter et r&eacute;utiliser des sites p&eacute;troliers et &eacute;nerg&eacute;tiques, dans le respect des normes<br />
                                    s&eacute;curitaires et environnementales.<br />Le Concours est organis&eacute; par le Minist&egrave;re du P&eacute;trole, de
                                    l&rsquo;Energie et des Energies<br />Renouvelables (MPEER) et les Laur&eacute;ats seront r&eacute;compens&eacute;(e)s dans chacune des cat&eacute;gories<br />suivantes :<br />- Prix des Hydrocarbures ;
                                    <br />- Prix Energie .<br />

                                    Article 3 : Candidature et Recevabilit&eacute;<br />Le Concours est
                                    ouvert &agrave; toute personne physique ivoirienne r&eacute;sidant en C&ocirc;te D&rsquo;Ivoire ou<br />
                                    &agrave; l&rsquo;&eacute;tranger et &agrave; toute personne morale d&eacute;tenue en majorit&eacute; par des personnes physiques<br />
                                    ivoiriennes.
                                    <br>

                                    Les projets recevables auront &eacute;t&eacute; d&eacute;ploy&eacute;s en C&ocirc;te D&rsquo;Ivoire, sont en
                                    cours de d&eacute;ploiement<br />ou au stade de projet en d&eacute;veloppement &agrave; la date de soumission.<br />
                                    Les projets recevables concernent les secteurs des Hydrocarbures, des Energies et des<br />Energies Renouvelables.
                                    <br />Les membres du jury, les agents du cabinet et des directions g&eacute;n&eacute;rales du MPEER ne<br />
                                    peuvent &ecirc;tre candidats.<br />Un candidat aura le droit de pr&eacute;senter plusieurs projets dans chacune
                                    des cat&eacute;gories &agrave; la<br />condition que les projets soient compl&egrave;tement diff&eacute;rents.
                                    Si cette condition n&rsquo;est pas<br />respect&eacute;e, le candidat sera amen&eacute; &agrave; choisir le
                                    projet qu&rsquo;il d&eacute;cide de conserver en<br />comp&eacute;tition.<br />Pour &ecirc;tre recevable,
                                    les dossiers de candidature doivent &ecirc;tre conformes aux dispositions de<br />l&rsquo;article 5
                                    du pr&eacute;sent r&egrave;glement et &ecirc;tre soumis conform&eacute;ment au calendrier d&eacute;fini &agrave; l&rsquo;article<br />9 des pr&eacute;sentes.<br />De mani&egrave;re g&eacute;n&eacute;rale et quel que soit le type de projet, les candidats doivent d&eacute;crire de<br />mani&egrave;re compl&egrave;te et sinc&egrave;re la situation de leur projet, notamment en ce qui concerne la<br />Propri&eacute;t&eacute; Intellectuelle.<br />Tout manquement d&ucirc;ment constat&eacute; peut entra&icirc;ner la radiation du candidat.<br />Article 4 : Crit&egrave;res d&rsquo;Evaluation<br />L&rsquo;&eacute;valuation des projets s&rsquo;appuient sur :<br />-<br />-<br />-<br />-<br />-<br />Le caract&egrave;re innovant de la technologie, du proc&eacute;d&eacute; ou du service propos&eacute; et son<br />degr&eacute; d&rsquo;alignement avec les objectifs tels que vis&eacute;s &agrave; l&rsquo;article 2 du pr&eacute;sent<br />r&egrave;glement ;<br />La viabilit&eacute; &eacute;conomique du projet et son potentiel de cr&eacute;ation d&rsquo;emplois ;<br />L&rsquo;impact (futur) du projet sur la C&ocirc;te D&rsquo;Ivoire en termes d&rsquo;utilit&eacute; sociale, &eacute;cologique<br />et &eacute;conomique ;<br />La qualit&eacute; du dossier de soumission<br />La qualit&eacute; de l&rsquo;&eacute;quipe.<br />Article 5 : Constitution du Dossier<br />Le contenu du dossier se pr&eacute;sente comme suit :<br />- Le formulaire de candidature &agrave; remplir sur www.energie.gouv.ci/PRIX INNOVATION;<br />- Pour les personnes morales, la d&eacute;claration Fiscale d&rsquo;Existence (DFE) ;<br />- Un business plan &agrave; 3 ans au format .XLSX ;<br />- Le plan de financement du projet (maximum 3 pages, Police century Gothic taille11<br />retrait 2cmX2cmX2cmX2cm, Espacement 0 pt, interligne simple ) ;<br />- Une pr&eacute;sentation PowerPoint de 10 Diapositives maximum<br />o Contexte (Probl&eacute;matique et Objectifs) ;<br />o Strat&eacute;gie (Etapes, Business Mod&egrave;le, Ressources humaines et financi&egrave;res,<br />strat&eacute;gie marketing) ;<br />o Mise en &oelig;uvre et r&eacute;alisation ;<br />o Facteurs cl&eacute;s de succ&egrave;s et r&eacute;sultats probants (Qualitatifs et quantitatifs/<br />comparatif avant &ndash; apr&egrave;s) ;<br />o Soutien requis pour le d&eacute;veloppement du projet ( Estim&eacute; sous forme<br />d&rsquo;assistance<br />financi&egrave;re,<br />organisationnelle,<br />manag&eacute;riale,<br />humaine,<br />partenariat requis, etc.).<br />Le dossier de candidature doit &ecirc;tre retourn&eacute; par voie &eacute;lectronique, d&ucirc;ment compl&eacute;t&eacute;, dans<br />l&rsquo;espace ouvert sur www.energie.gouv.ci/PRIX INNOVATION<br />Les noms des fichiers num&eacute;riques seront comme suit : prixmpeer _ Nom du candidature _<br />Cat&eacute;gorie Prix _ Nom de la pi&egrave;ce</p>
                                </p>
                                <p>Exemple : prixmpeer _ SocieteInnovante _ Energie_ R&egrave;glement<br />
                                    Le dossier de candidature devra &ecirc;tre rempli en langue fran&ccedil;aise uniquement.<br />Article 6 : Suivi administratif du Dossier<br />L&rsquo;Organisateur, &agrave; travers son secr&eacute;tariat technique, assure la r&eacute;ception, l&rsquo;enregistrement,<br />l&rsquo;instruction des dossiers et l&rsquo;information des candidats sur les r&eacute;sultats des diff&eacute;rentes &eacute;tapes<br />de la s&eacute;lection.<br />Pour toute question relative au suivi administratif du dossier, merci d&rsquo;envoyer un mail &agrave;<br />prix.innovation@energie.gouv.ci<br />Article 7 : S&eacute;lection et jury<br />Un jury compos&eacute; d&rsquo;experts du secteur priv&eacute; du secteur public, s&eacute;lectionn&eacute;s pour leurs<br />comp&eacute;tences et exp&eacute;riences, aura la charge de d&eacute;signer les 5 Finalistes de chaque<br />cat&eacute;gorie et de d&eacute;signer les Laur&eacute;ats de chaque cat&eacute;gorie &agrave; l&rsquo;issue des pr&eacute;sentations. Le<br />secr&eacute;tariat du jury sera assur&eacute; par des agents du MPEER et la pr&eacute;sidence sera assur&eacute;e par<br />un membre &eacute;lu. Les agents du MPEER, membres du jury ne pourront pr&eacute;sider le jury.<br />Les Finalistes devront soutenir leur projet devant le jury conform&eacute;ment au calendrier de<br />l&rsquo;article 9 du pr&eacute;sent r&egrave;glement. Toute absence &agrave; la soutenance entra&icirc;nera la<br />disqualification du dossier. Les Laur&eacute;ats seront d&eacute;sign&eacute;s parmi les Finalistes.<br />Les r&eacute;sultats des d&eacute;lib&eacute;rations restent confidentiels jusqu&rsquo;&agrave; la date de remise des prix, fix&eacute;e<br />par le calendrier &agrave; l&rsquo;article 9 du pr&eacute;sent r&egrave;glement. Le jury reste souverain de ses<br />d&eacute;lib&eacute;rations et s&rsquo;accorde le droit d&rsquo;avoir des co-laur&eacute;ats dans une m&ecirc;me cat&eacute;gorie.<br />Le jury s&rsquo;accorde &eacute;galement le droit de ne pas r&eacute;compenser une cat&eacute;gorie et/ou d&eacute;cerner<br />des mentions sp&eacute;ciales en fonction des candidatures re&ccedil;ues. Ce droit du jury est maintenu<br />tout au long de la comp&eacute;tition, et m&ecirc;me apr&egrave;s les pr&eacute;sentations des Finalistes.<br />Article 8 : Prix<br />Chaque Laur&eacute;at d&rsquo;une cat&eacute;gorie aura droit &agrave; :<br /> Une ch&egrave;que de 10 000 000 FCFA<br /> Un accompagnement du MPEER pour la mise en &oelig;uvre du projet<br />La forme de l&rsquo;accompagnement d&eacute;pendra du projet retenu et reste &agrave; la discr&eacute;tion de<br />l&rsquo;Organisateur.<br />Dans le cas o&ugrave; le jury d&eacute;signerait des co-laur&eacute;ats dans une m&ecirc;me cat&eacute;gorie, la dotation<br />est divis&eacute;e &agrave; parts &eacute;gales entre les co-laur&eacute;ats.<br />Dans le cas o&ugrave; le jury s&rsquo;accorderait pour ne pas r&eacute;compenser une cat&eacute;gorie et/ou<br />mention sp&eacute;ciale, aucune dotation ne seront donn&eacute;es pour les cat&eacute;gories et/ou mentions<br />sp&eacute;ciales concern&eacute;es.<br />Pour leur venue au lieu de soutenance, le remboursement des frais de d&eacute;placement des<br />Finalistes, dans la limite de 500 000 FCFA par dossier, sera effectu&eacute; sur pr&eacute;sentation de<br />justificatifs.<br />Article 9 : Calendrier<br />Le Prix se d&eacute;roulera suivant le calendrier* ci-dessous :
                                </p>
                                <p>
                                    <p><br /><br /><br /><br /><br /><br />Soir&eacute;e de lancement<br />: 16 Septembre 2019<br />Ouverture des candidatures : 16 Septembre 2019<br />Cl&ocirc;ture des candidatures<br />: 16 Novembre 2019<br />Notifications des Finalistes<br />: 9 D&eacute;cembre 2019<br />Soutenance des finalistes<br />: 19 D&eacute;cembre 2019<br />Remise des prix<br />: 19 D&eacute;cembre 2019<br />*Les dates sont susceptibles d&rsquo;&ecirc;tre modifi&eacute;es<br />Article 10 : Engagement des candidats et finalistes<br />Les Laur&eacute;ats autorisent l&rsquo;Organisation du Prix &agrave; exploiter gratuitement les vid&eacute;os, photos,<br />logos et textes se rapportant &agrave; leur candidature dans le cadre de la communication<br />relative au Prix.<br />L&rsquo;envoi du dossier de candidature vaut acceptation des conditions et du dispositif de<br />s&eacute;lection.<br />Le repr&eacute;sentant ou la repr&eacute;sentante de chaque personne morale doit &ecirc;tre d&ucirc;ment<br />habilit&eacute;(e) &agrave; pr&eacute;senter sa candidature au Prix. Ce(tte) repr&eacute;sentant(e) garantit les<br />Organisateurs ainsi que l&rsquo;ensemble des membres du jury contre tout recours de tiers relatif<br />&agrave; sa candidature et pour quelques raisons que ce soit.<br />Les candidats au Concours s&rsquo;engagent &agrave; :<br /><br /><br /><br /><br />Communiquer de bonne foi les informations n&eacute;cessaires les concernant et &agrave;<br />r&eacute;pondre &agrave; toute demande de la part de l&rsquo;Organisation ;<br />Respecter scrupuleusement les crit&egrave;res de participation au Concours ;<br />Respecter les dispositions l&eacute;gales et r&egrave;glementaires applicables au projet qu&rsquo;ils<br />soumettent aux jurys du Concours, notamment les dispositions relatives au droit fiscal,<br />au droit du travail, &agrave; la protection de la Propri&eacute;t&eacute; Intellectuelle et industrielle en ceci<br />compris les droits des marques, des brevets, les droits d&rsquo;auteurs, le droit des bases de<br />donn&eacute;es sans que cette liste soit limitative ;<br />Accepter que le d&eacute;faut ou le retard de communication des &eacute;l&eacute;ments n&eacute;cessaires &agrave;<br />l&rsquo;&eacute;tude de leur dossier de candidature entra&icirc;ne le rejet de leur candidature et &agrave; ne<br />pas rechercher la responsabilit&eacute; de l&rsquo;Organisation de ce fait.<br />Les finalistes du Prix s&rsquo;engagent &agrave; :<br /><br /><br /><br />S&rsquo;investir personnellement de fa&ccedil;on active dans l&rsquo;aboutissement de leur projet en<br />vue de le d&eacute;velopper sur le territoire ivoirien ;<br />Mentionner dans toute communication ou d&eacute;claration qu&rsquo;ils sont finalistes des Prix<br />du MPEER ;<br />Donner, &agrave; la demande de l&rsquo;Organisateur, toute information sur l&rsquo;&eacute;volution de leur<br />projet, notamment en r&eacute;pondant aux enqu&ecirc;tes annuelles, cela jusqu&rsquo;&agrave; la cinqui&egrave;me<br />ann&eacute;e cons&eacute;cutive &agrave; l&rsquo;attribution des Prix.<br />Article 11 : Engagement des Organisateurs<br />L&rsquo;Organisateur s&rsquo;engage &agrave; garantir l&rsquo;ind&eacute;pendance du jury : en cas de conflit d&rsquo;int&eacute;r&ecirc;ts<br />(lien quelconque avec le projet, l&rsquo;entreprise ou le candidat) le jury ne pourra voter et un<br />autre jury sera constituer &agrave; cet effet pour poursuivre les d&eacute;lib&eacute;rations .<br />L&rsquo;Organisateur s&rsquo;engage &agrave; rembourser les frais engag&eacute;s par les Finalistes pour leur venue<br />au lieu de soutenance, dans les conditions d&eacute;crites &agrave; l&rsquo;article 8 du pr&eacute;sent r&egrave;glement.<br />L&rsquo;Organisateur s&rsquo;engage &agrave; mettre tout en &oelig;uvre pour garantir la confidentialit&eacute; sur les<br />informations communiqu&eacute;es par les participants au Prix.</p>
                                </p>
                                <p>
                                    <p>Article 12 : Publicit&eacute; et communication<br />Les candidats et les Laur&eacute;ats autorisent L&rsquo;Organisation du Prix &agrave; publier la description non<br />confidentielle de leur projet indiqu&eacute;e sur la fiche de candidature, dans le cadre des actions<br />d&rsquo;information et de communication li&eacute;es aux Prix, sans pouvoir pr&eacute;tendre &agrave; aucun droit,<br />quel qu&rsquo;il soit.<br />Cette disposition concerne l&rsquo;ensemble des supports de communication institutionnelle et<br />grand public.<br />Article 13 : Confidentialit&eacute;<br />Les membres des jurys et les personnes ayant acc&egrave;s aux dossiers d&eacute;pos&eacute;s dans le cadre du<br />Concours, s&rsquo;engagent par &eacute;crit &agrave; garder confidentielles les informations communiqu&eacute;es par<br />les participants.<br />Article 14 : Droit &agrave; l&rsquo;image<br />En acceptant le r&egrave;glement, le candidat d&eacute;clare accepter que l&rsquo;Organisateur proc&egrave;de &agrave;<br />titre gracieux, &agrave; l&rsquo;enregistrement de son image et de ses propos et &agrave; leur diffusion dans tout<br />cadre n&eacute;cessaire, dans le cadre de l&rsquo;&eacute;v&egrave;nement (vid&eacute;os des Finalistes diffus&eacute;es le soir de la<br />c&eacute;r&eacute;monie de remise des prix et sur les pages web du MPEER, photos et vid&eacute;os de la<br />c&eacute;r&eacute;monie de remise des prix ) et dans le cadre de la promotion des &eacute;ditions futures du Prix<br />(diffusion de vid&eacute;os ou photos des &eacute;ditions ant&eacute;rieures).<br />La diffusion et l&rsquo;exploitation de ces images, de ces propos et des documents int&eacute;gralement<br />ou par extraits, pourront se faire par le biais de sites internet, presse, films et phototh&egrave;que<br />accessibles sans aucune restriction d&rsquo;acc&egrave;s et sans r&eacute;mun&eacute;ration de la personne<br />concern&eacute;e, pour une dur&eacute;e illimit&eacute;e.<br />L&rsquo;Organisateur reste &agrave; la disposition des candidats pour d&rsquo;&eacute;ventuelles r&eacute;clamations<br />concernant des photos, des vid&eacute;os, des propos qui pourraient &ecirc;tre pris le jour de<br />l&rsquo;&eacute;v&egrave;nement et publi&eacute;s.<br />Article 15 : Protection des donn&eacute;es<br />L&rsquo;Organisateur du Prix sera amen&eacute; &agrave; collecter des donn&eacute;es personnelles afin de traiter les<br />candidatures et d&rsquo;assurer le bon d&eacute;roul&eacute; du Prix. Les personnes physiques disposeront de<br />droits, notamment de communication, de modification et &eacute;ventuellement de suppression<br />des informations qui les concernent, qu&rsquo;elles peuvent exercer aupr&egrave;s de l&rsquo;Organisateur.<br />Article 16 : Litiges<br />Le fait d&rsquo;adresser un dossier de participation implique, de la part des candidats,<br />l&rsquo;acceptation pure et simple du pr&eacute;sent r&egrave;glement, sans possibilit&eacute; de r&eacute;clamation quant<br />aux r&eacute;sultats, qui ne peuvent donner lieu &agrave; contestation, les jurys &eacute;tant souverains et n&rsquo;ayant<br />pas &agrave; motiver leur d&eacute;cision.<br />Le vote du jury se fera &agrave; la majorit&eacute; simple.</p>
                                </p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label style="font-size: 16px; color: #ff0000; font-weight: 600;">
                                            <input type="checkbox" name="reglement" required /> Je déclare avoir lu et compris les conditions figurant au règlement du concours disponible
                                            sous règlement et les accepter sans réserve. Je renonce à tout recours à l’encontre des
                                            organisateurs et partenaires du concours, de leurs représentants ou des membres du jury. Je
                                            certifie que tous les éléments fournis sont exacts et complets.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        <button type="submit" class="btn btn-primary btn-vert btn-inscrire btn-lg">{{ __('Je termine') }}</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- /.End modal inscription -->
    </form>
</div>
@endsection