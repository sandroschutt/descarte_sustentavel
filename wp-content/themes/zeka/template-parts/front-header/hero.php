<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-hero  position-relative wp-block-kubio-hero__outer zeka-front-header__k__J6FPNZyUrn-outer zeka-local-259-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/hero" id="hero">
	<?php $component->printBackground(); ?><?php $component->printSeparator(); ?>
	<div class="position-relative wp-block-kubio-hero__inner zeka-front-header__k__J6FPNZyUrn-inner zeka-local-259-inner h-navigation-padding h-section-grid-container h-section-boxed-container">
		<script type='text/javascript'>
			(function () {
				// forEach polyfill
				if (!NodeList.prototype.forEach) {
					NodeList.prototype.forEach = function (callback) {
						for (var i = 0; i < this.length; i++) {
							callback.call(this, this.item(i));
						}
					}
				}
				var navigation = document.querySelector('[data-colibri-navigation-overlap="true"], .h-navigation_overlap');
				if (navigation) {
					var els = document
						.querySelectorAll('.h-navigation-padding');
					if (els.length) {
						els.forEach(function (item) {
							item.style.paddingTop = navigation.offsetHeight + "px";
						});
					}
				}
			})();
		</script>
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container zeka-front-header__k__bgnhUSaQMl-container zeka-local-260-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-0 gutters-row-v-md-2 gutters-row-3 gutters-row-v-2" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner zeka-front-header__k__bgnhUSaQMl-inner zeka-local-260-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-start justify-content-md-start justify-content-start gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-0 gutters-col-v-md-2 gutters-col-3 gutters-col-v-2">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container zeka-front-header__k__9IGHpldIpw-container zeka-local-261-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner zeka-front-header__k__9IGHpldIpw-inner zeka-local-261-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align zeka-front-header__k__9IGHpldIpw-align zeka-local-261-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
							<?php zeka_theme()->get('front-title')->render(); ?><?php zeka_theme()->get('front-subtitle')->render(); ?><?php zeka_theme()->get('buttons')->render(); ?>
						</div>
					</div>
				</div>
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container zeka-front-header__k__vJOFeGXvV-container zeka-local-270-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner zeka-front-header__k__vJOFeGXvV-inner zeka-local-270-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align zeka-front-header__k__vJOFeGXvV-align zeka-local-270-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<?php zeka_theme()->get('front-image')->render(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
