     <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header text-asbestos">Add Stops to Route</h3>
                    </div>
                </div>
          
             <?php 
                                  echo form_open('BusStopRoute/getPost',array('role'=>'form'));
                            ?>
                            
         <div class="row" align="center" style="margin-bottom: 35px; margin-top:50px">
                                    <div>
                                        <div class="form-group">
                                                <label>Route</label>
                                                <select class="form-control" style="width: 30%;" name="route" >
                                                    <option>choose the option</option>
                                                    <?php
                                                            foreach ($this->data['route'] as $row) {
                                                                ?>	
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['number']; ?></option>
                                                            <?php } ?>
                                                </select>
                                            </div>
                                        
                                    </div>
                    </div>
                <div class="row" align="center">
                    <div>
                        
                                          <label>Add BusStop to Route</label>
                        <select class="multi-select" multiple=""  id="my_multi_select3" name="busstoproute">
					 <?php
                                                            foreach ($this->data['busstop'] as $row) {
                                                                ?>	
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                            <?php } ?>
					</select>
			
                        </div>
                       
                   </div>
                    <div class="row" align="center" style="margin-bottom: 35px; margin-top:50px">
                             <div class="form-group">
                                 <div style="width: 30%">
                         <?php echo form_submit(array('class'=>'btn btn-lg btn-primary btn-block','value'=>'Submit','type'=>'submit')); ?>          
                                 </div>
                             </div>
                    </div>
          <?php echo form_close(); ?>
              
    </div>
                
  
          

       