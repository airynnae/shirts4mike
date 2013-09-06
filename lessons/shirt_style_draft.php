			    <?php if (count($product["styles"]) > 1) { ?>
			      	<tr>
			      		<th>
			      			<input type="hidden" name="on1" value="Style">
				        	<label for="os1">Style</label>
				        </th>
				        <td>
				        	<select name="os1" id="os1">
				        	  <?php foreach ($product["styles"] as $style) { ?>
				        		<option value="<?php echo $style; ?>"><?php echo $style; ?></option>
				        	  <?php } ?>
				        	</select>
				        </td>
			      	</tr>
			    <?php } ?>