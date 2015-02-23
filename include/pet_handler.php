<?php
// 8 different scenarios!
if(isset($_REQUEST['pettraits']))
{
	if (in_array('sentient', $_REQUEST['pettraits'])){
		if (in_array('sun', $_REQUEST['pettraits'])){
			if (in_array('destruction', $_REQUEST['pettraits'])) { //123
				?>
				<h2>Clarence the Piranha Plant</h2>
				<img src="images/pplant.jpg" />
				<p>He's not vegetarian, and will be offended if you suggest he eat something within 
				the Plantae kingdom. Animalia and especially Fungi are fine, though. Will eventually 
				outgrow normal 3-dimensional sewer pipes, so use a warp pipe instead.</p>
				<?php
			} else { //12-
				?>
				<h2>Shelly the Giving Tree</h2>
				<img src="images/givetree.jpg" />
				<p>Contrary to its name, this tree has learned from depictions of its kind in children's books 
				and instead takes things you don't need anymore. Pictured: a child who no longer needs a fruit.</p>
				<?php
			}
		} else {
			if (in_array('destruction', $_REQUEST['pettraits'])) { //1-3
				?>
				<h2>Theodore the Killdozer!</h2>
				<img src="images/killdozer.jpg" />
				<p>Technically sentient thanks to a friend from outer space. Everyone knows Theodore cannot kill, 
				except for Theodore. Too heavy to hang, too big to fit in the gas chamber. Have fun!</p>
				<?php
			} else { //1--
				?>
				<h2>J. D. McGregor the Hamster</h2>
				<img src="images/jdmcgregor.jpg" />
				<p>This little guy writes mysteries. How, you ask? Well, he gets the ending first, then he writes backward.
				If you don't believe that...look, just take him before his mother eats him, all right?</p>
				<?php
			}		
		}
	} else {
		if (in_array('sun', $_REQUEST['pettraits'])){
			if (in_array('destruction', $_REQUEST['pettraits'])) { //-23
				?>
				<h2>Jack a.k.a. Plant 42</h2>
				<img src="images/plant42.jpg" />
				<p>Ensure that you have a large-enough mansion/research facility to contain Jack. Also beware of trapping police 
				squads in said mansion that might defeat Jack with hastily-brewed pesticides then make stupid puns about getting 
				to the "root" of the problem.</p>
				<?php
			} else { //-2-
				?>
				<h2>Timmy the Solar Panel</h2>
				<img src="images/solarpanel.jpg" />
				<p>Who knows what malevolence, what enormous darkness lurks within this demon cast in semiconductors? Ostensibly,
				solar power is claimed to be a boon to humanity--but the truth is that if Timmy could speak, he would instead laugh
				mercilessly as he uses the photovoltaic effect to cover the land in rivers of blood and endless pain, their tributaries
				flowing from the bodies of the innocent. Only the most valiant of heart should adopt this monstrosity that is either an 
				affront to any benevolent god or evidence for the existence of a devil.</p>
				<?php				
			}
			
		} else {
			if (in_array('destruction', $_REQUEST['pettraits'])) { //--3
				?>
				<h2>Quick Joseph, a.k.a. "Q-Joe", the St. Bernard</h2>
				<img src="images/cujo.jpg" />
				<p>A good dog who always tries to keep his owners happy. Don't forget to have him immunized!</p>
				<?php			
			}
		}	
	
	}
} else { //---
	?>
	<h2>Aquinas the Huge Rock Created by an Omnipotent Being</h2>
	<img src="images/bigrock.jpg" />
	<p>If you're so strong, then how come you can adopt a rock that you can't lift? Maybe try rolling it up that hill or something.</p>
	<?php				
}		

?>