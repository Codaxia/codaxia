<?php
/*
Template Name: Audit
*/
?>
<?php get_header()?>

<section class="pt-120 pb-50 why-audit">
    <div class="container">
        <div class="title text-center">
            <h5>FORFAIT AUDIT LARAVEL</h5>
            <p>Starting at 890$ CAD</p>
            <a href="#audit"><i class="lni lni-angle-double-down"></i></a>
        </div>
        <div class="row single-bloc-why col-12 col-xxl-10 col-xl-12 col-lg-12 col-md-8 col-sm-10 p-4 mb-4 mr-n5">
            <div class="col-11 col-xxl-8 col-xl-8 col-lg-8 col-md-11 col-sm-12">
                <h4>POURQUOI FAIRE UN AUDIT?</h4>
                <p><span class="fw-bold">Application lente, bugs</span> réguliers, <span class="fw-bold">problèmes de performance</span> ?</p>
                <p>Vous souhaitez avoir un <span class="fw-bold">avis extérieur</span> sur le développement de votre application ?</p>
                <p>Ou simplement faire le point de la <span class="fw-bold">dette technique</span>, de la <span class="fw-bold">sécurité</span> et de la <span class="fw-bold">solidité</span> de votre application ?</p>
                <div class="row padding-all-button">
                    <div class="col-0 col-xxl-2 col-xl-2 col-lg-0 col-md-1 col-sm-1"></div>
                    <div class="first col-6 col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-5 mb-10 me-2">
                        <div class="second">
                            <button class="glow-button">
                                <span><a href="#audit-example_id" class="text-white fs-5 fw-bold">Audit example</a></span>
                            </button>
                        </div>
                    </div>
                    <div class="first col-4 col-xxl-5 col-xl-5 col-lg-5 col-md-3 col-sm-4">
                        <div class="second">
                            <button class="glow-button">
                                <span><a href="<?= get_field('audit_button_url'); ?>" class="text-white fs-5 fw-bold"><?= get_field('audit_button'); ?></a></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 col-xxl-4 col-xl-1 col-lg-3 col-md-2 col-sm-2">
                <img class="col-6 col-xxl-12 col-xl-5 col-lg-5 col-md-5 col-sm-5 image" src="http://localhost/Codaxia/wp-content/uploads/2024/02/image audit 2.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="pt-130 audit-information">
    <div class="container">
        <div class="row">
			<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-11">
				<div class="audit-img mb-50">
					<img src="<?= get_field('audit_image'); ?>" alt="about">
				</div>
			</div>
			<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-11">
				<div class="audit-content mb-50">
					<div class="section-title mb-50">
						<h1 class="mb-25"><?= get_field('audit_title'); ?></h1>
						<p><?= get_field('audit_description'); ?></p>
					</div>
					<div class="accordion pb-55" id="accordionExample">
						<?php $i = 1;
						if (have_rows('audit_bloc')) : ?>
							<?php while (have_rows('audit_bloc')) : the_row(); ?>
								<div class="single-faq">
									<button class="w-100 text-start <?= ($i != 1) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="<?= ($i != 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?= $i ?>">
										<?= get_sub_field('audit_bloc_title'); ?>
									</button>

									<div id="collapse<?= $i ?>" class="collapse <?= ($i != 1) ? '' : 'show'; ?>" aria-labelledby="heading<?= $i ?>" data-bs-parent="#accordionExample">
										<div class="faq-content">
											<?= get_sub_field('audit_bloc_content'); ?>
										</div>
									</div>
								</div>
						<?php $i++;
							endwhile;
						endif; ?>
					</div>
					<div class="first">
						<div class="second">
							<button class="glow-button">
								<span><a href="<?= get_field('audit_button_url'); ?>" class="text-white fs-5 fw-bold"><?= get_field('audit_button'); ?></a></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>

<section id="audit" class="pt-50 audit-pricing">
    <div class="container">
        <div class="title text-center pb-90 justify-content-center">
            <h5>OUR PACKAGES</h5>
            <p>Don't know which one to choose?</p>
            <a href="#audit-type-id" class="text-white fs-5 fw-bold"><i class="lni lni-angle-double-down"></i></a>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-sm-6 mb-70">
                    <div class="single-bloc-audit-pricing h-100">
                        <div class="content">
                            <div class="row icon">
                                <div>
                                    <i class="lni lni-stats-up"></i>
                                </div>
                                <div class="col-11 col-sm-12">
                                    <h4>Audit Essentiel </h4>
                                    <p class="text-white">Pour les évaluations initiales et les vérifications de conformité</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column padding-body">
                                </br>
                                <div class="row">
                                    <div class="col space">
                                        <svg class="needle clock" fill="#1C2033" width="22" height="22" version="1.1" id="lni_lni-alarmclock" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                            <g>
                                                <path class="needle" d="M43.4,34.8h-9.1v-9.3c0-1.2-1-2.3-2.3-2.3c-1.2,0-2.3,1-2.3,2.3v9.3h-0.3c-1.2,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h0.3v0.3
                                                    c0,1.2,1,2.3,2.3,2.3c1.2,0,2.3-1,2.3-2.3v-0.3h9.1c1.2,0,2.3-1,2.3-2.3S44.6,34.8,43.4,34.8z"/>
                                                <path class="clock" d="M59.5,19.1c0-5.5-4.4-9.9-9.9-9.9c-2.6,0-5,1-6.8,2.7c-2.7-1.2-5.5-2-8.6-2.2V6.3h2.8c1.2,0,2.3-1,2.3-2.3s-1-2.3-2.3-2.3
                                                    H26.9c-1.2,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h2.8v3.5c-3,0.3-5.9,1-8.6,2.2c-1.8-1.7-4.2-2.7-6.8-2.7c-5.5,0-9.9,4.4-9.9,9.9
                                                    c0,2.7,1.1,5.3,3.1,7.1c-1.2,3-1.9,6.3-1.9,9.7c0,14.5,11.8,26.3,26.3,26.3s26.3-11.8,26.3-26.3c0-3.4-0.7-6.7-1.9-9.7
                                                    C58.4,24.4,59.5,21.8,59.5,19.1z M49.6,13.7c3,0,5.4,2.4,5.4,5.4c0,1-0.3,2-0.8,2.8c-1.9-3-4.3-5.5-7.2-7.5
                                                    C47.8,13.9,48.7,13.7,49.6,13.7z M9,19.1c0-3,2.4-5.4,5.4-5.4c0.9,0,1.8,0.2,2.6,0.7c-2.9,2-5.3,4.6-7.2,7.5C9.3,21,9,20.1,9,19.1z
                                                    M32,57.8c-12,0-21.8-9.8-21.8-21.8c0-12,9.8-21.8,21.8-21.8s21.8,9.8,21.8,21.8C53.8,48,44,57.8,32,57.8z"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="col-4 time-bloc">
                                        <p class="fw-bold">1 semaine</p>
                                    </div>
                                </div>
                                <div class="separation">
                                    <h1 class="text-white fs-4">890$ CAD</h1> 
                                    <hr>
                                    </br>
                                </div>
                                <h2 class="text-decoration-underline margin-analyse"> Analyses effectuées:</h3>
                                <ul class="list-unstyled text-start margin">
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Processus d’installation de l’application 
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Existe-t-il un processus d’installation documenté et fonctionnel ? </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> (readme) </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Si oui, installation du projet en local </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Liste des problèmes rencontrés </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Dépendances et des versions des frameworks
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Scan des dépendances front-end et back-end avec les outils d’analyse </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse des résultats et des impacts </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            dette technique, bugs,  code smell et sécurité 
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Installation et configuration de l’outils sur votre projet </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Scan du projet </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Lien avec le tableau de bord complet et détails de tous les problèmes </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse de l’état général de l’application </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Rapport essentiel 
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Document avec les résultat et analyse de l’audit </div>
                                                </div>
                                            </span>
                                        </li> 
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Entretien avec questions 
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Session de 1h pour l’explication des résultats et analyses </div>
                                                </div>
                                            </span>
                                        </li> 
                                </ul>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="first">
                                    <div class="second">
                                        <button class="glow-button">
                                            <span><a href="<?= get_field('contact_mail', 'option'); ?>" class="fw-bold text-white fs-6">
                                            <?= get_field('contact_button', 'option'); ?></a></span>
                                        </button>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6 mb-70">
                    <div class="single-bloc-audit-pricing recommanded h-80">
                        <div class="content padding">
                            <div class="recommanded">
                                <p class="text-white"> Recommanded</p>
                            </div>
                            <div class="row icon">
                                <div>
                                    <i class="lni lni-stats-up"></i>
                                </div>
                                <div class="col-11 col-sm-12">
                                    <h4>Audit Complet </h4>
                                    <p class="text-white">Pour une analyse approfondie et des recommandations stratégiques</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column padding-body">
                                </br>
                                <div class="row">
                                    <div class="col space">
                                        <svg class="needle clock" fill="#1C2033" width="22" height="22" version="1.1" id="lni_lni-alarmclock" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                            <g>
                                                <path class="needle" d="M43.4,34.8h-9.1v-9.3c0-1.2-1-2.3-2.3-2.3c-1.2,0-2.3,1-2.3,2.3v9.3h-0.3c-1.2,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h0.3v0.3
                                                    c0,1.2,1,2.3,2.3,2.3c1.2,0,2.3-1,2.3-2.3v-0.3h9.1c1.2,0,2.3-1,2.3-2.3S44.6,34.8,43.4,34.8z"/>
                                                <path class="clock" d="M59.5,19.1c0-5.5-4.4-9.9-9.9-9.9c-2.6,0-5,1-6.8,2.7c-2.7-1.2-5.5-2-8.6-2.2V6.3h2.8c1.2,0,2.3-1,2.3-2.3s-1-2.3-2.3-2.3
                                                    H26.9c-1.2,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h2.8v3.5c-3,0.3-5.9,1-8.6,2.2c-1.8-1.7-4.2-2.7-6.8-2.7c-5.5,0-9.9,4.4-9.9,9.9
                                                    c0,2.7,1.1,5.3,3.1,7.1c-1.2,3-1.9,6.3-1.9,9.7c0,14.5,11.8,26.3,26.3,26.3s26.3-11.8,26.3-26.3c0-3.4-0.7-6.7-1.9-9.7
                                                    C58.4,24.4,59.5,21.8,59.5,19.1z M49.6,13.7c3,0,5.4,2.4,5.4,5.4c0,1-0.3,2-0.8,2.8c-1.9-3-4.3-5.5-7.2-7.5
                                                    C47.8,13.9,48.7,13.7,49.6,13.7z M9,19.1c0-3,2.4-5.4,5.4-5.4c0.9,0,1.8,0.2,2.6,0.7c-2.9,2-5.3,4.6-7.2,7.5C9.3,21,9,20.1,9,19.1z
                                                    M32,57.8c-12,0-21.8-9.8-21.8-21.8c0-12,9.8-21.8,21.8-21.8s21.8,9.8,21.8,21.8C53.8,48,44,57.8,32,57.8z"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="col-4 time">
                                        <p class="fw-bold">2-3 semaines</p>
                                    </div>
                                </div>
                                <div class="separation">
                                    <h1 class="text-white fs-4">1490$ CAD</h1> 
                                    <hr class="separation">
                                    </br>
                                </div>
                                <h2 class="text-decoration-underline"> Analyses effectuées:</h3>
                                <ul class="list-unstyled text-start margin-recommanded ml-10">
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Les Analyses de l’Audit essentiel
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse du processus d’installation de l’application  </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse des dépendances et des versions des frameworks </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse détaillée dette technique, bugs,  code smell et sécurité </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse du back-end
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Installation et configuration de l’outils sur votre projet </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Scan du projet </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Test niveau 1 à 9 en fonction du nombre de problèmes </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse haut niveau des résultats </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse du front-end 
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Installation et configuration de l’outils sur votre projet. </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Scan du projet </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse haut niveau des résultats </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Vérification de ECMAScript. </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Vérification de la cohérence des technologies utilisées. </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse de l'organisation des assets et compilation (CSS, JS) 
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Voir s’ils sont bien dans le fichier ressources et si les fichiers sont bien séparés </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Vérifier si la compilation est bien fonctionnelle et à jour </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Recherche de balise “script“ et “style“ dans les templates blade ou PHP </div>
                                                </div>
                                            </span>
                                        </li> 
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse des erreurs console 
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Report des erreurs présente dans la console de l’inspecteur de google pour les pages les plus importantes de l’app </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse du déploiement de la base de données  
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Voir si le processus de migration et de seed sont en place </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Si possible faire fonctionner l’application à vide. </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Si l’application est en cours de développement, voir pour le script de migration </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Dump BD si l’application est en production </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse de l’orthographe du code et des conventions de nommage
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Vérifier que le code et les commentaires sont bien en anglais </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse de l'application avec l’outil de nommage et de detection des fautes ( Analyse de haut niveau ) </div>
                                                </div>
                                            </span>
                                        </li> 
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse des commentaires, code commentés, debug call  
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Faire la recherche des console.log, dd(), var_dump() et du code en commentaires. </div>
                                                </div>
                                            </span>
                                        </li> 
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse des commits et des branches du git
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Tableau avec la liste des personnes ainsi que leur nombre de commit </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Voir si les branches sont à jour et si il n’y a pas de “branches mortes” </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse des liens morts (site web)
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Liste des liens qui ne sont plus fonctionnels  </div>
                                                </div>
                                            </span>
                                        </li>   
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse de performance page speed en ligne (site web)
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse de la performance, de l'accessibilité, des meilleures pratiques et du SEO </div>
                                                </div>
                                            </span>
                                        </li>   
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Rapport complet
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Présentation et graphique de l’application </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Document structuré avec tous les résultats et analyse </div>
                                                </div>
                                            </span>
                                        </li>   
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Présentation du document avec questions 
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Session de 1 à 2h pour parcourir le document et répondre à toutes les questions. </div>
                                                </div>
                                            </span>
                                        </li>      
                                </ul>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="first">
                                    <div class="second">
                                        <button class="glow-button">
                                            <span><a href="<?= get_field('contact_mail', 'option'); ?>" class="fw-bold text-white fs-6">
                                            <?= get_field('contact_button', 'option'); ?></a></span>
                                        </button>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6 mb-70">
                    <div class="single-bloc-audit-pricing h-100">
                        <div class="content">
                            <div class="row icon">
                                <div>
                                    <i class="lni lni-stats-up"></i>
                                </div>
                                <div class="col-11 col-sm-12">
                                    <h4>Audit Personnalisé </h4>
                                    <p class="text-white">Pour les applications complexes ou technologiquement diversifiées</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column padding-body">
                                </br>
                                <div class="row">
                                    <div class="col space">
                                        <svg class="needle clock" fill="#1C2033" width="22" height="22" version="1.1" id="lni_lni-alarmclock" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                            <g>
                                                <path class="needle" d="M43.4,34.8h-9.1v-9.3c0-1.2-1-2.3-2.3-2.3c-1.2,0-2.3,1-2.3,2.3v9.3h-0.3c-1.2,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h0.3v0.3
                                                    c0,1.2,1,2.3,2.3,2.3c1.2,0,2.3-1,2.3-2.3v-0.3h9.1c1.2,0,2.3-1,2.3-2.3S44.6,34.8,43.4,34.8z"/>
                                                <path class="clock" d="M59.5,19.1c0-5.5-4.4-9.9-9.9-9.9c-2.6,0-5,1-6.8,2.7c-2.7-1.2-5.5-2-8.6-2.2V6.3h2.8c1.2,0,2.3-1,2.3-2.3s-1-2.3-2.3-2.3
                                                    H26.9c-1.2,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h2.8v3.5c-3,0.3-5.9,1-8.6,2.2c-1.8-1.7-4.2-2.7-6.8-2.7c-5.5,0-9.9,4.4-9.9,9.9
                                                    c0,2.7,1.1,5.3,3.1,7.1c-1.2,3-1.9,6.3-1.9,9.7c0,14.5,11.8,26.3,26.3,26.3s26.3-11.8,26.3-26.3c0-3.4-0.7-6.7-1.9-9.7
                                                    C58.4,24.4,59.5,21.8,59.5,19.1z M49.6,13.7c3,0,5.4,2.4,5.4,5.4c0,1-0.3,2-0.8,2.8c-1.9-3-4.3-5.5-7.2-7.5
                                                    C47.8,13.9,48.7,13.7,49.6,13.7z M9,19.1c0-3,2.4-5.4,5.4-5.4c0.9,0,1.8,0.2,2.6,0.7c-2.9,2-5.3,4.6-7.2,7.5C9.3,21,9,20.1,9,19.1z
                                                    M32,57.8c-12,0-21.8-9.8-21.8-21.8c0-12,9.8-21.8,21.8-21.8s21.8,9.8,21.8,21.8C53.8,48,44,57.8,32,57.8z"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="col-3 time">
                                        <p class="fw-bold">  3-6 semaines</p>
                                    </div>
                                </div>
                                <div class="separation">
                                    <h1 class="text-white fs-4">1490-4900$ CAD</h1> 
                                    <hr class="separation">
                                    </br>
                                </div>
                                <h2 class="text-decoration-underline margin-analyse"> Analyses effectuées:</h3>
                                <ul class="list-unstyled text-start margin">
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Les Analyses de l’Audit complet 
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse du back-end </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse du front-end </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse de l'organisation des assets et compilation (CSS, JS) </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse du déploiement de la base de données  </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse de l’orthographe du code et des conventions de nommage  </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse des commentaires, code commentés, debug call  </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> CSS et javascript dans le PHP  </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Création du document   </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse des commits du git  </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Présentation du document avec questions  </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse des liens morts (site web)  </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse de performance page speed en ligne (site web)  </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse DevOps
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse de l’infrastructure avec un expert </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Test de charge </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Test de performance et de stabilité du serveur en fonction des besoins </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse manuelle du code 
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse ciblée du code en fonction de votre besoin spécifique </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Notre senior Laravel étudie les fichiers de code un par un pour trouver certains problèmes qui ne seraient pas visible dans les tests statiques. </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse de sécurité avancée
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse de la sécurité niveau serveur  </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Test de pénétration ( Pentest ) Owasp avancé  </div>
                                                </div>
                                            </span>
                                        </li> 
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse poussée de la base de données
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse de l’architecture et des bonne pratiques dans la base de données par notre expert. </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Étude de la cohérence de indexation, relation, clé étrangère, etc </div>
                                                </div>
                                            </span>
                                        </li> 
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Analyse de l’Architecture
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse manuelle des models et des contrôleurs </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Vérification du respect de la méthode SOLID </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Analyse poussée des API </div>
                                                </div>
                                            </span>
                                        </li> 
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Création de tâches pour l’équipe de dev
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Création de tâches sur le logiciel de gestion de votre choix : Jira, Asana, etc. </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Tâches générées en fonction des problèmes rencontrés </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Priorisation des tâches selon les objectifs (sécurité, performance, dette technique, etc.) </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Suivi avec votre équipe de développement et vérification une fois effectuées </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="lni lni-checkmark-circle"></i>
                                            Mise en place des pipelines CI/CD
                                            <span class="bubble">
                                                <i class="lni lni-question-circle text-white margin"></i>
                                                <div class="bubble-text">
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Automatisation des tests pour l’équipe </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Système pour empêcher l’équipe de reproduire les erreurs relevées dans l’audit </div>
                                                    <div class="pb-10"><i class="lni lni-checkmark text-white"></i> Plateforme de votre choix : GitHub Actions, Azure, AWS, etc. </div>
                                                </div>
                                            </span>
                                        </li> 
                                </ul>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="first">
                                    <div class="second">
                                        <button class="glow-button">
                                            <span><a href="<?= get_field('contact_mail', 'option'); ?>" class="fw-bold text-white fs-6">
                                            <?= get_field('contact_button', 'option'); ?></a></span>
                                        </button>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>                
</section>

<section id="audit-example_id" class="pt-80 pb-100 audit-example">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6">
                <h1>Want to see an example ?</h1>
                <h2>Voici l'audit effectué sur un projet open source:</h2>
                <p>Ce document vise à faire l'analyse du code de l'application de démo de la collection FilamenPHP.</p>
                <p>Il s'agit d'une collection de composants full-stack pour le développement accéléré de Laravel.</p> 
                </br>
                <p>L'audit est fait sur une application open source.</p>
                <p>Le code est donc particulièrement bien entretenu et à jour. L'audit est donc assez court, la plupart des tests sont positifs et donc n'ont pas besoin d'analyse. Les audits sont donc généralement beaucoup plus détaillés et plus long selon les applications.</p>        
            </div>
            <div class="col-xxl-4 col-xl-7 col-lg-6">
            <a href="https://wirehaired-digit-7fa.notion.site/Exemple-d-audit-FilamentPHP-bfd83152b48741f5906d79ad01883d2f"><img class="col-12 col-xxl-11 col-xl-10 col-lg-12 col-md-12 col-sm-12 image" src="http://localhost/Codaxia/wp-content/uploads/2024/02/audit-example.jpg" alt=""></a>
            </div>
        </div>
    </div>
</section>

<section id="audit-type-id" class="pt-100 pb-50 audit-type">
    <div class="container">
        <div class="row single-bloc-type col-12 col-xxl-10 col-xl-12 col-lg-12 col-md-12 col-sm-9 p-4 mb-70 mr-n5">
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-5 col-sm-1 mb-10">
                <img class="col-6 col-xxl-3 col-xl-6 col-lg-12 col-md-5 col-sm-5 image" src="http://localhost/Codaxia/wp-content/uploads/2024/02/audit type 1.png" alt="">
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-6 col-md-7">
                <h1 class="pb-20">Audit Essentiel</h1>
                <p class="pb-20">Ce forfait couvre l'analyse de l'installation et des dépendances de l'application, ainsi qu'une revue initiale de la dette technique, des bugs, et de la sécurité via notre outil d'audit spécialisé. Cela inclut un rapport complet accessible en ligne via un lien fourni à la fin de l'audit.</p>
                <p class="pb-20">Parfait pour les entreprises qui ont sous-traité leur développement et cherchent à avoir une idée générale de la qualité du code reçu.</p>
                <p class="pb-20">Vous obtiendrez une vue d'ensemble claire de l'état actuel de votre code et des recommandations pour des améliorations immédiates.</p>
            </div>
        </div>
        <div class="row single-bloc-type col-12 col-xxl-10 col-xl-12 col-lg-12 col-md-12 col-sm-9 p-4 mb-70 mr-n5">
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-5 col-sm-1 mb-10">
                <img class="col-6 col-xxl-3 col-xl-6 col-lg-12 col-md-5 col-sm-5 image" src="http://localhost/Codaxia/wp-content/uploads/2024/02/audit type 2.png" alt="">
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-6 col-md-7">
                <h1 class="pb-20">Audit Complet</h1>
                <p class="pb-20">Ce forfait est particulièrement utile pour les entreprises qui envisagent des mises à jour importantes ou des changements stratégiques (refonte, changement de technologie).</p>
                <p class="pb-20">Il comprend une analyse complète du backend spécialisé pour Laravel et un examen minutieux des processus de déploiement et des assets.</p>
                <p class="pb-20">Vous recevrez un rapport complet mettant en évidence les points forts, les faiblesses, et les opportunités d'amélioration, vous permettant de prendre des décisions éclairées pour l'avenir de votre application.</p>
                <p class="pb-20">Il offre un aperçu précis des opportunités d'optimisation et des risques potentiels.</p>
            </div>
        </div>
        <div class="row single-bloc-type col-12 col-xxl-10 col-xl-12 col-lg-12 col-md-12 col-sm-9 p-4 mb-70 mr-n5">
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-5 col-sm-1 mb-10">
                <img class="col-6 col-xxl-3 col-xl-6 col-lg-12 col-md-5 col-sm-5 image" src="http://localhost/Codaxia/wp-content/uploads/2024/02/audit type 3.png" alt="">
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-6 col-md-7">
                <h1 class="pb-20">Audit Personnalisé</h1>
                <p class="pb-20">Ce forfait est pour les applications utilisant des technologies plus spécifiques ou plus anciennes. Il inclut une analyse manuelle détaillée et un suivi personnalisé, adapté spécifiquement à la structure et aux défis uniques de votre code.</p>
                <p class="pb-20">Avec une attention particulière portée à la sécurité, y compris une analyse approfondie du serveur. Ce forfait offre une perspective exhaustive et stratégique pour guider les décisions spécifiques en matière de développement.</p>
                <p class="pb-20">Nous étudions vos enjeux pour orienter l'audit et l'analyse. Nous faisons une analyse poussé pour avoir un aperçu précis et personnalisé en fonction des enjeux. </p>
            </div>
        </div>
    </div>
</section>


<?php get_contact() ?>
<?php get_footer() ?>