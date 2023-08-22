<div class="row">
	<?php if ($title !== "Home") : ?>
		<div class="navbar fixed-top pt-3 pb-3 pr-5 navbar-expand-lg navbar-light" style="background-color: rgba(0,0,0,0.4);">
		<?php else : ?>
			<div class="navbar fixed-top pt-3 pb-3 pr-5 navbar-expand-lg navbar-light">
			<?php endif; ?>

			<div class="col-lg-3 col-sm-3 col-md-3">
				<div class="logo col-lg-7"><a href="<?= base_url('home/index') ?>"><img id="logo" src="<?= base_url('home_assets/') ?>images/image.png"></a></div>
			</div>
			<div class="col-lg-9 col-sm-9 col-md-9">
				<nav class="float-right">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<!-- HOME NAV -->
							<?php if ($title == "Home") : ?>
								<a class="nav-item nav-link" href="<?= base_url('home/index') ?>" style="color:#4cccff;">Home</a>
							<?php else : ?>
								<a class="nav-item nav-link" href="<?= base_url('home/index') ?>">Home</a>
							<?php endif; ?>
							<!-- COLLECTION NAV -->
							<?php if ($title == "Collection") : ?>
								<a class="nav-item nav-link" href="<?= base_url('home/collection') ?>" style="color:#4cccff;">Collection</a>
							<?php else : ?>
								<a class="nav-item nav-link" href="<?= base_url('home/collection') ?>">Collection</a>
							<?php endif; ?>
							<!-- ABOUT NAV -->
							<?php if ($title == "About Us") : ?>
								<a class="nav-item nav-link" href="<?= base_url('home/about') ?>" style="color:#4cccff;">About Us</a>
							<?php else : ?>
								<a class="nav-item nav-link" href="<?= base_url('home/about') ?>">About Us</a>
							<?php endif; ?>
							<!-- CONTACT NAV -->
							<?php if ($title == "Contact") : ?>
								<a class="nav-item nav-link" href="<?= base_url('home/contact') ?>" style="color:#4cccff;">Contact</a>
							<?php else : ?>
								<a class="nav-item nav-link" href="<?= base_url('home/contact') ?>">Contact</a>
							<?php endif; ?>

							<!-- mengecek apakah user sudah login atau belum -->
							<?php
							if (isset($user['email'])) :
							?>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="40" height="40" class="rounded-circle">
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="<?= base_url('user/index'); ?>">Profile</a>
										<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" onclick="return confirm('Are you sure to logout?')">Log Out</a>
									</div>
								</li>

							<?php
							else :
							?>
								<a class="nav-item nav-link" href="<?= base_url('auth') ?>">Login</a>

							<?php
							endif;
							?>
						</div>
					</div>
				</nav>
			</div>
			</div>
		</div>