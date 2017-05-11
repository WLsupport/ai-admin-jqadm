<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2016
 */

$selected = function( $key, $code ) {
	return ( $key == $code ? 'selected="selected"' : '' );
};

$enc = $this->encoder();

?>
<div class="col-xl-6 content-block item-characteristic-property">
	<table class="property-list table table-default">
		<thead>
			<tr>
				<th colspan="3"><?= $enc->html( $this->translate( 'admin', 'Properties' ) ); ?></th>
				<th class="actions"><div class="btn act-add fa"></div></th>
			</tr>
		</thead>
		<tbody>

			<?php foreach( $this->get( 'propertyData/product.property.id', [] ) as $idx => $id ) : ?>
				<tr>
					<td class="property-type">
						<input class="item-id" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'characteristic', 'property', 'product.property.id', '' ) ) ); ?>" value="<?= $enc->attr( $id ); ?>" />
						<select class="form-control c-select item-typeid" name="<?= $enc->attr( $this->formparam( array( 'characteristic', 'property', 'product.property.typeid', '' ) ) ); ?>">
							<?php foreach( $this->get( 'propertyTypes', [] ) as $typeid => $item ) : ?>
								<option value="<?= $enc->attr( $typeid ); ?>" <?= $selected( $this->get( 'propertyData/product.property.typeid/' . $idx ), $typeid ); ?> ><?= $enc->html( $item->getLabel() ); ?></option>
							<?php endforeach; ?>
						</select>
					</td>
					<td class="property-language">
						<select class="custom-select item-languageid" name="<?= $enc->attr( $this->formparam( array( 'characteristic', 'property', 'product.property.languageid', '' ) ) ); ?>">
							<?php $lang = $this->get( 'propertyData/product.property.languageid/' . $idx ); ?>

							<option value="" <?= ( $lang == '' ? 'selected="selected"' : '' ) ?> >
								<?= $enc->html( $this->translate( 'admin', 'All' ) ); ?>
							</option>

							<?php foreach( $this->get( 'itemLanguages', [] ) as $langId => $langItem ) : ?>
								<option value="<?= $enc->attr( $langId ); ?>" <?= ( $lang == $langId ? 'selected="selected"' : '' ) ?> >
									<?= $enc->html( $langId ); ?>
								</option>
							<?php endforeach; ?>
						</select>
					</td>
					<td class="property-value">
						<input class="form-control item-value" type="text" name="<?= $enc->attr( $this->formparam( array( 'characteristic', 'property', 'product.property.value', '' ) ) ); ?>"
							placeholder="<?= $enc->attr( $this->translate( 'admin', 'Property value (required)' ) ); ?>"
							value="<?= $enc->attr( $this->get( 'propertyData/product.property.value/' . $idx ) ); ?>" />
					</td>
					<td class="actions"><div class="btn act-delete fa"></div></td>
				</tr>
			<?php endforeach; ?>

			<tr class="prototype">
				<td class="property-type">
					<input class="item-id" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'characteristic', 'property', 'product.property.id', '' ) ) ); ?>" value="" disabled="disabled" />
					<select class="form-control c-select item-typeid" name="<?= $enc->attr( $this->formparam( array( 'characteristic', 'property', 'product.property.typeid', '' ) ) ); ?>" disabled="disabled">
						<?php foreach( $this->get( 'propertyTypes', [] ) as $typeid => $item ) : ?>
							<option value="<?= $enc->attr( $typeid ); ?>" ><?= $enc->html( $item->getLabel() ); ?></option>
						<?php endforeach; ?>
					</select>
				</td>
				<td class="property-language">
					<select class="custom-select item-languageid" name="<?= $enc->attr( $this->formparam( array( 'characteristic', 'property', 'product.property.languageid', '' ) ) ); ?>" disabled="disabled">
						<option value="" selected="selected">
							<?= $enc->html( $this->translate( 'admin', 'All' ) ); ?>
						</option>

						<?php foreach( $this->get( 'itemLanguages', [] ) as $langId => $langItem ) : ?>
							<option value="<?= $enc->attr( $langId ); ?>">
								<?= $enc->html( $langId ); ?>
							</option>
						<?php endforeach; ?>
					</select>
				</td>
				<td class="property-value">
					<input class="form-control item-value" type="text" name="<?= $enc->attr( $this->formparam( array( 'characteristic', 'property', 'product.property.value', '' ) ) ); ?>"
						placeholder="<?= $enc->attr( $this->translate( 'admin', 'Property value (required)' ) ); ?>" value="" disabled="disabled" />
				</td>
				<td class="actions"><div class="btn act-delete fa"></div></td>
			</tr>
		</tbody>
	</table>

	<?= $this->get( 'propertyBody' ); ?>
</div>
