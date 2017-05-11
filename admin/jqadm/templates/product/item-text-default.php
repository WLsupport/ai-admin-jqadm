<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2015-2016
 */

$enc = $this->encoder();


?>
<div id="text" class="item-text content-block tab-pane fade" role="tabpanel" aria-labelledby="text">

	<?php foreach( (array) $this->get( 'textData/langid', [] ) as $idx => $langid ) : ?>

		<div class="group-item card">

			<div id="item-text-group-item-<?= $enc->attr( $idx ); ?>" class="card-header header collapsed" role="tab"
				data-toggle="collapse" data-target="#item-text-group-data-<?= $enc->attr( $idx ); ?>"
				aria-expanded="false" aria-controls="item-text-group-data-<?= $enc->attr( $idx ); ?>">
				<div class="card-tools-left">
					<div class="btn btn-card-header act-show fa"></div>
				</div>
				<span class="item-name-content header-label"><?= $enc->html( $this->get( 'textData/name/content/' . $idx ) ); ?></span>
				&nbsp;
				<div class="card-tools-right">
					<div class="btn btn-card-header act-delete fa"></div>
				</div>
			</div>

			<div id="item-text-group-data-<?= $enc->attr( $idx ); ?>" class="card-block collapse row"
				role="tabpanel" aria-labelledby="item-text-group-item-<?= $enc->attr( $idx ); ?>">

				<?php if( count( $this->get( 'textLanguages', [] ) ) > 1 ) : ?>
					<div class="col-xl-6">
						<div class="form-group row mandatory">
							<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'Language' ) ); ?></label>
							<div class="col-xl-8">
								<select class="form-control custom-select text-langid" name="<?= $enc->attr( $this->formparam( array( 'text', 'langid', '' ) ) ); ?>">
									<?php foreach( $this->get( 'itemLanguages', [] ) as $langItem ) : ?>
										<option value="<?= $enc->attr( $langItem->getCode() ); ?>" <?= ( $langid == $langItem->getCode() ? 'selected="selected"' : '' ) ?> >
											<?= $enc->html( $this->translate( 'client/language', $langItem->getCode() ) ); ?>
										</option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
					</div>
				<?php else : ?>
					<input class="item-name-langid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'langid', '' ) ) ); ?>" value="<?= $enc->attr( $langid ); ?>" />
				<?php endif; ?>

				<div class="col-xl-6">
					<div class="form-group row optional">
						<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'Product name' ) ); ?></label>
						<div class="col-xl-8">
							<input class="item-name-listid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'name', 'listid', '' ) ) ); ?>"
								value="<?= $enc->attr( $this->get( 'textData/name/listid/' . $idx ) ); ?>" />
							<input class="form-control item-name-content" type="text" name="<?= $enc->attr( $this->formparam( array( 'text', 'name', 'content', '' ) ) ); ?>"
								placeholder="<?= $enc->attr( $this->translate( 'admin', 'Product name' ) ); ?>"
								value="<?= $enc->attr( $this->get( 'textData/name/content/' . $idx ) ); ?>" />
						</div>
					</div>
					<div class="form-group row optional">
						<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'Short description' ) ); ?></label>
						<div class="col-xl-8">
							<input class="item-short-listid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'short', 'listid', '' ) ) ); ?>"
								value="<?= $enc->attr( $this->get( 'textData/short/listid/' . $idx ) ); ?>" />
							<textarea class="form-control item-short-content" rows="2" name="<?= $enc->attr( $this->formparam( array( 'text', 'short', 'content', '' ) ) ); ?>"
								placeholder="<?= $enc->attr( $this->translate( 'admin', 'Short description' ) ); ?>" ><?= $enc->attr( $this->get( 'textData/short/content/' . $idx ) ); ?></textarea>
						</div>
					</div>
					<div class="form-group row optional">
						<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'Long description' ) ); ?></label>
						<div class="col-xl-8">
							<input class="item-long-listid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'long', 'listid', '' ) ) ); ?>"
								value="<?= $enc->attr( $this->get( 'textData/long/listid/' . $idx ) ); ?>" />
							<textarea class="form-control htmleditor item-long-content" rows="10" name="<?= $enc->attr( $this->formparam( array( 'text', 'long', 'content', '' ) ) ); ?>"
								placeholder="<?= $enc->attr( $this->translate( 'admin', 'Long description' ) ); ?>" ><?= $enc->attr( $this->get( 'textData/long/content/' . $idx ) ); ?></textarea>
						</div>
					</div>
				</div>

				<div class="col-xl-6">
					<div class="form-group row optional">
						<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'URL segment' ) ); ?></label>
						<div class="col-xl-8">
							<input class="item-url-listid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'url', 'listid', '' ) ) ); ?>"
								value="<?= $enc->attr( $this->get( 'textData/url/listid/' . $idx ) ); ?>" />
							<input class="form-control item-url-content" type="text" name="<?= $enc->attr( $this->formparam( array( 'text', 'url', 'content', '' ) ) ); ?>"
								placeholder="<?= $enc->attr( $this->translate( 'admin', 'URL segment' ) ); ?>"
								value="<?= $enc->attr( $this->get( 'textData/url/content/' . $idx ) ); ?>" />
						</div>
					</div>
					<div class="form-group row optional">
						<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'Meta keywords' ) ); ?></label>
						<div class="col-xl-8">
							<input class="item-meta-keyword-listid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'meta-keyword', 'listid', '' ) ) ); ?>"
								value="<?= $enc->attr( $this->get( 'textData/meta-keyword/listid/' . $idx ) ); ?>" />
							<textarea class="form-control item-meta-keyword-content" rows="2" name="<?= $enc->attr( $this->formparam( array( 'text', 'meta-keyword', 'content', '' ) ) ); ?>"
								placeholder="<?= $enc->attr( $this->translate( 'admin', 'Meta keywords' ) ); ?>" ><?= $enc->attr( $this->get( 'textData/meta-keyword/content/' . $idx ) ); ?></textarea>
						</div>
					</div>
					<div class="form-group row optional">
						<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'Meta description' ) ); ?></label>
						<div class="col-xl-8">
							<input class="item-meta-description-listid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'meta-description', 'listid', '' ) ) ); ?>"
								value="<?= $enc->attr( $this->get( 'textData/meta-description/listid/' . $idx ) ); ?>" />
							<textarea class="form-control item-meta-description-content" rows="10" name="<?= $enc->attr( $this->formparam( array( 'text', 'meta-description', 'content', '' ) ) ); ?>"
								placeholder="<?= $enc->attr( $this->translate( 'admin', 'Meta description' ) ); ?>"><?= $enc->attr( $this->get( 'textData/meta-description/content/' . $idx ) ); ?></textarea>
						</div>
					</div>
				</div>

			</div>
		</div>

	<?php endforeach; ?>

	<div class="group-item card prototype">

		<div id="item-text-group-item-" class="card-header header" role="tab"
			data-toggle="collapse" data-target="#item-text-group-data-"
			aria-expanded="true" aria-controls="item-text-group-data-">
			<div class="card-tools-left">
				<div class="btn btn-card-header act-show fa"></div>
			</div>
			<span class="item-name-content header-label"></span>
			&nbsp;
			<div class="card-tools-right">
				<div class="btn btn-card-header act-delete fa"></div>
			</div>
		</div>

		<div class="card-block collapse show row" role="tabpanel">

			<div class="col-xl-6">
				<div class="form-group row optional">
					<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'Product name' ) ); ?></label>
					<div class="col-xl-8">
						<input class="item-name-listid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'name', 'listid', '' ) ) ); ?>" value="" disabled="disabled" />
						<input class="form-control item-name-content" type="text" name="<?= $enc->attr( $this->formparam( array( 'text', 'name', 'content', '' ) ) ); ?>"
							placeholder="<?= $enc->attr( $this->translate( 'admin', 'Product name' ) ); ?>" disabled="disabled" />
					</div>
				</div>
				<div class="form-group row optional">
					<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'Short description' ) ); ?></label>
					<div class="col-xl-8">
						<input class="item-short-listid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'short', 'listid', '' ) ) ); ?>" value="" disabled="disabled" />
						<textarea class="form-control item-short-content" rows="2" name="<?= $enc->attr( $this->formparam( array( 'text', 'short', 'content', '' ) ) ); ?>"
							placeholder="<?= $enc->attr( $this->translate( 'admin', 'Short description' ) ); ?>" disabled="disabled" ></textarea>
					</div>
				</div>
				<div class="form-group row optional">
					<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'Long description' ) ); ?></label>
					<div class="col-xl-8">
						<input class="item-long-listid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'long', 'listid', '' ) ) ); ?>" value="" disabled="disabled" />
						<textarea class="form-control htmleditor-prototype item-long-content" rows="6" name="<?= $enc->attr( $this->formparam( array( 'text', 'long', 'content', '' ) ) ); ?>"
							placeholder="<?= $enc->attr( $this->translate( 'admin', 'Long description' ) ); ?>" disabled="disabled" ></textarea>
					</div>
				</div>
			</div>

			<div class="col-xl-6">
				<div class="form-group row optional">
					<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'URL segment' ) ); ?></label>
					<div class="col-xl-8">
						<input class="item-url-listid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'url', 'listid', '' ) ) ); ?>" value="" disabled="disabled" />
						<input class="form-control item-url-content" type="text" name="<?= $enc->attr( $this->formparam( array( 'text', 'url', 'content', '' ) ) ); ?>"
							placeholder="<?= $enc->attr( $this->translate( 'admin', 'URL segment' ) ); ?>" value="" disabled="disabled" />
					</div>
				</div>
				<div class="form-group row optional">
					<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'Meta keywords' ) ); ?></label>
					<div class="col-xl-8">
						<input class="item-meta-keyword-listid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'meta-keyword', 'listid', '' ) ) ); ?>" value="" disabled="disabled" />
						<textarea class="form-control item-meta-keyword-content" rows="2" name="<?= $enc->attr( $this->formparam( array( 'text', 'meta-keyword', 'content', '' ) ) ); ?>"
							placeholder="<?= $enc->attr( $this->translate( 'admin', 'Meta keywords' ) ); ?>" disabled="disabled" ></textarea>
					</div>
				</div>
				<div class="form-group row optional">
					<label class="col-xl-4 form-control-label"><?= $enc->html( $this->translate( 'admin', 'Meta description' ) ); ?></label>
					<div class="col-xl-8">
						<input class="item-meta-description-listid" type="hidden" name="<?= $enc->attr( $this->formparam( array( 'text', 'meta-description', 'listid', '' ) ) ); ?>" value="" disabled="disabled" />
						<textarea class="form-control item-meta-description-content" rows="6" name="<?= $enc->attr( $this->formparam( array( 'text', 'meta-description', 'content', '' ) ) ); ?>"
							placeholder="<?= $enc->attr( $this->translate( 'admin', 'Meta description' ) ); ?>" disabled="disabled" ></textarea>
					</div>
				</div>
			</div>

		</div>

	</div>

	<?= $this->get( 'textBody' ); ?>

	<div class="card-tools-more">
		<div class="btn btn-card-more act-add fa"></div>
	</div>
</div>
