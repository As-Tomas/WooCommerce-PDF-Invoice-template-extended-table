array(25) { ["item_id"]=> int(139) ["product_id"]=> int(1589) ["variation_id"]=>
int(2738) ["name"]=> string(26) "Madingiausi aulinukai - 37" ["quantity"]=>
int(1) ["line_total"]=> string(135) "80,08 €" ["single_line_total"]=> string(135) "
80,08 €" ["line_tax"]=> string(135) "16,82 €" ["single_line_tax"]=> string(135) "
16,82 €" ["tax_rates"]=> string(4) "21 %" ["calculated_tax_rates"]=> string(4)
"21 %" ["line_subtotal"]=> string(135) "94,21 €" ["line_subtotal_tax"]=>
string(135) "19,79 €" ["ex_price"]=> string(135) "94,21 €" ["price"]=>
string(136) "114,00 €" ["order_price"]=> string(136) "114,00 €"
["ex_single_price"]=> string(135) "94,21 €" ["single_price"]=> string(136) "
114,00 €" 
["item"]=> object(WC_Order_Item_Product)#17523 (11) {
["extra_data":protected]=> array(9) { ["product_id"]=> int(0) ["variation_id"]=>
int(0) ["quantity"]=> int(1) ["tax_class"]=> string(0) "" ["subtotal"]=> int(0)
["subtotal_tax"]=> int(0) ["total"]=> int(0) ["total_tax"]=> int(0) ["taxes"]=>
array(2) { ["subtotal"]=> array(0) { } ["total"]=> array(0) { } } }
["data":protected]=> array(11) { ["order_id"]=> int(2942) ["name"]=>string(26)
"Madingiausi aulinukai - 37" ["product_id"]=> int(1589)["variation_id"]=>
int(2738) ["quantity"]=> int(1) ["tax_class"]=> string(0) ""["subtotal"]=>string(9)
"94.214876" ["subtotal_tax"]=> string(5) "19.79"["total"]=> string(9)
"80.082645" ["total_tax"]=> string(5) "16.82" ["taxes"]=>array(2) { ["total"]=>
array(1) { [1]=> string(5) "16.82" } ["subtotal"]=> array(1){ [1]=> string(5)
"19.79" } } } ["cache_group":protected]=> string(11) "order-items"
["meta_type":protected]=> string(10) "order_item"
["object_type":protected]=> string(10) "order_item" ["id":protected]=>int(139)
["changes":protected]=> array(0) { } ["object_read":protected]=>bool(true)
["default_data":protected]=> array(11) { ["order_id"]=> int(0)["name"]=>
string(0) "" ["product_id"]=> int(0) ["variation_id"]=> int(0)["quantity"]=> int(1)
["tax_class"]=> string(0) "" ["subtotal"]=> int(0)["subtotal_tax"]=> int(0)
["total"]=> int(0) ["total_tax"]=> int(0) ["taxes"]=>array(2) { ["subtotal"]=>
array(0) { } ["total"]=> array(0) { } } }["data_store":protected]=>
object(WC_Data_Store)#17524 (4) {["instance":"WC_Data_Store":private]=>
object(WC_Order_Item_Product_Data_Store)#17525 (4) {
["internal_meta_keys":protected]=> array(20) { [0]=> string(9) "_order_id"
[1]=> string(5) "_name" [2]=> string(11) "_product_id" [3]=> string(13)
"_variation_id" [4]=> string(9) "_quantity" [5]=> string(10) "_tax_class" [6]=>
string(9) "_subtotal" [7]=> string(13) "_subtotal_tax" [8]=> string(6) "_total"
[9]=> string(10) "_total_tax" [10]=> string(6) "_taxes" [11]=> string(11)
"_product_id" [12]=> string(13) "_variation_id" [13]=> string(4) "_qty" [14]=>
string(10) "_tax_class" [15]=> string(14) "_line_subtotal" [16]=> string(18)
"_line_subtotal_tax" [17]=> string(11) "_line_total" [18]=> string(9) "_line_tax"
[19]=> string(14) "_line_tax_data" } ["meta_type":protected]=> string(10)
"order_item" ["object_id_field_for_meta":protected]=> string(13)
"order_item_id" ["must_exist_meta_keys":protected]=> array(0) { } }
["stores":"WC_Data_Store":private]=> array(40) { ["coupon"]=> string(24)
"WC_Coupon_Data_Store_CPT" ["customer"]=> string(22)
"WC_Customer_Data_Store" ["customer-download"]=> string(31)
"WC_Customer_Download_Data_Store" ["customer-download-log"]=>
string(35) "WC_Customer_Download_Log_Data_Store" ["customersession"]=> string(30) "WC_Customer_Data_Store_Session" ["order"]=>
string(23) "WC_Order_Data_Store_CPT" ["order-refund"]=> string(30)
"WC_Order_Refund_Data_Store_CPT" ["order-item"]=> string(24)
"WC_Order_Item_Data_Store" ["order-item-coupon"]=> string(31)
"WC_Order_Item_Coupon_Data_Store" ["order-item-fee"]=> string(28)
"WC_Order_Item_Fee_Data_Store" ["order-item-product"]=> string(32)
"WC_Order_Item_Product_Data_Store" ["order-item-shipping"]=> string(33)
"WC_Order_Item_Shipping_Data_Store" ["order-item-tax"]=> string(28)
"WC_Order_Item_Tax_Data_Store" ["payment-token"]=> string(27)
"WC_Payment_Token_Data_Store" ["product"]=> string(25)
"WC_Product_Data_Store_CPT" ["product-grouped"]=> string(33)
"WC_Product_Grouped_Data_Store_CPT" ["product-variable"]=> string(34)
"WC_Product_Variable_Data_Store_CPT" ["product-variation"]=> string(35)

$b .= $item['single_line_tax'];
				//$as = "16.82 €";
				//echo strlen($as ); // rezultatas 9
				$a = str_replace("€", " ", $b); //pirma kart bandau
				$a = rtrim($a,"€");				//antra kart bandau kitaip
				$a = str_replace(",", ".", $a); //sitas suveikia
				//var_dump($a);					//pirmas dumpas
				$var = (double)filter_var($a, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

				$c = preg_replace('#^([-]*[0-9\.,\' ]+?)((\.|,){1}([0-9-]{1,3}))*$#e', "str_replace(array('€','.', ',', \"'\", ' '), '', '\\1') . '.\\4'", $a);
				var_dump($c);					//antras dumpas

				//var_dump($item['item']);
				var_dump($item['item']['total_tax']);
				
				echo  $item['item']['total_tax'] * 1; 

                //line_subtotal_tax






<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php do_action( 'wpo_wcpdf_before_document', $this->get_type(), $this->order ); ?>

<table class="head container">
	<tr>
		<td class="header">
		<?php
		if ( $this->has_header_logo() ) {
			$this->header_logo();
		} else {
			echo $this->get_title();
		}
		?>
		</td>
		<td class="shop-info">
			<?php do_action( 'wpo_wcpdf_before_shop_name', $this->get_type(), $this->order ); ?>
			<div class="shop-name"><h3><?php $this->shop_name(); ?></h3></div>
			<?php do_action( 'wpo_wcpdf_after_shop_name', $this->get_type(), $this->order ); ?>
			<?php do_action( 'wpo_wcpdf_before_shop_address', $this->get_type(), $this->order ); ?>
			<div class="shop-address"><?php $this->shop_address(); ?></div>
			<?php do_action( 'wpo_wcpdf_after_shop_address', $this->get_type(), $this->order ); ?>
		</td>
	</tr>
</table>

<h1 class="document-type-label">
	<?php if ( $this->has_header_logo() ) echo $this->get_title(); ?>
</h1>

<?php do_action( 'wpo_wcpdf_after_document_label', $this->get_type(), $this->order ); ?>

<table class="order-data-addresses">
	<tr>
		<td class="address billing-address">
			<!-- <h3><?php _e( 'Billing Address:', 'woocommerce-pdf-invoices-packing-slips' ); ?></h3> -->
			<?php do_action( 'wpo_wcpdf_before_billing_address', $this->get_type(), $this->order ); ?>
			<?php $this->billing_address(); ?>
			<?php do_action( 'wpo_wcpdf_after_billing_address', $this->get_type(), $this->order ); ?>
			<?php if ( isset( $this->settings['display_email'] ) ) : ?>
				<div class="billing-email"><?php $this->billing_email(); ?></div>
			<?php endif; ?>
			<?php if ( isset( $this->settings['display_phone'] ) ) : ?>
				<div class="billing-phone"><?php $this->billing_phone(); ?></div>
			<?php endif; ?>
		</td>
		<td class="address shipping-address">
			<?php if ( $this->show_shipping_address() ) : ?>
				<h3><?php _e( 'Ship To:', 'woocommerce-pdf-invoices-packing-slips' ); ?></h3>
				<?php do_action( 'wpo_wcpdf_before_shipping_address', $this->get_type(), $this->order ); ?>
				<?php $this->shipping_address(); ?>
				<?php do_action( 'wpo_wcpdf_after_shipping_address', $this->get_type(), $this->order ); ?>
				<?php if ( isset( $this->settings['display_phone'] ) ) : ?>
					<div class="shipping-phone"><?php $this->shipping_phone(); ?></div>
				<?php endif; ?>
			<?php endif; ?>
		</td>
		<td class="order-data">
			<table>
				<?php do_action( 'wpo_wcpdf_before_order_data', $this->get_type(), $this->order ); ?>
				<?php if ( isset( $this->settings['display_number'] ) ) : ?>
					<tr class="invoice-number">
						<th><?php echo $this->get_number_title(); ?></th>
						<td><?php $this->invoice_number(); ?></td>
					</tr>
				<?php endif; ?>
				<?php if ( isset( $this->settings['display_date'] ) ) : ?>
					<tr class="invoice-date">
						<th><?php echo $this->get_date_title(); ?></th>
						<td><?php $this->invoice_date(); ?></td>
					</tr>
				<?php endif; ?>
				<tr class="order-number">
					<th><?php _e( 'Order Number:', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
					<td><?php $this->order_number(); ?></td>
				</tr>
				<tr class="order-date">
					<th><?php _e( 'Order Date:', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
					<td><?php $this->order_date(); ?></td>
				</tr>
				<tr class="payment-method">
					<th><?php _e( 'Payment Method:', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
					<td><?php $this->payment_method(); ?></td>
				</tr>
				<?php do_action( 'wpo_wcpdf_after_order_data', $this->get_type(), $this->order ); ?>
			</table>			
		</td>
	</tr>
</table>

<?php do_action( 'wpo_wcpdf_before_order_details', $this->get_type(), $this->order ); ?>

<table class="order-details">
	<thead>
		<tr>
			<th class="product"><?php _e( 'Product', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
			<th class="quantity"><?php _e( 'Quantity', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
			<th class="price-before-tax"><?php _e( 'Kaina be PVM', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
			<th class="discount"><?php _e( 'Nuolaida', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
			<th class="total-before-tax"><?php _e( 'Suma be PVM', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
			<th class="tax"><?php _e( 'PVM tarifas', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
			<th class="total_tax"><?php _e( 'PVM Suma', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
			<th class="total-eur"><?php _e( 'Suma su PVM', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ( $this->get_order_items() as $item_id => $item ) : ?>
			<tr class="<?php echo apply_filters( 'wpo_wcpdf_item_row_class', 'item-'.$item_id, $this->get_type(), $this->order, $item_id ); ?>">
				<td class="product">
					<?php $description_label = __( 'Description', 'woocommerce-pdf-invoices-packing-slips' ); // registering alternate label translation ?>
					<span class="item-name"><?php echo $item['name']; ?></span>
					<?php do_action( 'wpo_wcpdf_before_item_meta', $this->get_type(), $item, $this->order  ); ?>
					<span class="item-meta"><?php echo $item['meta']; ?></span>
					<dl class="meta">
						<?php $description_label = __( 'SKU', 'woocommerce-pdf-invoices-packing-slips' ); // registering alternate label translation ?>
						<?php if ( ! empty( $item['sku'] ) ) : ?><dt class="sku"><?php _e( 'SKU:', 'woocommerce-pdf-invoices-packing-slips' ); ?></dt><dd class="sku"><?php echo $item['sku']; ?></dd><?php endif; ?>
						<?php if ( ! empty( $item['weight'] ) ) : ?><dt class="weight"><?php _e( 'Weight:', 'woocommerce-pdf-invoices-packing-slips' ); ?></dt><dd class="weight"><?php echo $item['weight']; ?><?php echo get_option( 'woocommerce_weight_unit' ); ?></dd><?php endif; ?>
					</dl>
					<?php do_action( 'wpo_wcpdf_after_item_meta', $this->get_type(), $item, $this->order  ); ?>
				</td>
				<td class="quantity"><?php echo $item['quantity']; ?></td>
				<td class="price-before-tax"><?php echo $item['ex_single_price']; ?></td>
				<td class="discount"><?php echo  $item['item']['line_subtotal'] - $item['item']['line_total']; 
				echo " €";
				?></td>
				<td class="total-before-tax"><?php echo $item['line_total']; ?></td>
				<td class="tax"><?php echo $item['tax_rates']; ?></td>
				<td class="total_tax"><?php	echo  $item['item']['total_tax'] * $item['quantity']; 
				echo " €";
				?></td>
				<td class="total-eur"><?php echo $item['order_price']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
	<tfoot>
		<tr class="no-borders">
			<td class="no-borders">
				<div class="document-notes">
					<?php do_action( 'wpo_wcpdf_before_document_notes', $this->get_type(), $this->order ); ?>
					<?php if ( $this->get_document_notes() ) : ?>
						<h3><?php _e( 'Notes', 'woocommerce-pdf-invoices-packing-slips' ); ?></h3>
						<?php $this->document_notes(); ?>
					<?php endif; ?>
					<?php do_action( 'wpo_wcpdf_after_document_notes', $this->get_type(), $this->order ); ?>
				</div>
				<div class="customer-notes">
					<?php do_action( 'wpo_wcpdf_before_customer_notes', $this->get_type(), $this->order ); ?>
					<?php if ( $this->get_shipping_notes() ) : ?>
						<h3><?php _e( 'Customer Notes', 'woocommerce-pdf-invoices-packing-slips' ); ?></h3>
						<?php $this->shipping_notes(); ?>
					<?php endif; ?>
					<?php do_action( 'wpo_wcpdf_after_customer_notes', $this->get_type(), $this->order ); ?>
				</div>				
			</td>
			
			<td class="no-borders" colspan="2">
				<table class="totals">
					<tfoot>
						<?php foreach ( $this->get_woocommerce_totals() as $key => $total ) : ?>
							<tr class="<?php echo $key; ?>">
								<th class="description"><?php echo $total['label']; ?></th>
								<td class="price"><span class="totals-price"><?php echo $total['value']; 
								
								//var_dump($total);
								
								?></span></td>
							</tr>
						<?php endforeach; ?>
					</tfoot>
				</table>
			</td>
		</tr>
	</tfoot>
</table>

<div class="bottom-spacer"></div>

<?php do_action( 'wpo_wcpdf_after_order_details', $this->get_type(), $this->order ); ?>

<?php if ( $this->get_footer() ) : ?>
	<div id="footer">
		<!-- hook available: wpo_wcpdf_before_footer -->
		<?php $this->footer(); ?>
		<!-- hook available: wpo_wcpdf_after_footer -->
	</div><!-- #letter-footer -->
<?php endif; ?>

<?php do_action( 'wpo_wcpdf_after_document', $this->get_type(), $this->order ); ?>
