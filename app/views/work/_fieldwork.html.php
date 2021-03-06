

<?php 
$this->title('Our Brand – Fieldwork');
$this->set(array('main_img' => $img_base . '/work/fieldwork/fw-1.jpg'));
$this->set(array('description' => 'We love our client work, but our in-house projects are also an important part of what we do. We developed our own identity with an eye on both sides of Fieldwork.'));
extract($this->data());
?>



<article class="content-item work-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>Fieldwork</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="Close-up detail of the die-cut on a stack of Fieldwork business cards." />
		</figure>
		
		<div class="intro">
			<p class="runner"><?= $description; ?></p>
			<?= $this->_render('element', 'sharing', $this->data()); ?>
		</div>
		
		<div class="details">
			<p>At Fieldwork, we make sure to keep a good balance between client work and in-house projects. We needed a visual identity flexible enough to work across anything from project proposals and invoices, through fun prints and publications, all the way to super geeky stuff like code projects and gadgets.</p>
			<p>After establishing some guiding principals about how we want to work, who we’d most like to work with, and what we want to work on, we wrote a short and simple <a href="http://madebyfieldwork.com/emt/2013/05/16/some-rules-for-making-things-our-manifesto/">manifesto</a> for Fieldwork, and collected some visual inspiration based around those ideas.</p>
			<p>Through a process of iteration, we developed the simple identity you see on this page and across the website. Then we worked on a collection of visual materials to bring the character of our company to life. It’s a work-in-progress, and always will be.</p>
		</div>
		
		
		
		
		<div class="grid">
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-logo.svg" alt="The Fieldwork logo" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-cubes.svg" alt="Pattern made up of 3D cubes, used as part of the visual language for Fieldwork" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-6.jpg" alt="A collection of stationary and packaging using the Fieldwork brand" />
				</figure>
			</div>
		
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-2.jpg" alt="The die-cut being pressed out of a Fieldwork business card by hand" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-5.jpg" alt="Close-up details of the business card cut-out and left over peices" />
				</figure>
			</div>
		
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-4.jpg" alt="Die-cut Fieldwork branded letterhead" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-7.jpg" alt="A hexagonal laser cut plywood board, with the Fieldwork logo cut out" />
				</figure>
			</div>
		
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-8.jpg" alt="Fieldwork branded poster tube" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-3.jpg" alt="Collected items with Fieldwork branding" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-12.jpg" alt="A box of Fieldwork illustrated prints" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-11.jpg" alt="A framed Fieldwork illustrated print" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-15.jpg" alt="Detail shot of a Fieldwork illustrated print" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/fieldwork/fw-16.jpg" alt="Detail shot of a Fieldwork illustrated print, showing close-up of the folds" />
				</figure>
			</div>
		
		</div>
		
		
	</div>
	
</article>