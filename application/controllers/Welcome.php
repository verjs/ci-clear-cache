<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function get() {
		$get_data = $this->callAPI('GET', 'merchant', false);

		$response = json_decode($get_data, true);

		echo '<pre>';
		print_r($response);

		exit;

		$errors = $response['response']['errors'];
		$data = $response['response']['data'][0];
	}

	public function split_name($name) {
	    $name = trim($name);
	    $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
	    $first_name = trim( preg_replace('#'.$last_name.'#', '', $name ) );
	    return array($first_name, $last_name);
	}

	public function array_key_first(array $array) {
        if (count($array)) {
            reset($array);
            return key($array);
        }

        return null;
    }

	public function post() {

		$json = '{"response":{"id":361684,"tracking_number":"PPzSi1wOcXaZY","state":"processing","processing_state":"created","invoice_number":null,"delivery_address":"6 Quartz Court","delivery_suburb":"Golden Grove","delivery_postcode":"5125","delivery_district_city":null,"delivery_state":"SA","delivery_date":null,"delivery_window":null,"delivery_instructions":null,"delivery_collection_point_code":null,"delivery_collection_point_name":null,"courier_delivery_instructions":null,"receiver_name":"Jesse Dowden","receiver_contact_number":null,"courier_name":null,"slug":"ppzsi1wocxazy","price":"0.0","retailer_invoice":null,"courier_job_id":null,"user_attributes":{"email":"jessedowden@hotmail.com","first_name":"Jesse","last_name":"Dowden","mobile":null},"parcel_attributes":[{"qty":1,"length":0.41,"width":0.325,"depth":0.09,"weight":3.0}],"products":[],"return":false}}';

		//$json = json_decode($json);

		echo $json->response->tracking_number;
		

		echo '<pre>';
		print_r($json);
		//echo $this->array_key_first($json);
		echo '</pre>';

		?>
		<div class="table-responsive">
				  	<table class="table table-striped table-hover">		  			
					 <thead><tr>
					<th>Customer Name</th>
					<th>Shipping Address</th>
					<th>QTY (Cartoon)</th>
					<th>Action</th>
				  </tr></thead>
				  <tbody><tr><td style="width:20%;">Blair Hallberg 
									<span class="label label-default">326818</span>
								</td><td class="small">blairous73@gmail.com - 44 William Sharp Dr, Coffs Harbour, 2450, New South Wales, Australia</td>
							  <td><input type="text" name="qty" id="qty"class="form-control input-sm" style="width:40px;" value="1"></td>
							  <td id="confirm"> 
							  <input type="hidden" name="BillName" id="orderId" value="19-00000984">
							  <input type="hidden" name="BillName" id="customerId" value="326818">
							  <input type="hidden" name="BillName" id="customer" value="Blair Hallberg">
							  <input type="hidden" name="BillName" id="CustomerEmail" value="blairous73@gmail.com">
							  <input type="hidden" name="BillName" id="street" value="44 William Sharp Dr ">
							  <input type="hidden" name="BillName" id="suburb" value="Coffs Harbour">
							  <input type="hidden" name="BillName" id="postcode" value="2450">
							  <input type="hidden" name="BillName" id="city" value="">
							  <input type="hidden" name="BillName" id="state" value="New South Wales">
							  <input type="submit" value="Push" class="btn btn-primary btn-sm" id="push">
							  </td></tr><tr><td style="width:20%;">alex freeman 
									<span class="label label-default">326819</span>
								</td><td class="small">alexjohnfreeman@hotmail.com - 35 alinga street, cabramatta west, 2166, New South Wales, Australia</td>
							  <td><input type="text" name="qty" id="qty"class="form-control input-sm" style="width:40px;" value="1"></td>
							  <td id="confirm"> 
							  <input type="hidden" name="BillName" id="orderId" value="19-00000985">
							  <input type="hidden" name="BillName" id="customerId" value="326819">
							  <input type="hidden" name="BillName" id="customer" value="alex freeman">
							  <input type="hidden" name="BillName" id="CustomerEmail" value="alexjohnfreeman@hotmail.com">
							  <input type="hidden" name="BillName" id="street" value="35 alinga street ">
							  <input type="hidden" name="BillName" id="suburb" value="cabramatta west">
							  <input type="hidden" name="BillName" id="postcode" value="2166">
							  <input type="hidden" name="BillName" id="city" value="">
							  <input type="hidden" name="BillName" id="state" value="New South Wales">
							  <input type="submit" value="Push" class="btn btn-primary btn-sm" id="push">
							  </td></tr><tr><td style="width:20%;">HUY LY 
									<span class="label label-default">326820</span>
								</td><td class="small">Tin.huy.Ly@outlook.com - 46 west lakes boulevard Albert Park, Adelaide, 5014, South Australia, Australia</td>
							  <td><input type="text" name="qty" id="qty"class="form-control input-sm" style="width:40px;" value="1"></td>
							  <td id="confirm"> 
							  <input type="hidden" name="BillName" id="orderId" value="19-00000986">
							  <input type="hidden" name="BillName" id="customerId" value="326820">
							  <input type="hidden" name="BillName" id="customer" value="HUY LY">
							  <input type="hidden" name="BillName" id="CustomerEmail" value="Tin.huy.Ly@outlook.com">
							  <input type="hidden" name="BillName" id="street" value="46 west lakes boulevard Albert Park ">
							  <input type="hidden" name="BillName" id="suburb" value="Adelaide">
							  <input type="hidden" name="BillName" id="postcode" value="5014">
							  <input type="hidden" name="BillName" id="city" value="">
							  <input type="hidden" name="BillName" id="state" value="South Australia">
							  <input type="submit" value="Push" class="btn btn-primary btn-sm" id="push">
							  </td></tr><tr><td style="width:20%;">Jesse Dowden 
									<span class="label label-default">326821</span>
								</td><td class="small">Jessedowden@hotmail.com - 6 Quartz Court, Golden Grove , 5125, South Australia, Australia</td>
							  <td><input type="text" name="qty" id="qty" class="form-control input-sm" style="width:40px;" value="1"></td>
							  <td> 
							  <input type="hidden" name="BillName" id="orderId" value="19-00000989">
							  <input type="hidden" name="BillName" id="customerId" value="326821">
							  <input type="hidden" name="BillName" id="customer" value="Jesse Dowden">
							  <input type="hidden" name="BillName" id="CustomerEmail" value="Jessedowden@hotmail.com">
							  <input type="hidden" name="BillName" id="street" value="6 Quartz Court ">
							  <input type="hidden" name="BillName" id="suburb" value="Golden Grove ">
							  <input type="hidden" name="BillName" id="postcode" value="5125">
							  <input type="hidden" name="BillName" id="city" value="">
							  <input type="hidden" name="BillName" id="state" value="South Australia">
							  <input type="submit" value="Push" class="btn btn-primary btn-sm" id="push">
							  </td></tr></tbody>
				  	</table>
				     </div>

<script src="<?php echo base_url(); ?>js/jquery-2.1.3.min.js"></script>
				<script type="text/javascript"> 
			    $(document).ready(function() {
							$(document).on("click", "#push", function () {
						   		

								

								var iOrderId = $(this).parent().find("#orderId").val();
								var iCustomerId = $(this).parent().find("#customerId").val();
								var iCustomer = $(this).parent().find("#customer").val();
								var iCustomerEmail = $(this).parent().find("#CustomerEmail").val();
								var iStreet = $(this).parent().find("#street").val();
								var iSuburb = $(this).parent().find("#suburb").val();
								var iPostcode = $(this).parent().find("#postcode").val();
								var iCity = $(this).parent().find("#city").val();
								var iState = $(this).parent().find("#state").val();
								var iQty = $(this).parent().prev().find("#qty").val() 

								var iEmail = "emeyl@gmail.com";
								var iFirst_name = "pirsneym";
								var iLast_name = "lasneym";

								$this = $(this);
								$this.val("processing") // or: this.value = "processing";  
								$this.prop('disabled', true); // no double submit ;)

						   		$.ajax({
							      type: "POST",
							      url: "<?php echo base_url(); ?>api/post",
							      data: {order_id: iOrderId, customer_id: iCustomerId, customer: iCustomer, customer_email: iCustomerEmail, street: iStreet, suburb: iSuburb, postcode: iPostcode, city: iCity, state: iState, qty: iQty} ,
				      			dataType: "json",
							      beforeSend: function()
						                {
						                   	                	
						                },
							      success: function(data) {

							        $this.val("i'm finally done!"); // pfewww, that's was hard work!
							        console.log(data.return);
							      }
							    });

						   	});

						   	return false;
				});
			</script>


		<?php

	}



}
