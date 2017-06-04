 <div class="tab">
  <button class="tablinks" onclick="selectOpt(event, 'Shuttledatang')">Shuttle Datang</button>
  <button class="tablinks" onclick="selectOpt(event, 'Shuttlepulang')">Shuttle Pulang</button>
</div>

<div id="Shuttledatang" class="tabcontent">
  <?php
    for ($i=1; $i <9 ; $i++) {
  ?> 
    	<img src="<?php echo base_url();?>assets/img/information/datang-<?php echo $i;?>.png">
  <?php        
    }
  ?>
</div>

<div id="Shuttlepulang" class="tabcontent">
  <?php
    for ($i=1; $i <9 ; $i++) {
  ?> 
    	<img src="<?php echo base_url();?>assets/img/information/pulang-<?php echo $i;?>.png">
  <?php        
    }
  ?>
</div>
