<!DOCTYPE html>
<html>
<body>
	<div class="wrapper">     
		<?php include "base.php" ?>
		<?php   
		if (isset($_GET['file'])) { 
			$file = $_GET['file'] ;
				if (file_exists($file) && is_readable($file) && preg_match('/\.mp3$/',$file)){
					header('Content-type: application/mp3');  
					header("Content-Disposition: attachment; filename=\"$file\"");   
					readfile($file); 
				} else { 
				header("HTTP/1.0 404 Not Found"); 
				echo "<h2>Error 404: File Not Found: <br /><em>$file</em></h2>"; 
			} 
		} 
		?>
		<script src="js/projectScroller.js"></script> 
			<section class="mainSection">
				<h2 class="contentTitle">Project Portfolio - Portfolio Design:</h2>
				<section class="container">
					<h4>Design verbetering</h4>
					<p><i>14 sep 2016 - Léon Kranenburg:</i></p>
					<a href="HKUWork/PortfolioDesign/FlierNathan_designVerbeteringen_v1.pdf" target="blank">design verbeteringen (v. 1)</a><br/>		
					<a href="HKUWork/PortfolioDesign/FlierNathan_designAnalyse_v1.pdf" target="blank">design analyse (v. 1)</a><br/><br/>		
					
					<h4>Poster design</h4>
					<p><i>28 sep 2016 - Léon Kranenburg:</i></p>
					<a href="HKUWork/PortfolioDesign/FlierNathan_posterDesignPoster_v1.jpg" target="blank">poster (v. 1)</a><br/>
					<a href="HKUWork/PortfolioDesign/FlierNathan_posterDesignQuote_v1.pdf" target="blank">poster quote (v. 1)</a><br/>	
					<a href="HKUWork/PortfolioDesign/FlierNathan_posterDesignOnderbouwing_v1.pdf" target="blank">poster onderbouwing (v. 1)</a><br/><br/>
					<p><i>5 okt 2016 - Léon Kranenburg:</i></p>
					<a href="HKUWork/PortfolioDesign/FlierNathan_posterDesignPoster_v2.jpg" target="blank">poster (v. 2)</a><br/><br/>
					
					<h4>Self branding</h4>
					<p><i>19 okt 2016 - Léon Kranenburg:</i></p>
					<a href="HKUWork/PortfolioDesign/FlierNathan_portfolioSiteVerbeterpunten_v1.pdf" target="blank">portfolio site verbeterpunten (v. 1)</a><br/>
					<a href="HKUWork/PortfolioDesign/FlierNathan_selfBranding_v1.pdf" target="blank">ideale portfolio (v. 1)</a><br/><br/>
					<p><i>24 okt 2016 - Léon Kranenburg:</i></p>
					<a href="HKUWork/PortfolioDesign/FlierNathan_portfolioSiteVerbeterpunten_v2.pdf" target="blank">portfolio site verbeterpunten (v. 2)</a><br/><br/><br/>
					<p><i>25 okt 2016 - Léon Kranenburg:</i></p>
					<a href="HKUWork/PortfolioDesign/FlierNathan_portfolioSiteVerbeterpunten_v3.pdf" target="blank">portfolio site verbeterpunten (v. 3)</a><br/><br/>
					<p><i>26 okt 2016 - Léon Kranenburg:</i></p>
					<a href="HKUWork/PortfolioDesign/FlierNathan_idealePortfolioStoryBoard_v1.pdf" target="blank">Ideale portfolio storyboard</i></a><br/>
					<a href="HKUWork/PortfolioDesign/IdealePortfolio/index.html" target="blank">Ideale portfolio, proefversie</i></a>
				</section>
				<h2>Project Portfolio - Research:</h2>
				<section class="container">
					<h4>Persona</h4>
					<p><i>1 okt 2016 - Harald Warmelink:</i></p>  
					<a href="HKUWork/PortfolioResearch/FlierNathan_personaTeacher_v2.pdf" target="blank">persona teacher (v. 2)</a><br/>
					<a href="HKUWork/PortfolioResearch/FlierNathan_personaStudent_v2.pdf" target="blank">persona student (v. 2)</a>
				</section>
				<h2>Project Portfolio - Usability:</h2>
				<section class="container">
					<h4>Usability verslaggeving</h4>
					<p><i>26 okt 2016 - Emiel Kampen:</i></p>
					<a href="HKUWork/Usability/FlierNathan_UsabilityTestVerslag_v1.pdf" target="blank">usability testverslag (v. 1)</a><br/>
					<a href="HKUWork/Usability/FlierNathan_UsabilityTestPlan_v1.pdf" target="blank">usability testplan (v. 1)</a><br/>
					<a href="HKUWork/Usability/FlierNathan_UsabilityTestOpdrachtenData_v1.pdf" target="blank">usability-test opdrachten data (v. 1)</a><br/>
					<a href="HKUWork/Usability/FlierNathan_UsabilityTestEnquete_v1.pdf" target="blank">usability-test enquetes data (v. 1)</a><br/>
					<a href="HKUWork/Usability/FlierNathan_UsabilityTestEnqueteResultaten_v1.pdf" target="blank">usability-test enquete resultaten (v. 1)</a><br/>
					<a href="HKUWork/Usability/FlierNathan_Anchovies4Life_v1.pdf" target="blank">verwachtingsdocument (v. 1)</a><br/>
					<a href="https://vimeo.com/188347261" target="blank">beeldopname (v. 1)</a><br/><br/>
					<h4>Usability test downloadables:</h4>		
					<p><i>26 okt 2016 - Emiel Kampen:</i></p>
					<a href="HKUWork/Usability/FlierNathan_UsabilityTestOpdrachtResultaten_v1.xlsx">usability-test opdracht resultaten (v. 1)</a><br/>
					<a href="HKUWork.php?file=HKUWork/Usability/deelnemer1.mp3">test deelnemer1 (v. 1)</a><br/>
					<a href="HKUWork.php?file=HKUWork/Usability/deelnemer2.mp3">test deelnemer2 (v. 1)</a><br/>
					<a href="HKUWork.php?file=HKUWork/Usability/deelnemer3.mp3">test deelnemer3 (v. 1)</a><br/>
					<a href="HKUWork.php?file=HKUWork/Usability/deelnemer4.mp3">test deelnemer4 (v. 1)</a><br/>
					<a href="HKUWork.php?file=HKUWork/Usability/deelnemer5.mp3">test deelnemer5 (v. 1)</a>
				</section>
				<h2>Project Portfolio - Tools for Thinking:</h2>
				<section class="container">
					<p><i>14 sep 2016 - Corné van Delft:</i></p>
					<a href="HKUWork/Tools4Thinking/FlierNathan_PMI_v1.pdf" target="blank">PMI week 1 (v. 1)</a><br/><br/>
					<p><i>3 okt 2016 - Corné van Delft:</i></p>
					<a href="HKUWork/Tools4Thinking/FlierNathan_perspectieven_v1.pdf" target="blank">perspectieven (v. 1)</a><br/><br/>
					<p><i>21 okt 2016 - Corné van Delft:</i></p>
					<a href="HKUWork/Tools4Thinking/FlierNathan_thinkingHats_v1.pdf" target="blank">thinking hats (v. 1)</a><br/><br/>
					<h4>Portfolio deadline</h4>
					<p><i>25 okt 2016 - Corné van Delft:</i></p>
					<a href="HKUWork/Tools4Thinking/FlierNathan_wireframes_v1.jpg" target="blank">wireframes portfolio site (v. 1)</a><br/>
					<a href="HKUWork/Tools4Thinking/FlierNathan_sitemap_v1.jpg" target="blank">sitemap portfolio site (v. 1)</a><br/>		
					<a href="HKUWork/Tools4Thinking/FlierNathan_requirements_v1.pdf" target="blank">requirements portfolio site (v. 1)</a>
				</section>
				<h2>Tekenen, Animatie & Visueel denken:</h2>
				<section class="container"><!-- mail: raf.croonen@hku.nl -->
					<h4>Tekenen</h4>
					<p><i>17 sep 2016 - Raf Croonen:</i></p>
					<a href="HKUWork/Tekenen/FlierNathan_stilleven_v1.pdf" target="blank">stilleven (v. 1)</a><br/><br/>
					<p><i>27 sep 2016 - Raf Croonen:</i></p>
					<a href="HKUWork/Tekenen/FlierNathan_Portretten_v1.JPG" target="blank">portretten (v. 1)</a><br/><br/>
					<p><i>14 sep 2016 - Raf Croonen:</i></p>
					<a href="HKUWork/Tekenen/FlierNathan_ruimtes_v1.pdf" target="blank">ruimtes (v. 1)</a><br/> 
					<a href="HKUWork/Tekenen/FlierNathan_deMenselijkeMaat_v1.pdf" target="blank">de menselijke maat (v. 1)</a><br/><br/>
					<p><i>5 nov 2016 - Raf Croonen:</i></p>
					<a href="HKUWork/Tekenen/FlierNathan_perspectief_v1.jpg" target="blank">perspectief (v. 1)</a><br/>
					<a href="HKUWork/Tekenen/FlierNathan_arceren_v1.jpg" target="blank">arceren (v. 1)</a><br/><br/>
					<p><i>5 nov 2016 - Raf Croonen:</i></p>
					<a href="HKUWork/Tekenen/FlierNathan_portret_v1.JPG" target="blank">van klein naar groot(portret) (v. 1)</a><br/><br/>  
					<p><i>3 dec 2016 - Raf Croonen:</i></p>
					<a href="HKUWork/Tekenen/FlierNathan_storyboard_v1.jpg" target="blank">storyboard van film-stills (v. 1)</a><br/><br/>  
					<p><i>16 dec 2016 - Raf Croonen:</i></p>
					<a href="HKUWork/Tekenen/FlierNathan_contrastSkull_v1.JPG" target="blank">contrast (v. 1)</a><br/>
					<a href="HKUWork/Tekenen/FlierNathan_deGriezels_v1.pdf" target="blank">de griezels (v. 1)</a><br/><br/>  
					
					<h4>Animatie</h4>
					<p><i>27 sep 2016 - Raf Croonen:</i></p>
					<a href="#" class="scroller">15x animatie (v. 1)</a><br/><br/>
					<p><i>28 sep 2016 - Raf Croonen:</i></p>
					<a href="#" class="scroller">stopmotion werkcollege (v. 1)</a><br/><br/>
					<p><i>5 okt 2016 - Raf Croonen:</i></p>
					<a href="https://www.youtube.com/watch?v=3eHBtMbYEQo&feature=youtu.be" target="blank">pixelation werkcollege (v. 1)</a><br/><br/>
					<p><i>18 sep 2016 - Raf Croonen:</i></p>
					<a href="#" class="scroller">loopbeweging (v. 1)</a><br/><br/>
					<p><i>13 dec 2016 - Raf Croonen:</i></p>
					<a href="https://vimeo.com/195522015" target="blank">lip sync monkey (v. 1)</a><br/><br/>
					<p><i>15 dec 2016 - Raf Croonen:</i></p>
					<a href="#" class="scroller">transport (v. 1)</a><br/><br/>
					<p><i>20 dec 2016 - Raf Croonen:</i></p>
					<a href="https://vimeo.com/196408796" target="blank">christmas card (v. 1)</a><br/><br/>	
					<p><i>21 dec 2016 - Raf Croonen:</i></p>
					<a href="https://vimeo.com/196649610" target="blank">christmas card (v. 2)</a><br/><br/>				
					
					<h4> - Animeren bij een soundtrack</h4>
					<p><i>31 okt 2016 - Raf Croonen:</i></p>
					<a href="HKUWork/Animatie/FlierNathan_storyboard_v1.JPG" target="blank">storyboard (v. 1)</a><br/><br/>
					<p><i>12 nov 2016 - Raf Croonen:</i></p>
					<a href="HKUWork/Animatie/FlierNathan_synopsis_v1.pdf" target="blank">synopsis (v. 1)</a><br/>
					<a href="HKUWork/Animatie/FlierNathan_ontwerpKarakters_v1.jpg" target="blank">ontworpen karakters (v. 1)</a><br/>
					<a href="https://vimeo.com/191291792" target="blank">animatie (v. 1)</a><br/>
					<a href="https://vimeo.com/192951045" target="blank">animatie (v. 2)</a><br/><br/>
					
					<h4>Visueel denken</h4>
					<p><i>10 feb 2016 - Raf Croonen:</i></p>
					<a href="HKUWork/VisueelDenken/FlierNathan_productieProces_V1.pdf" target="blank">productie proces (v. 1)</a><br/><br/>
					<p><i>30 mrt 2016 - Raf Croonen:</i></p>
					<a href="HKUWork/VisueelDenken/FlierNathan_isometrischPerspectief_V1.pdf" target="blank">isometrisch perspectief (v. 1)</a><br/>
					<a href="HKUWork/VisueelDenken/FlierNathan_vlakkenWolf_V1.jpg" target="blank">vlakken schilderen (v. 1)</a><br/>
					<a href="HKUWork/VisueelDenken/FlierNathan_huizenBlokken_V1.jpg" target="blank">stileren met kleur (v. 1)</a><br/><br/>
					<p><i>5 apr 2016 - Raf Croonen:</i></p>
					<a href="HKUWork/VisueelDenken/FlierNathan_schatkaart_V1.JPG" target="blank">schatkaart (v. 1)</a><br/>
					<a href="HKUWork/VisueelDenken/FlierNathan_kinetischeKeten_V1.JPG" target="blank">kinetische keten (v. 1)</a><br/><br/>
					<p><i>24 juni 2016 - Stephan Duquesnoy:</i></p>
					<a href="HKUWork/VisueelDenken/FlierNathan_stilleven1_V1.JPG" target="blank">stilleven 1 (v. 1)</a><br/>
					<a href="HKUWork/VisueelDenken/FlierNathan_stilleven2_V1.jpg" target="blank">stilleven 2 (v. 1)</a><br/>
					<a href="HKUWork/VisueelDenken/FlierNathan_stilleven3_V1.JPG" target="blank">stilleven 3 - snel tekenen (v. 1)</a><br/>
					<a href="HKUWork/VisueelDenken/FlierNathan_stilleven4_V1.jpg" target="blank">stilleven 4 - denken in vlakken (v. 1)</a><br/>
					<a href="HKUWork/VisueelDenken/FlierNathan_man_V1.JPG" target="blank">naaktmodel man (v. 1)</a><br/>
					<a href="HKUWork/VisueelDenken/FlierNathan_vrouw_V1.JPG" target="blank">naaktmodel vrouw (v. 1)</a><br/>
				</section>
				<h2>ZMC:</h2>
				<section class="container">
					<p><i>20 okt 2016 - Wendelien Koop:</i></p>	
					<a href="HKUWork/ZMC/FlierNathan_ZMCLog_v1.pdf" target="blank">ZMC log (v. 1)</a><br/><br/>
					<p><i>25 okt 2016 - Wendelien Koop:</i></p>	
					<a href="HKUWork/ZMC/FlierNathan_ZMCLog_v2.pdf" target="blank">ZMC log (v. 2)</a><br/><br/>
					<p><i>18 jan 2017 - Wendelien Koop:</i></p>	
					<a href="HKUWork/ZMC/FlierNathan_ZMCEindopdracht_v1.pdf" target="blank">eindopdracht (v. 1)</a><br/><br/>
					<p><i>10 maa 2017 - Wendelien Koop:</i></p>	
					<a href="HKUWork/ZMC/FlierNathan_herkansingSMART_v1.pdf" target="blank">herkansing SMART (v. 1)</a><br/><br/>
					<p><i>15 juni 2017 - Suzanne de Heus:</i></p>	
					<a href="HKUWork/ZMC/FlierNathan_ZMC2Eindopdracht_v1.pdf" target="blank">eindopdracht2 (v. 1)</a><br/>
				</section>
				<h2>Look & Inspire:</h2>
				<section class="container">
					<p><i>19 okt 2016 - Irene Peer:</i></p>					
					<a href="HKUWork/Look!Inspire/FlierNathan_ontwikkelingsDocument_v1.pdf" target="blank">collectie-ontwikkelingsDocument (v. 1)</a><br/><br/>
					<p><i>20 okt 2016 - Irene Peer:</i></p>	
					<a href="HKUWork/Look!Inspire/FlierNathan_ontwikkelingsDocument_v2.pdf" target="blank">collectie-ontwikkelingsDocument (v. 2)</a>
				</section>
				<h2>Art, Media and Me:</h2>
				<section class="container">
					<p><i>2 nov 2016 - Martin Lacet:</i></p>					
					<a href="HKUWork/AM&M/FlierNathan_MuseumOpdracht_v1.pdf" target="blank">AMM Museumopdracht Stedelijk (v. 1)</a><br/><br/>
					<p><i>19 nov 2016 - Martin Lacet:</i></p>					
					<a href="HKUWork/AM&M/FlierNathan_Zelfportret_v1.pdf" target="blank">AMM Zelfportret Stijlonderzoek (v. 1)</a><br/>
					<a href="HKUWork/AM&M/FlierNathan_ZelfportretUitwerking_v1.html" target="blank">AMM Zelfportret (v. 1)</a><br/><br/>
					<p><i>21 nov 2016 - Martin Lacet:</i></p>					
					<a href="HKUWork/AM&M/FlierNathan_Zelfportret_v2.pdf" target="blank">AMM Zelfportret Stijlonderzoek (v. 2)</a><br/><br/>
					<p><i>24 nov 2016 - John Hennequin:</i></p>					
					<a href="https://vimeo.com/192939446" target="blank">AMM mijn verantwoordelijkheid als developer (v. 1)</a>
				</section>
				<h2>Principles of Interaction Design:</h2>
				<section class="container">
					<p><i>8 nov 2016 - Norbert van Geijn:</i></p>					
					<a href="HKUWork/PrOfIntDesign/FlierNathan_EindOpdracht_v1.pdf" target="blank">Eind opdracht (v. 1)</a>
				</section>
				<h2>Project Collaberative Design</h2>
				<section class="container">
					<p><i>12 nov 2016 - Henk Fakkeldij</i></p>
					<a href="HKUWork/FlierNathan_ReflectieCollDesign_V1.pdf" target="blank">Reflectieverslag (v. 1)</a>
				</section>
				<h2>Principles of Game Design:</h2>
				<section class="container">
					<p><i>21 dec 2016 - Micah Hrehovcsik</i></p>
					<a href="HKUWork/PrOfGameDesign/FlierNathan_GameDesignNotebook_V1.pdf" target="blank">Notebook (v. 1)</a>
				</section>
				<h2>ITTT:</h2>
				<section class="container">
					<p><i>23 jan 2017 - Valentijn Muijrers</i></p>
					<a href="http://www.instructables.com/id/Jump-a-Mole-unfinished/?ALLSTEPS#intro" target="blank">instructable (v. 1)</a><br/>
					<a href="HKUWork/Arduino/FlierNathan_ReflectieArduino_V1.pdf" target="blank">ITTT reflectieverslag (v. 1)</a><br/><br/>
					<p><i>xx maa 2017 - Valentijn Muijrers</i></p>
					<a href="HKUWork/Arduino/FlierNathan_ReflectieArduino_V2.pdf" target="blank">ITTT reflectieverslag (v. 2)</a>
				</section>
				<h2>Seminar 'Ontwerpen met Impact':</h2>
				<section class="container">
					<p><i>4 feb 2017 - Robert-Jan Schravenhoff</i></p>
					<a href="HKUWork/OntwerpenMetImpact/flashback.php" target="blank">Flashback (v. 1)</a><br/>
					<a href="HKUWork/OntwerpenMetImpact/FlierNathan_OntwerpenMetImpact_V1.pdf" target="blank">Verslag (v. 1)</a><br/>
				</section>
				<h2>Project Context:</h2>
				<section class="container">
					<p><i>20 mrt 2017 - Christian Roth</i></p>
					<a href="HKUWork/Context/FlierNathan_ContextResearch_V1.pdf" target="blank">Research verslag (v. 1)</a><br/>
					<a href="https://vimeo.com/209188156" target="blank">[bijlage 1] filmpje prototype</a><br/>
					<a href="http://answers.unity3d.com/questions/882112/is-there-any-way-to-target-achromebook-with-unity.html" target="blank">[bijlage 2] unity forum</a><br/>
					<a href="HKUWork/Context/interview.pdf" target="blank">[bijlage 3] interview</a><br/>
				</section>
				<h2>Building Playful Worlds:</h2>
				<section class="container">
					<p><i>28 mrt 2017 - Valentijn Muijrers</i></p>
					<a href="HKUWork/BPW/FlierNathan_Documentatie1_V1.pdf" target="blank">Documentatie opdracht 1 (v. 1)</a><br/>
					<a href="HKUWork/BPW/WWIITanksOfOurBattle.zip" target="blank">WWII: Tanks of our Battle (v. 1)</a><br/>
					<a href="HKUWork/BPW/DeHongerwinter.zip" target="blank">De Hongerwinter(Windows) (v. 1)</a><br/>
					<a href="HKUWork/BPW/DeHongerwinter.apk" target="blank">De Hongerwinter(Android) (v. 1)</a><br/><br/>					
					<p><i>23 juni 2017 - Valentijn Muijrers</i></p>
					<a href="HKUWork/BPW/FlierNathan_Documentatie2_V1.pdf" target="blank">Documentatie opdracht 2 (v. 1)</a><br/>
					<a href="HKUWork/BPW/BPW2_Planning.pdf" target="blank">Planning opdracht 2 (v. 1)</a><br/>				
					<a href="HKUWork/BPW/BlackWolfValley.zip" target="blank">Black Wolf Valley (v. 1)</a><br/>				
					<a href="HKUWork/BPW/ProjectBlackWolfValley.zip" target="blank">Project folder (v. 1)</a><br/>					
				</section>
				<h2>3D Modeling:</h2>
				<section class="container">
					<p><i>1-4-2017 - Suus Looijen</i></p>
					<a href="HKUWork/3DModeling/FlierNathan_MayaEindOpdracht_V1.pdf" target="blank">Documentatie eindopdracht (v. 1)</a><br/><br/>
					<p><i>24-6-2017 - Suus Looijen</i></p>
					<a href="HKUWork/3DModeling/FlierNathan_EnvModEindopdracht_V1.pdf" target="blank">Documentatie environmental modeling opdracht (v. 1)</a><br/>
				</section>
				<h2>Narrative Design:</h2>
				<section class="container">
					<p><i>21-4-2017 - Sytze Schalk</i></p>
					<a href="HKUWork/NarrativeDesign\FlierNathan_OpdrachtIII_V1.pdf" target="blank">Opdracht III (v. 1)</a><br/>
					<a href="HKUWork/NarrativeDesign\FlierNathan_EindOpdracht_V1.pdf" target="blank">Eindopdracht (v. 1)</a><br/>
				</section>
				<h2>Behavioural Sciences:</h2>
				<section class="container">
					<p><i>26-5-2017 - Marilla Valente</i></p>
					<a href="HKUWork/BehavSciences\FlierNathan_SchrijfOpdracht1_V1.pdf" target="blank">Schrijfopdracht I (v. 1)</a><br/><br/>
					<p><i>13-6-2017 - Marilla Valente</i></p>
					<a href="HKUWork/BehavSciences\FlierNathan_SchrijfOpdracht2_V1.pdf" target="blank">Schrijfopdracht II (v. 1)</a><br/><br/>
					<p><i>28-6-2017 - Marilla Valente</i></p>
					<a href="HKUWork/BehavSciences\FlierNathan_SchrijfOpdracht3_V1.pdf" target="blank">Schrijfopdracht III (v. 1)</a><br/>
				</section>
				<h2>Project Vrij:</h2>
				<section class="container">
					<p><i>26-6-2017 - Wiebe Giebels</i></p>
					<a href="HKUWork/PrVrij\FlierNathan_Projectdocumentatie_V1.pdf" target="blank">Projectdocumentatie (v. 1)</a><br/>
				</section>
			</section>
	</div>
		<?php include "footer.html" ?>
</body>
</html>
