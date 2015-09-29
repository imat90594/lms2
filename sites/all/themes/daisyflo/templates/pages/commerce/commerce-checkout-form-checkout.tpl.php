<?php //echo kprint_r(get_defined_vars(), TRUE); 
$order = commerce_order_load(arg(1));
$product_line_item = commerce_line_item_load($order->commerce_line_items["und"][0]["line_item_id"]);
$product = commerce_product_load($product_line_item->commerce_product["und"][0]["product_id"]);

// echo kprint_r($order, TRUE);
// echo kprint_r($product_line_item, TRUE);
// echo kprint_r($product, TRUE);
// echo kprint_r($form, TRUE);
// die;

// $vars - is a variable which you want to print. 

?>

<?php $form['cart_contents']['#title'] = ""; ?>
<?php $form['customer_profile_billing']['#title'] = ""; ?>
<?php $form['commerce_payment']['#title'] = ""; ?>
<?php $form["commerce_coupon"]["coupon_code"]['#description'] ="" ?>
<?php $form["commerce_coupon"]["coupon_code"]['#attributes']['placeholder'] = t('Enter Code'); ?>
<?php $form["commerce_coupon"]["coupon_code"]['#title_display'] = 'invisible'; ?>

<?php $form['customer_profile_billing']['#attributes']['placeholder'] = t('Enter Code'); ?>
<?php $domain = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'] : "http://".$_SERVER['SERVER_NAME']; ?>

<div class="checkout">
	<?php if(!$logged_in) : ?>
<!-- 	<div class="visible-xs visible-sm no-padding-left"> -->
<!-- 		<div class="login-checkout"> -->
<!-- 			<div class="row"> -->
<!-- 				<div class="col-md-12"> -->
<!-- 					<h2>Already have an account? Login here.</h2> -->
<!-- 					<p>Please login to your DaisyFlo account to make this purchase -->
<!-- 						much faster.</p> -->
<!-- 				</div> -->
<!-- 				<div class="col-md-12"> -->
<!-- 					<div class="login-item row"> -->
<!-- 						<div class="col-md-3 col-sm-3"><span>Email</span></div> -->
<!-- 						<div class="col-md-9 col-sm-9"><input type="text" class="form-control" name="email-login-2" /></div> -->
<!-- 					</div> -->
<!-- 					<div class="login-item row"> -->
<!-- 						<div class="col-md-3 col-sm-3">Password</div> -->
<!-- 						<div class="col-md-9 col-sm-9"><input type="password" class="form-control" name="password-login-2" /></div> -->
<!-- 					</div> -->
<!-- 					<div class="login-item row"> -->
<!-- 						<div class="col-md-3 col-sm-3"></div> -->
<!-- 						<div class="col-md-9 col-sm-9"> -->
<!-- 							<button class="login-btn btn btn-secondary">LOGIN</button> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> -->
	<?php endif ?>
	
	<div class="row">
		<div class="checkout-bar col-md-12 primary-bg-color no-padding">
			<div class="col-md-3">
				<h3 class="no-margin text-tertiary">
					<strong>Checkout Details</strong>
				</h3>
			</div>
			<div class="col-md-9 no-padding hidden-xs hidden-sm">
				<img src="/sites/all/themes/daisyflo/img/theme/arrow.png" class="black-arrow" />
			</div>
		</div>
		
		<div class="cart-container">
			<div class="col-md-1">
			</div>
			<div class="col-md-10 cart-panel-holder">
				<h4>Course Selected</h4>
				<div class="cart-panel" style="background-image:url('/sites/all/themes/daisyflo/img/theme/banner1.jpg')">
					<div class="col-md-4 secondary-bg-color cart-panel-detail">
						<div class="col-md-12"><h4><?php echo $product->title?></h4></div>
						<div class="col-md-4">Instructor</div>
						<div class="col-md-8"><?php echo isset($product->field_intructor["und"][0]["value"]) ? $product->field_intructor["und"][0]["value"] : ""?></div>
						<div class="col-md-4">Access</div>
						<div class="col-md-8"><?php echo isset($product->field_access["und"][0]["value"]) ? $product->field_access["und"][0]["value"] : ""?></div>
						<div class="col-md-4">Included</div>
						<?php foreach($product->field_features["und"] as $feature):?>
							<div class="col-md-4"></div>
							<div class="col-md-8">
								<?php echo $feature["value"]?>
							</div>
						<?php endforeach?>
						
							<span class="btn btn-primary price">
							<?php echo commerce_currency_format($order->commerce_order_total['und']['0']['amount'], "USD");?>
						</span>
					</div>
					<div class="col-md-8 cart-panel-blank">
						<?php $is_hot_deal =  isset($product->field_hot_deal["und"][0]["value"]) ? $product->field_hot_deal["und"][0]["value"] : "0"?>
						<span class="btn btn-quarternary hot-deal-btn">HOT DEAL</span>
						<?php if($is_hot_deal):?>
						<span class="btn btn-quarternary hot-deal-btn">HOT DEAL</span>
						<?php endif?>
					</div>
				</div>
			</div>
			
			<div class="col-md-1">
			</div>
		</div>
		
		<div class="col-md-12 cart-summary hidden">
			<?php print render($form['cart_contents']); ?>
		</div>
		
		<div class="coupon-container col-md-12">
			<div class="col-md-12 text-center">
				<div class="col-md-2">
				</div>
				<div class="col-md-7">
					<div id="commerce-checkout-coupon-ajax-wrapper">
						<?php echo render($form["commerce_coupon"]["redeemed_coupons"])?>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-center">
				<div class="col-md-2">
				</div>
				<div class="col-md-5">
					<?php echo render($form["commerce_coupon"]["coupon_code"])?>
				</div>
				<div class="col-md-2">
					<div class="coupon-btn-container">
					<?php echo render($form["commerce_coupon"]["coupon_add"])?>
					</div>
				</div>
				<div class="col-md-offset-2 col-md-7">
					<hr class="hr-divider">
				</div>
			</div>
		</div>


		<div class="checkout-bar col-md-12 primary-bg-color no-padding">
			<div class="col-md-3">
				<h3 class="no-margin text-tertiary">
					<strong>Billing Information</strong>
				</h3>
			</div>
			<div class="col-md-9 no-padding hidden-xs hidden-sm">
				<img src="/sites/all/themes/daisyflo/img/theme/arrow.png" class="black-arrow" />
			</div>
		</div>
		
		
		<div class="col-md-12 checkout-billing-payment-container text-center">
			<div class="col-md-2">
			</div>
			<div class="col-md-7">
				<!-- Billing Block -->
				<?php print render($form['customer_profile_billing']); ?>
				<!-- Email Block -->
				<?php if(isset($form['account'])):?>
					<?php print render($form['account']); ?>
				<?php endif?>
			</div>
				<div class="col-md-offset-2 col-md-7">
					<hr class="hr-divider">
					<br><br>
				</div>
		</div>
		
		<div class="checkout-bar col-md-12 primary-bg-color no-padding">
			<div class="col-md-3">
				<h3 class="no-margin text-tertiary">
					<strong>Payment Details</strong>
				</h3>
			</div>
			<div class="col-md-9 no-padding hidden-xs hidden-sm">
				<img src="/sites/all/themes/daisyflo/img/theme/arrow.png" class="black-arrow" />
			</div>
		</div>
		
		<div class="col-md-12 payment-container">
			<div class="col-md-2">
			</div>
			<div class="col-md-7">
				 <?php $form["commerce_payment"]["payment_method"]["paypal_wps|commerce_payment_paypal_wps"]["#title"] = 
				'Paypal <img class="commerce-paypal-icon" src="'.$domain.'/sites/all/modules/commerce/modules/commerce_paypal/images/paypal.gif" alt="PayPal" title="PayPal" />' ?>
				 <?php $form["commerce_payment"]["payment_method"]["commerce_stripe|commerce_payment_commerce_stripe"]["#title"] = 
				'Credit Card <img class="commerce-paypal-icon" src="'.$domain.'/sites/all/modules/commerce/modules/commerce_paypal/images/visa.gif" alt="Visa" title="Visa" /> 
				  <img class="commerce-paypal-icon" src="'.$domain.'/sites/all/modules/commerce/modules/commerce_paypal/images/mastercard.gif" alt="Mastercard" title="Mastercard" />
				  <img class="commerce-paypal-icon" src="'.$domain.'/sites/all/modules/commerce/modules/commerce_paypal/images/amex.gif" alt="American Express" title="American Express" />
				  <img class="commerce-paypal-icon" src="'.$domain.'/sites/all/modules/commerce/modules/commerce_paypal/images/discover.gif" alt="Discover" title="Discover" />
				  <img class="commerce-paypal-icon" src="'.$domain.'/sites/all/modules/commerce/modules/commerce_paypal/images/echeck.gif" alt="eCheck" title="eCheck" />' ?>
				<?php print render($form['commerce_payment']); ?>
			</div>
			<div class="col-md-offset-2 col-md-7">
				<hr class="hr-divider">
			</div>
		</div>
		
		
		<?php if(!$logged_in) : ?>
<!-- 		<div class="col-md-6 hidden-xs hidden-sm no-padding-left no-margin-bottom-top"> -->
<!-- 			<div class="login-checkout"> -->
<!-- 				<div class="row"> -->
<!-- 					<div class="col-md-12"> -->
<!-- 						<h2>Already have an account? Login here.</h2> -->
<!-- 						<p>Please login to your DaisyFlo account to make this purchase -->
<!-- 							much faster.</p> -->
<!-- 					</div> -->
<!-- 					<div class="col-md-12"> -->
<!-- 						<div class="login-item row"> -->
<!-- 							<div class="col-md-3"><span>Email</span></div> -->
<!-- 							<div class="col-md-9"><input type="text" class="form-control" name="email-login" /></div> -->
<!-- 						</div> -->
<!-- 						<div class="login-item row"> -->
<!-- 							<div class="col-md-3">Password</div> -->
<!-- 							<div class="col-md-9"><input type="password" class="form-control" name="password-login" /></div> -->
<!-- 						</div> -->
<!-- 						<div class="login-item row"> -->
<!-- 							<div class="col-md-3"></div> -->
<!-- 							<div class="col-md-9"> -->
<!-- 								<button class="login-btn btn btn-secondary">LOGIN</button> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
		<?php endif?>
	</div>


	<div class="col-md-10">
		<div class="text-center">
			<?$form['buttons']["cancel"]["#prefix"] = "";?>
			<?php print render($form['buttons']["cancel"]); ?>
			<?php print render($form['buttons']["continue"]); ?>
			<br>
			<br>
			<br>
			<br>
		</div>
	</div>

	<div class="hidden">
		<?php  print drupal_render_children($form);?>
	</div>
</div>


