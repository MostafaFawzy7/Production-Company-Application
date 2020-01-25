<?php  get_header() ?>
<?php  wp_reset_query(); ?>
<div class="OfferFormMain">
	<div class="container">
		<div class="PageTitle"><? the_title(); ?></div>
		<form action="" class="OfferForm" method="POST">
			<? if( isset($_POST['projectname']) ) { ?>
				<?
				$id = wp_insert_post(
					array(
						'post_type'=>'offer',
						'post_title'=>$_POST['projectname'].' from '.$_POST['clientname'],
						'post_status'=>'draft'
					)
				);
				foreach ($_POST as $key => $value) {
					update_post_meta($id, $key, $value);
				}
				?>
				<div class="alert alert-success">Order sent successfully</div>
			<? } ?>
			<div class="form-data">
				<label>Project name</label>
				<input required type="text" name="projectname" />
			</div>
			<div class="form-data">
				<label>Client name</label>
				<input required type="text" name="clientname" />
			</div>
			<div class="separator"></div>
			<div class="form-data">
				<label>Rooms #</label>
				<input required type="text" name="rooms" />
			</div>
			<div class="form-data">
				<label>Number of doors</label>
				<input required type="text" name="numofdoors" />
			</div>
			<div class="form-data">
				<label>Area of windows in m2</label>
				<input required type="text" name="areawindows" />
			</div>
			<div class="form-data InputRadio">
				<label for="a_type1">
					<input id="a_type1" onclick="$('#AreaSelection').toggle();$('#DimSelection').hide();" type="radio" name="a_type" value="area" />
					Total Area (m2)
				</label>
				<label for="a_type2">
					<input id="a_type2" onclick="$('#DimSelection').toggle();$('#AreaSelection').hide();" type="radio" name="a_type" value="dim" />
					Room Dimensions
				</label>
			</div>
			<div class="RadioSelection">
				<div id="AreaSelection" style="display: none;">
					<div class="form-data">
						<label>Wall Area</label>
						<input type="text" name="wallarea" />
					</div>
					<div class="form-data">
						<label>Ceiling Area</label>
						<input type="text" name="ceilingarea" />
					</div>
				</div>
				<div id="DimSelection" style="display: none;">
					<div class="form-data">
						<label>Height</label>
						<input type="text" name="height" />
					</div>
					<div class="form-data">
						<label>Width</label>
						<input type="text" name="width" />
					</div>
					<div class="form-data">
						<label>Length</label>
						<input type="text" name="length" />
					</div>
				</div>
			</div>
			<div class="separator"></div>
			<h2 class="FormTitle">Payment Info</h2>
			<div class="form-data">
				<label>% with order</label>
				<input required type="text" name="orderpercent" />
			</div>
			<div class="form-data">
				<label>% after delivery</label>
				<input required type="text" name="deliverypercent" />
			</div>
			<div class="form-data">
				<label>% after finishing</label>
				<input required type="text" name="finishingpercent" />
			</div>
			<div class="separator"></div>
			<h2 class="FormTitle">Delivery Time</h2>
			<div class="form-data">
				<label>Delivery in weeks</label>
				<input required type="text" name="deliveryweeks" />
			</div>
			<div class="separator"></div>
			<h2 class="FormTitle">Pricing</h2>
			<div class="form-data InputRadio">
				<label for="p_type2">
					<input id="p_type2" type="radio" name="p_type" value="Standard" />
					Standard Pricing
				</label>
				<label for="p_type1">
					<input id="p_type1" type="radio" name="p_type" value="Custom" />
					Custom Pricing
				</label>
			</div>
			<div class="form-data PriceForm">
				<label>Enosh Panel</label>
				<input type="text" name="enoshpanel1" />
				<input type="text" name="enoshpanel2" />
				<em>EGP</em>
				<em>PT</em>
			</div>
			<div class="form-data PriceForm">
				<label>Enosh Wall</label>
				<input type="text" name="enoshwall1" />
				<input type="text" name="enoshwall2" />
				<em>EGP</em>
				<em>PT</em>
			</div>
			<div class="form-data PriceForm">
				<label>Enosh Ceiling</label>
				<input type="text" name="enoshceiling1" />
				<input type="text" name="enoshceiling2" />
				<em>EGP</em>
				<em>PT</em>
			</div>
			<div class="form-data PriceForm">
				<label>Enosh Ceiling Tiles</label>
				<input type="text" name="enoshceilingtiles1" />
				<input type="text" name="enoshceilingtiles2" />
				<em>EGP</em>
				<em>PT</em>
			</div>
			<div class="form-data PriceForm">
				<label>Enosh Painting</label>
				<input type="text" name="enoshpainting1" />
				<input type="text" name="enoshpainting2" />
				<em>EGP</em>
				<em>PT</em>
			</div>
			<div class="form-data PriceForm">
				<label>Acoustic Window</label>
				<input type="text" name="acousticwindow1" />
				<input type="text" name="acousticwindow2" />
				<em>EGP</em>
				<em>PT</em>
			</div>
			<div class="form-data PriceForm">
				<label>Isolation of Floor</label>
				<input type="text" name="isolationfloor1" />
				<input type="text" name="isolationfloor2" />
				<em>EGP</em>
				<em>PT</em>
			</div>
			<div class="form-data PriceForm">
				<label>Enosh Door</label>
				<input type="text" name="enoshdoor1" />
				<input type="text" name="enoshdoor2" />
				<em>EGP</em>
				<em>PT</em>
			</div>
			<div class="form-data">
				<label>Language</label>
				<select name="language">
					<option value="English">English</option>
					<option value="Arabic">Arabic</option>
				</select>
			</div>
			<button type="submit">Order now</button>
		</form>
	</div>
</div>

<?php get_footer() ?>