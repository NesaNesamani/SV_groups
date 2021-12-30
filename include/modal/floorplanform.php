<?php ?>

<div class="modal fade" id="floorplanform-modal" tabindex="-1" role="dialog" aria-labelledby="form-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="form-modal-title">Floor plan Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="floorplanform" class="modal-form">
                           <input 
                           class="form-control" 
                           type="text" 
                           placeholder="Your Name *" 
                           name="floorplan_yourname" 
                           id="floorplan_yourname"
                           >
                        
                           <input 
                           class="form-control" 
                           type="text" 
                           placeholder="Your Email *" 
                           name="floorplan_emailaddress"
                           id="floorplan_emailaddress"
                           >

                           <input 
                           class="form-control" 
                           type="number" 
                           placeholder="Mobile Number *" 
                           name="floorplan_mobilenumber"
                           id="floorplan_mobilenumber"
                           >
                        
                           <textarea 
                           class="form-control" 
                           placeholder="Your description" 
                           name="floorplan_description"
                           id="floorplan_description"
                           ></textarea>

                            <p>Floor plan</p>
                            <input class="radio" type="radio" id="2bhk" name="floorplan" value="2bhk">
                            <label for="2bhk">2BHK</label>

                            <input class="radio" type="radio" id="3bhk" name="floorplan" value="3bhk">
                            <label for="3bhk">3BHK</label><br>

                           <div 
                           class="g-recaptcha"
                           data-sitekey="6LeCkMUdAAAAAOly8h1e4t4oIRlDODXWbBM5iUJ4"
                           data-callback="floorplanRecaptcha"
                           >
                            </div>
                            <input type="hidden" name="floorplanRecaptcha" id="floorplanRecaptcha" value="">


                        <div  css="modalformcustomfooter">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" >Close</button>
                        <button  type="submit"  class="btn btn-outline-warning" style="margin-">submit</button>
                        </div>
                       
                        </form> 
                    </div>
                  
                </div>
            </div>
</div> 