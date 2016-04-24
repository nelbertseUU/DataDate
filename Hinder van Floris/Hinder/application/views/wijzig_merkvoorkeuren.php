<div class="content">
    <h1>Wijzig Merkvoorkeuren</h1>
    <hr width="80%">      
        <?php echo form_open('Login/merkform', $attributes); ?>
        <div class="naast_elkaar margin_top_30">
            <div class="onder_elkaar width_20">
                <div class="margin_bottom_20">
                    <label class="pointer label_hover" for="merk1"><input type="checkbox" name="merkcheck[]" id="merk1" value="Durex"<?php echo set_checkbox('merkcheck[]', 'Durex'); if(in_array('Durex', $merkVoorkeuren)){echo 'checked';} ?>>Durex</label>
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover" for="merk2"><input type="checkbox" name="merkcheck[]" id="merk2" value="Heineken"<?php echo set_checkbox('merkcheck[]', 'Heineken'); if(in_array('Heineken', $merkVoorkeuren)){echo 'checked';} ?>>Heineken</label>
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk3"><input type="checkbox" name="merkcheck[]" id="merk3" value="Microsoft"<?php echo set_checkbox('merkcheck[]', 'Microsoft'); if(in_array('Microsoft', $merkVoorkeuren)){echo 'checked';} ?>>Microsoft</label>             
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk4"><input type="checkbox" name="merkcheck[]" id="merk4" value="BMW"<?php echo set_checkbox('merkcheck[]', 'BMW'); if(in_array('BMW', $merkVoorkeuren)){echo 'checked';} ?>>BMW</label>
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover" for="merk5"><input type="checkbox" name="merkcheck[]" id="merk5" value="McDonalds"<?php echo set_checkbox('merkcheck[]', 'McDonalds'); if(in_array('McDonalds', $merkVoorkeuren)){echo 'checked';} ?>>McDonalds</label>             
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk6"><input type="checkbox" name="merkcheck[]" id="merk6" value="Apple"<?php echo set_checkbox('merkcheck[]', 'Apple'); if(in_array('Apple', $merkVoorkeuren)){echo 'checked';} ?>>Apple</label>             
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk7"><input type="checkbox" name="merkcheck[]" id="merk7" value="Sony"<?php echo set_checkbox('merkcheck[]', 'Sony'); if(in_array('Sony', $merkVoorkeuren)){echo 'checked';} ?>>Sony</label>           
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk8"><input type="checkbox" name="merkcheck[]" id="merk8" value="Ford"<?php echo set_checkbox('merkcheck[]', 'Ford'); if(in_array('Ford', $merkVoorkeuren)){echo 'checked';} ?>>Ford</label>             
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk9"><input type="checkbox" name="merkcheck[]" id="merk9" value="Calvé"<?php echo set_checkbox('merkcheck[]', 'Calvé'); if(in_array('Calvé', $merkVoorkeuren)){echo 'checked';} ?>>Calvé</label>       
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk10"><input type="checkbox" name="merkcheck[]" id="merk10" value="Heinz"<?php echo set_checkbox('merkcheck[]', 'Heinz'); if(in_array('Heinz', $merkVoorkeuren)){echo 'checked';} ?>>Heinz</label>       
                </div>
            </div>
            <div class="onder_elkaar width_20">
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk11"><input type="checkbox" name="merkcheck[]" id="merk11" value="Burger King"<?php echo set_checkbox('merkcheck[]', 'Burger King'); if(in_array('Burger King', $merkVoorkeuren)){echo 'checked';} ?>>Burger King</label>    
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk12"><input type="checkbox" name="merkcheck[]" id="merk12" value="Samsung"<?php echo set_checkbox('merkcheck[]', 'Samsung'); if(in_array('Samsung', $merkVoorkeuren)){echo 'checked';} ?>>Samsung</label>      
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk13"><input type="checkbox" name="merkcheck[]" id="merk13" value="Hema"<?php echo set_checkbox('merkcheck[]', 'Hema'); if(in_array('Hema', $merkVoorkeuren)){echo 'checked';} ?>>Hema</label>         
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk14"><input type="checkbox" name="merkcheck[]" id="merk14" value="Chiquita"<?php echo set_checkbox('merkcheck[]', 'Chiquita'); if(in_array('Chiquita', $merkVoorkeuren)){echo 'checked';} ?>>Chiquita</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk15"><input type="checkbox" name="merkcheck[]" id="merk15" value="Amstel"<?php echo set_checkbox('merkcheck[]', 'Amstel'); if(in_array('Amstel', $merkVoorkeuren)){echo 'checked';} ?>>Amstel</label>   
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk16"><input type="checkbox" name="merkcheck[]" id="merk16" value="Philips"<?php echo set_checkbox('merkcheck[]', 'Philips'); if(in_array('Philips', $merkVoorkeuren)){echo 'checked';} ?>>Philips</label>      
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk17"><input type="checkbox" name="merkcheck[]" id="merk17" value="Skittles"<?php echo set_checkbox('merkcheck[]', 'Skittles'); if(in_array('Skittles', $merkVoorkeuren)){echo 'checked';} ?>>Skittles</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk18"><input type="checkbox" name="merkcheck[]" id="merk18" value="Oreo"<?php echo set_checkbox('merkcheck[]', 'Oreo'); if(in_array('Oreo', $merkVoorkeuren)){echo 'checked';} ?>>Oreo</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk19"><input type="checkbox" name="merkcheck[]" id="merk19" value="Pringles"<?php echo set_checkbox('merkcheck[]', 'Pringles'); if(in_array('Pringles', $merkVoorkeuren)){echo 'checked';} ?>>Pringles</label>      
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk20"><input type="checkbox" name="merkcheck[]" id="merk20" value="Dior"<?php echo set_checkbox('merkcheck[]', 'Dior'); if(in_array('Dior', $merkVoorkeuren)){echo 'checked';} ?>>Dior</label>      
                </div>
            </div>
            <div class="onder_elkaar width_20">
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk21"><input type="checkbox" name="merkcheck[]" id="merk21" value="Nivea"<?php echo set_checkbox('merkcheck[]', 'Nivea'); if(in_array('Nivea', $merkVoorkeuren)){echo 'checked';} ?>>Nivea</label>        
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk22"><input type="checkbox" name="merkcheck[]" id="merk22" value="Victoria\'s Secret"<?php echo set_checkbox('merkcheck[]', 'Victoria\'s Secret'); if(in_array('Victoria\'s Secret', $merkVoorkeuren)){echo 'checked';} ?>>Victoria's Secret</label>          
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk23"><input type="checkbox" name="merkcheck[]" id="merk23" value="Cartier"<?php echo set_checkbox('merkcheck[]', 'Cartier'); if(in_array('Cartier', $merkVoorkeuren)){echo 'checked';} ?>>Cartier</label>           
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk24"><input type="checkbox" name="merkcheck[]" id="merk24" value="Hunkemöller"<?php echo set_checkbox('merkcheck[]', 'Hunkemöller'); if(in_array('Hunkemöller', $merkVoorkeuren)){echo 'checked';} ?>>Hunkemöller</label> 
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk25"><input type="checkbox" name="merkcheck[]" id="merk25" value="Nokia"<?php echo set_checkbox('merkcheck[]', 'Nokia'); if(in_array('Nokia', $merkVoorkeuren)){echo 'checked';} ?>>Nokia</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk26"><input type="checkbox" name="merkcheck[]" id="merk26" value="Coca cola"<?php echo set_checkbox('merkcheck[]', 'Coca cola'); if(in_array('Coca Cola', $merkVoorkeuren)){echo 'checked';} ?>>Coca Cola</label>   
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk27"><input type="checkbox" name="merkcheck[]" id="merk27" value="27"<?php echo set_checkbox('merkcheck[]', '27'); if(in_array('Pepsi', $merkVoorkeuren)){echo 'checked';} ?>>Pepsi</label>       
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk28"><input type="checkbox" name="merkcheck[]" id="merk28" value="Jaguar"<?php echo set_checkbox('merkcheck[]', 'Jaguar'); if(in_array('Jaguar', $merkVoorkeuren)){echo 'checked';} ?>>Jaguar</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk29"><input type="checkbox" name="merkcheck[]" id="merk29" value="Vans"<?php echo set_checkbox('merkcheck[]', 'Vans'); if(in_array('Vans', $merkVoorkeuren)){echo 'checked';} ?>>Vans</label>       
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk30"><input type="checkbox" name="merkcheck[]" id="merk30" value="Nike"<?php echo set_checkbox('merkcheck[]', 'Nike'); if(in_array('Nike', $merkVoorkeuren)){echo 'checked';} ?>>Nike</label>     
                </div>
            </div>
            <div class="onder_elkaar width_20">
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk31"><input type="checkbox" name="merkcheck[]" id="merk31" value="Audi"<?php echo set_checkbox('merkcheck[]', 'Audi'); if(in_array('Audi', $merkVoorkeuren)){echo 'checked';} ?>>Audi</label>      
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk32"><input type="checkbox" name="merkcheck[]" id="merk32" value="Adidas"<?php echo set_checkbox('merkcheck[]', 'Adidas'); if(in_array('Adidas', $merkVoorkeuren)){echo 'checked';} ?>>Adidas</label>
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk33"><input type="checkbox" name="merkcheck[]" id="merk33" value="Doritos"<?php echo set_checkbox('merkcheck[]', 'Dpritos'); if(in_array('Doritos', $merkVoorkeuren)){echo 'checked';} ?>>Doritos</label>
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk34"><input type="checkbox" name="merkcheck[]" id="merk34" value="Mountain Dew"<?php echo set_checkbox('merkcheck[]', 'Mountain Dew'); if(in_array('Mountain', $merkVoorkeuren)){echo 'checked';} ?>>Mountain Dew</label>      
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk35"><input type="checkbox" name="merkcheck[]" id="merk35" value="Nintendo"<?php echo set_checkbox('merkcheck[]', 'Nintendo'); if(in_array('Nintendo', $merkVoorkeuren)){echo 'checked';} ?>>Nintendo</label>   
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk36"><input type="checkbox" name="merkcheck[]" id="merk36" value="Casio"<?php echo set_checkbox('merkcheck[]', 'Casio'); if(in_array('Casio', $merkVoorkeuren)){echo 'checked';} ?>>Casio</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk37"><input type="checkbox" name="merkcheck[]" id="merk37" value="Abercrombie"<?php echo set_checkbox('merkcheck[]', 'Abercrombie'); if(in_array('Abercrombie', $merkVoorkeuren)){echo 'checked';} ?>>Abercrombie</label>        
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk38"><input type="checkbox" name="merkcheck[]" id="merk38" value="Knorr"<?php echo set_checkbox('merkcheck[]', 'Knorr'); if(in_array('Knorr', $merkVoorkeuren)){echo 'checked';} ?>>Knorr</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk39"><input type="checkbox" name="merkcheck[]" id="merk39" value="Maggie"<?php echo set_checkbox('merkcheck[]', 'Maggie'); if(in_array('Maggie', $merkVoorkeuren)){echo 'checked';} ?>>Maggie</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk40"><input type="checkbox" name="merkcheck[]" id="merk40" value="Honig"<?php echo set_checkbox('merkcheck[]', 'Honig'); if(in_array('Honig', $merkVoorkeuren)){echo 'checked';} ?>>Honig</label>          
                </div>
            </div>
            <div class="onder_elkaar width_20">
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk41"><input type="checkbox" name="merkcheck[]" id="merk41" value="Tommy Hilfiger"<?php echo set_checkbox('merkcheck[]', 'Tommy Hilfiger'); if(in_array('Tommy Hilfiger', $merkVoorkeuren)){echo 'checked';} ?>>Tommy Hilfiger</label>          
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk42"><input type="checkbox" name="merkcheck[]" id="merk42" value="G-star"<?php echo set_checkbox('merkcheck[]', 'G-star'); if(in_array('G-star', $merkVoorkeuren)){echo 'checked';} ?>>G-star</label>    
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk43"><input type="checkbox" name="merkcheck[]" id="merk43" value="Zara"<?php echo set_checkbox('merkcheck[]', 'Zara'); if(in_array('Zara', $merkVoorkeuren)){echo 'checked';} ?>>Zara</label>    
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk44"><input type="checkbox" name="merkcheck[]" id="merk44" value="Mango"<?php echo set_checkbox('merkcheck[]', 'Mango'); if(in_array('Mango', $merkVoorkeuren)){echo 'checked';} ?>>Mango</label>    
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk45"><input type="checkbox" name="merkcheck[]" id="merk45" value="Superdry"<?php echo set_checkbox('merkcheck[]', 'Superdry'); if(in_array('Superdry', $merkVoorkeuren)){echo 'checked';} ?>>Superdry</label>  
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk46"><input type="checkbox" name="merkcheck[]" id="merk46" value="H&M"<?php echo set_checkbox('merkcheck[]', 'H&M'); if(in_array('H&M', $merkVoorkeuren)){echo 'checked';} ?>>H&M</label>        
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk47"><input type="checkbox" name="merkcheck[]" id="merk47" value="Lays"<?php echo set_checkbox('merkcheck[]', 'Lays'); if(in_array('Lays', $merkVoorkeuren)){echo 'checked';} ?>>Lays</label>       
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk48"><input type="checkbox" name="merkcheck[]" id="merk48" value="48"<?php echo set_checkbox('merkcheck[]', '48'); if(in_array('Zeeman', $merkVoorkeuren)){echo 'checked';} ?>>Zeeman</label>    
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk49"><input type="checkbox" name="merkcheck[]" id="merk49" value="Milka"<?php echo set_checkbox('merkcheck[]', 'Milka'); if(in_array('Milka', $merkVoorkeuren)){echo 'checked';} ?>>Milka</label>   
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk50"><input type="checkbox" name="merkcheck[]" id="merk50" value="AH Huismerk"<?php echo set_checkbox('merkcheck[]', 'AH Huismerk'); if(in_array('AH Huismerk', $merkVoorkeuren)){echo 'checked';} ?>>AH Huismerk</label>  
                </div> 
            </div>
        </div>
        <div class="centreer">
            <input type="submit" class="verzendknop margin_top_50" value="Merkvoorkeuren wijzigen">
        </div>
    </form>
</div>