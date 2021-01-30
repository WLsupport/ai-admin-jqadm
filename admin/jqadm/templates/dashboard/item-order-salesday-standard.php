<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2016-2021
 */

$enc = $this->encoder();

?>

<div class="chart order-salesday col-xl-12">
	<div class="card">
		<div id="order-salesday-head" class="card-header header" role="tab"
			data-bs-toggle="collapse" data-target="#order-salesday-data"
			aria-expanded="true" aria-controls="order-salesday-data">
			<div class="card-tools-left">
				<div class="btn btn-card-header act-show fa"></div>
			</div>
			<span class="item-label header-label">
				<?= $enc->html( $this->translate( 'admin', 'Sales of the last 30 days' ) ); ?>
			</span>
		</div>
		<div id="order-salesday-data" class="card-block collapse show content loading" role="tabpanel"
			aria-labelledby="order-salesday-head">
		</div>
	</div>
</div>
