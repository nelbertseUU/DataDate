<div class="content">
    <h1>Registreren</h1>
    <hr width="80%">
    <h2>Stap 3</h2>
    <p>Kies hier voor welke merken je een voorkeur hebt (kies er minimaal 5):</p>
    <?php echo form_open('Login/merkform', $attributes); ?>
        <div class="naast_elkaar margin_top_30">
            <div class="onder_elkaar width_20">
                <div class="margin_bottom_20">
                    <label class="pointer label_hover" for="merk1"><input type="checkbox" name="merkcheck[]" id="merk1" value="Durex"<?php echo set_checkbox('merkcheck[]', 'Durex'); ?>>Durex</label>
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover" for="merk2"><input type="checkbox" name="merkcheck[]" id="merk2" value="Heineken"<?php echo set_checkbox('merkcheck[]', 'Heineken'); ?>>Heineken</label>
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk3"><input type="checkbox" name="merkcheck[]" id="merk3" value="Microsoft"<?php echo set_checkbox('merkcheck[]', 'Microsoft'); ?>>Microsoft</label>             
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk4"><input type="checkbox" name="merkcheck[]" id="merk4" value="BMW"<?php echo set_checkbox('merkcheck[]', 'BMW'); ?>>BMW</label>
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover" for="merk5"><input type="checkbox" name="merkcheck[]" id="merk5" value="McDonalds"<?php echo set_checkbox('merkcheck[]', 'McDonalds'); ?>>McDonalds</label>             
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk6"><input type="checkbox" name="merkcheck[]" id="merk6" value="Apple"<?php echo set_checkbox('merkcheck[]', 'Apple'); ?>>Apple</label>             
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk7"><input type="checkbox" name="merkcheck[]" id="merk7" value="Sony"<?php echo set_checkbox('merkcheck[]', 'Sony'); ?>>Sony</label>           
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk8"><input type="checkbox" name="merkcheck[]" id="merk8" value="Ford"<?php echo set_checkbox('merkcheck[]', 'Ford'); ?>>Ford</label>             
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk9"><input type="checkbox" name="merkcheck[]" id="merk9" value="Calvé"<?php echo set_checkbox('merkcheck[]', 'Calvé'); ?>>Calvé</label>       
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk10"><input type="checkbox" name="merkcheck[]" id="merk10" value="Heinz"<?php echo set_checkbox('merkcheck[]', 'Heinz'); ?>>Heinz</label>       
                </div>
            </div>
            <div class="onder_elkaar width_20">
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk11"><input type="checkbox" name="merkcheck[]" id="merk11" value="Burger King"<?php echo set_checkbox('merkcheck[]', 'Burger King'); ?>>Burger King</label>    
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk12"><input type="checkbox" name="merkcheck[]" id="merk12" value="Samsung"<?php echo set_checkbox('merkcheck[]', 'Samsung'); ?>>Samsung</label>      
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk13"><input type="checkbox" name="merkcheck[]" id="merk13" value="Hema"<?php echo set_checkbox('merkcheck[]', 'Hema'); ?>>Hema</label>         
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk14"><input type="checkbox" name="merkcheck[]" id="merk14" value="Chiquita"<?php echo set_checkbox('merkcheck[]', 'Chiquita'); ?>>Chiquita</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk15"><input type="checkbox" name="merkcheck[]" id="merk15" value="Amstel"<?php echo set_checkbox('merkcheck[]', 'Amstel'); ?>>Amstel</label>   
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk16"><input type="checkbox" name="merkcheck[]" id="merk16" value="Philips"<?php echo set_checkbox('merkcheck[]', 'Philips'); ?>>Philips</label>      
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk17"><input type="checkbox" name="merkcheck[]" id="merk17" value="Skittles"<?php echo set_checkbox('merkcheck[]', 'Skittles'); ?>>Skittles</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk18"><input type="checkbox" name="merkcheck[]" id="merk18" value="Oreo"<?php echo set_checkbox('merkcheck[]', 'Oreo'); ?>>Oreo</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk19"><input type="checkbox" name="merkcheck[]" id="merk19" value="Pringles"<?php echo set_checkbox('merkcheck[]', 'Pringles'); ?>>Pringles</label>      
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk20"><input type="checkbox" name="merkcheck[]" id="merk20" value="Dior"<?php echo set_checkbox('merkcheck[]', 'Dior'); ?>>Dior</label>      
                </div>
            </div>
            <div class="onder_elkaar width_20">
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk21"><input type="checkbox" name="merkcheck[]" id="merk21" value="Nivea"<?php echo set_checkbox('merkcheck[]', 'Nivea'); ?>>Nivea</label>        
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk22"><input type="checkbox" name="merkcheck[]" id="merk22" value="Victoria"<?php echo set_checkbox('merkcheck[]', 'Victoria'); ?>>Victoria's Secret</label>          
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk23"><input type="checkbox" name="merkcheck[]" id="merk23" value="Cartier"<?php echo set_checkbox('merkcheck[]', 'Cartier'); ?>>Cartier</label>           
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk24"><input type="checkbox" name="merkcheck[]" id="merk24" value="Hunkemöller"<?php echo set_checkbox('merkcheck[]', 'Hunkemöller'); ?>>Hunkemöller</label> 
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk25"><input type="checkbox" name="merkcheck[]" id="merk25" value="Nokia"<?php echo set_checkbox('merkcheck[]', 'Nokia'); ?>>Nokia</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk26"><input type="checkbox" name="merkcheck[]" id="merk26" value="Coca cola"<?php echo set_checkbox('merkcheck[]', 'Coca cola'); ?>>Coca Cola</label>   
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk27"><input type="checkbox" name="merkcheck[]" id="merk27" value="27"<?php echo set_checkbox('merkcheck[]', '27'); ?>>Pepsi</label>       
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk28"><input type="checkbox" name="merkcheck[]" id="merk28" value="Jaguar"<?php echo set_checkbox('merkcheck[]', 'Jaguar'); ?>>Jaguar</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk29"><input type="checkbox" name="merkcheck[]" id="merk29" value="Vans"<?php echo set_checkbox('merkcheck[]', 'Vans'); ?>>Vans</label>       
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk30"><input type="checkbox" name="merkcheck[]" id="merk30" value="Nike"<?php echo set_checkbox('merkcheck[]', 'Nike'); ?>>Nike</label>     
                </div>
            </div>
            <div class="onder_elkaar width_20">
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk31"><input type="checkbox" name="merkcheck[]" id="merk31" value="Audi"<?php echo set_checkbox('merkcheck[]', 'Audi'); ?>>Audi</label>      
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk32"><input type="checkbox" name="merkcheck[]" id="merk32" value="Adidas"<?php echo set_checkbox('merkcheck[]', 'Adidas'); ?>>Adidas</label>
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk33"><input type="checkbox" name="merkcheck[]" id="merk33" value="Doritos"<?php echo set_checkbox('merkcheck[]', 'Dpritos'); ?>>Doritos</label>
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk34"><input type="checkbox" name="merkcheck[]" id="merk34" value="Mountain Dew"<?php echo set_checkbox('merkcheck[]', 'Mountain Dew'); ?>>Mountain Dew</label>      
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk35"><input type="checkbox" name="merkcheck[]" id="merk35" value="Nintendo"<?php echo set_checkbox('merkcheck[]', 'Nintendo'); ?>>Nintendo</label>   
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk36"><input type="checkbox" name="merkcheck[]" id="merk36" value="Casio"<?php echo set_checkbox('merkcheck[]', 'Casio'); ?>>Casio</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk37"><input type="checkbox" name="merkcheck[]" id="merk37" value="Abercrombie"<?php echo set_checkbox('merkcheck[]', 'Abercrombie'); ?>>Abercrombie</label>        
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk38"><input type="checkbox" name="merkcheck[]" id="merk38" value="Knorr"<?php echo set_checkbox('merkcheck[]', 'Knorr'); ?>>Knorr</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk39"><input type="checkbox" name="merkcheck[]" id="merk39" value="Maggie"<?php echo set_checkbox('merkcheck[]', 'Maggie'); ?>>Maggie</label>     
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk40"><input type="checkbox" name="merkcheck[]" id="merk40" value="Honig"<?php echo set_checkbox('merkcheck[]', 'Honig'); ?>>Honig</label>          
                </div>
            </div>
            <div class="onder_elkaar width_20">
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk41"><input type="checkbox" name="merkcheck[]" id="merk41" value="Tommy Hilfiger"<?php echo set_checkbox('merkcheck[]', 'Tommy Hilfiger'); ?>>Tommy Hilfiger</label>          
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk42"><input type="checkbox" name="merkcheck[]" id="merk42" value="G-star"<?php echo set_checkbox('merkcheck[]', 'G-star'); ?>>G-star</label>    
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk43"><input type="checkbox" name="merkcheck[]" id="merk43" value="Zara"<?php echo set_checkbox('merkcheck[]', 'Zara'); ?>>Zara</label>    
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk44"><input type="checkbox" name="merkcheck[]" id="merk44" value="Mango"<?php echo set_checkbox('merkcheck[]', 'Mango'); ?>>Mango</label>    
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk45"><input type="checkbox" name="merkcheck[]" id="merk45" value="Superdry"<?php echo set_checkbox('merkcheck[]', 'Superdry'); ?>>Superdry</label>  
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk46"><input type="checkbox" name="merkcheck[]" id="merk46" value="H&M"<?php echo set_checkbox('merkcheck[]', 'H&M'); ?>>H&M</label>        
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk47"><input type="checkbox" name="merkcheck[]" id="merk47" value="Lays"<?php echo set_checkbox('merkcheck[]', 'Lays'); ?>>Lays</label>       
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk48"><input type="checkbox" name="merkcheck[]" id="merk48" value="48"<?php echo set_checkbox('merkcheck[]', '48'); ?>>Zeeman</label>    
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk49"><input type="checkbox" name="merkcheck[]" id="merk49" value="Milka"<?php echo set_checkbox('merkcheck[]', 'Milka'); ?>>Milka</label>   
                </div>
                <div class="margin_bottom_20">
                    <label class="pointer label_hover"  for="merk50"><input type="checkbox" name="merkcheck[]" id="merk50" value="AH Huismerk"<?php echo set_checkbox('merkcheck[]', 'AH Huismerk'); ?>>AH Huismerk</label>  
                </div> 
            </div>
        </div>
        <div class="centreer">
            <input type="submit" class="verzendknop margin_top_50" value="Volgende stap">
        </div>
    </form>
</div>