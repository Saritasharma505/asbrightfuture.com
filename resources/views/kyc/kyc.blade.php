<?php echo View::make('layout.header');?>
   <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Member</a></li>
                    <li><a href="#">Member</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="page-title">                    
                    <h2>Kyc Update</h2>
                </div>
               <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                <!--- HTML FORM --->           
                    <div class="row">
                        <div class="col-md-12">
                            <form action="action.php" method="POST" class="form-horizontal" enctype="multipart/form-data">             
                                <div class="panel panel-default tabs" style="margin-top: 0px !important;">   
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active">
                                          
                                          <div class="form-group">
                                              <div class="form-row">
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                    <label for="sponser_id">User ID</label>
                                                    <input type="text" id="sponser_id" class="form-control" name="user_id" placeholder="User ID" required="required">
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                     <label for="sponser_name">Bank Holder Name</label>
                                                    <input type="text" id="sponser_name" class="form-control" name="sponser_name" placeholder="Bank Holder Name" required="required">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <div class="form-row">
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                   <label for="firstName">Bank Account Name</label>
                                                   <input type="text" id="firstName" class="form-control" name="fname" placeholder="Bank Account name" required="required" autofocus="autofocus">
                                                </select>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                    <label for="firstName">Bank Account Number</label>
                                                   <input type="text" id="firstName" class="form-control" name="fname" placeholder="Bank Account Number" required="required" autofocus="autofocus">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <div class="form-row">
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                    <label for="lastName">IFSC Code</label>
                                                     <input type="text" id="lastName" class="form-control" name="lname" placeholder="Last name" required="required">
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-label-group">                                                    
                                                    <label for="email">Pan card Upload</label>
                                                   <input type="file" id="email" class="form-control" name="email" accept="application/pdf">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                             <div class="form-group">
                                              <div class="form-row">
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                    <label for="mobile">Your Photo</label>
                                                   <input type="file" id="email" class="form-control" name="email">
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                    <label for="password">Addhar Card</label>
                                                    <input type="file" id="email" class="form-control" name="email" accept="application/pdf">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                        </div>                                
                                    </div>
                                    <div class="panel-footer">                                                                        
                                        <button type="submit" class="btn btn-primary pull-right" name="submit" value="submit">Register<span class="fa fa-floppy-o fa-right"></span></button>
                                    </div>
                                </div>                                
                            </form>
                        </div>
                    </div>
                 </div>
                            <!-- END DATATABLE EXPORT -->                       
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                          
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
<?php echo View::make('layout.footer');?>

