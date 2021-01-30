<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2016-2021
 */

$enc = $this->encoder();


?>
<?php $this->block()->start( 'jqadm_content' ); ?>
<div class="dashboard container-fluid">
	<nav class="main-navbar col-lg-12">
		<span class="navbar-brand">
			<?= $enc->html( $this->translate( 'admin', 'Dashboard' ) ); ?>
			<span class="navbar-secondary">(<?= $enc->html( $this->site()->label() ); ?>)</span>
		</span>
	</nav>

	<?= $this->get( 'listBody' ); ?>
</div>
<?php $this->block()->stop(); ?>

<?= $this->render( $this->config( 'admin/jqadm/template/page', 'common/page-standard' ) ); ?>
