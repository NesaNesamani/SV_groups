<?php ?>

<div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="form-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="form-modal-title">Enquire Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="enquiryform" class="modal-form">
                           <input 
                           class="form-control" 
                           type="text" 
                           placeholder="Your Name *" 
                           name="yourname" 
                           id="yourname"
                           >
                        
                           <input 
                           class="form-control" 
                           type="text" 
                           placeholder="Your Email *" 
                           name="emailaddress"
                           id="emailaddress"
                           >

                           <input 
                           class="form-control" 
                           type="number" 
                           placeholder="Mobile Number *" 
                           name="mobilenumber"
                           id="mobilenumber"
                           >
                        
                           <textarea 
                           style="display:none"
                           class="form-control" 
                           placeholder="Your description"
                           name="description"
                           id="description"
                           >ABCDEF</textarea>

                           <div 
                           class="g-recaptcha" 
                           data-sitekey="6LeCkMUdAAAAAOly8h1e4t4oIRlDODXWbBM5iUJ4"
                           data-callback="recaptchaCallback"
                           >
                            </div>
                            <input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha" value="">


                        <div  css="modalformcustomfooter">
                        <button  type="submit" id="enquiryform_submitbtn" class="btn btn-outline-warning" >submit</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" >Close</button>
                        
                        </div>
                       
                        </form> 
                    </div>
                  
                </div>
            </div>
</div> 