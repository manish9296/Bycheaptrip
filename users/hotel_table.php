<!-- /templates/cart.liquid -->
{% comment %}

For info on test orders:
- General http://docs.shopify.com/manual/your-store/orders/test-orders
- Shopify Payments - http://docs.shopify.com/manual/more/shopify-payments/testing-shopify-payments

{% endcomment %}
<div class="wrap-bread-crumb breadcrumb_collection2">
	<div class="text-center bg-breadcrumb" style="background-image : url({% if section.settings.bg_breadcrumb != blank %}{{ section.settings.bg_breadcrumb | image_url }} {% else %}//placehold.it/1920x510 {% endif %})">
		<div class="title-page">

			<h2 class="">{{ section.settings.page_title }}</h2>

		</div>
		{% include 'breadcrumb' %}
	</div>
</div>
<section class="page-cart">

	<div class="content-pages">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="content-about content-cart-page">

						{% if cart.item_count > 0 %}
						<form action="/cart" method="post" novalidate>
							<div class="table-responsive">
								<table class="shop_table table--responsive cart table">
									<thead>
										<tr class="cart-title">

											<th colspan="2" class="product-thumbnail"> {{ 'cart.label.product' | t }}</th>
											<th class="product-price">{{ 'cart.label.price' | t }}</th>
											<th class="product-quantity">{{ 'cart.label.quantity' | t }}</th>
											<th class="product-subtotal">{{ 'cart.label.total' | t }}</th>
											<th class="product-remove">&nbsp;</th>
										</tr>
									</thead>

									{% if cart.item_count > 0 %}
									<form action="/cart" method="post" novalidate>
										<tbody>
											{% for item in cart.items %}
											<tr class="cart_item">

												<td data-label="Product Name" class="product-thumbnail">
													<a href="{{ item.url }}"><img loading="lazy" width="" height="" src="{{ item | image_url: width: 100, height: 100 }}" alt="{{ item.title | escape }}" /></a>
												</td>
												<td class="product-name-thumb" data-title="Product">

													<a href="{{ item.url }}">{{ item.product.title }}</a>
													{% unless item.variant.title contains 'Default' %}
													<small style="display: block; color: #959595;">{{ item.variant.title }}</small>
													{% endunless %}
													{% if settings.cart_vendor_enable %}
													<p>{{ item.vendor }}</p>
													{% endif %}

												</td>

												<td data-label="Product Price" class="product-price" data-title="Price">
													<span class="amount">{{ item.price | money }}</span>
												</td>
												<td data-label="Quantity" class="product-quantity" data-title="Quantity">
													<input type="number" name="updates[]" id="updates_{{ item.id }}" value="{{ item.quantity }}" min="0">
												</td>
												<td data-label="Sub Total" class="product-subtotal" data-title="Total">
													<span class="amount">{{ item.line_price | money }}</span>


												</td>

												<td class="product-remove">
													<a class="remove set-12-svg" href="/cart/change?line={{ forloop.index }}&amp;quantity=0"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 298.667 298.667" style="enable-background:new 0 0 298.667 298.667;" xml:space="preserve">
															<g>
																<g>
																	<polygon points="298.667,30.187 268.48,0 149.333,119.147 30.187,0 0,30.187 119.147,149.333 0,268.48 30.187,298.667     149.333,179.52 268.48,298.667 298.667,268.48 179.52,149.333   "></polygon>
																</g>
															</g>
														</svg></a>
												</td>
											</tr>
											{% endfor %}

										</tbody>
									</form>
									{% endif %}
								</table>
							</div>

							<div class="cart_totals ">
								<div class="cart-update">
									<input type="submit" value="{{ 'cart.general.update' | t }}" name="update_cart" class="button bg-color">
								</div>
								<div class="continue-shopping1">
									<a href="/collections/all">{{ 'cart.general.continue' | t }}</a>
								</div>

								<div class="cart-check">

									<h2 class="cart-title">{{ 'cart.label.cart_total' | t }}</h2>
									<table class="total-checkout">
										<tbody>
											<tr>
												<th class="cart-label"><span>{{ 'cart.label.total' | t }}</span></th>
												<td class="cart-amount"><span><strong><span class="amount">{{ cart.total_price | money }}</span></strong> </span></td>
											</tr>
										</tbody>
									</table>




									<div class="wc-proceed-to-checkout clearfix">
										<a class="checkout-button button alt wc-forward bg-color" href="/checkout">{{ 'cart.general.checkout' | t }}</a>
									</div>
								</div>
							</div>
						</form>
						{% else %}
						{% comment %}
						The cart is empty
						{% endcomment %}
						<p>{{ 'cart.general.empty' | t }}</p>
						<p>{{ 'cart.general.continue_browsing_html' | t }}</p>
						{% endif %}
					</div>
				</div>
				<div class="col-md-4">
					<div class="pickuplater">
						<h3>Delivery / Pickup Date: </h3>
						<form action="/cart" method="post">
							<div class="col-md-12 col-lg-12">
								<div class="form-group"><label for="date">Delivery / Pickup Date:</label> <input required="" type="date"></div>
								<div class="order-summary">
									<h6>choose Delivery or Pickup on next page</h6>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="form-group"><label for="time">Delivery / Pickup Time slot:</label><select id="myDropdown">
										<option value="option1">Please select a time slot...</option>
										<option value="option2">10:00 AM - 12:00 PM</option>
										<option value="option3">12:00 PM - 2:00 PM</option>
										<option value="option4">2:00 PM - 4:00 PM</option>
										<option value="option4">4:00 PM - 6:00 PM</option>
										<option value="option4">6:00 PM - 8:00 PM</option>
										<option value="option4">8:00 PM - 10:00 PM</option>
										<option value="option4">10:00 PM - 11:59 PM</option>
									</select></div>
								<div class="order-summary">
									<h6>Want an even faster delivery? If you don't see the time slot you want available, don't worry. we got you with our express delivery option! Call us directly at +91 98102 22150 and we will rush your order.</h6>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="form-group"><label for="message">Message on cake/delivery instructions</label> <textarea cols="50" rows="4" name="message" id="message"></textarea></div>
							</div>
							<div class="row">
								<div class="col-md-6 col-lg-6 col-sm-6 col-xl-6 text-start">
									<p>Subtotal ₹5,300</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12"><button type="submit">CheckOut</button>
									<p class="CheckOutp">Shipping, taxes, and discount codes calculated at CheckOut.</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Content Pages -->
</section>



{% schema %}
{
"name": "Cart Page",
"settings": [
{
"type": "image_picker",
"id": "bg_breadcrumb",
"info": "1920 x 510px recommended",
"label": "Background Breadcumb"
},
{
"type": "text",
"id": "page_title",
"info": "Page Title",
"label": "Cart"
}
]
}
{% endschema %}

{% stylesheet %}
{% endstylesheet %}

{% javascript %}
{% endjavascript %}