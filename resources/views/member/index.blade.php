<?php echo View::make('layout.header'); ?>
   <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Member</a></li>
                    <li><a href="#">Member</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="page-title">                    
                    <h2>Add Member</h2>
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
                                                    <label for="sponser_id">Sponser ID</label>
                                                    <input type="text" id="sponser_id" class="form-control" name="sponser_id" placeholder="Sponser ID" required="required" onchange="companyname(this)">
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                     <label for="sponser_name">Sponser name</label>
                                                    <input type="text" id="sponser_name" class="form-control" name="sponser_name" placeholder="Last name" required="required">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <div class="form-row">
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                     <label for="sponser_name">Select Postion</label>
                                                     <select  class="form-control" id="position" name="position">
                                                    <option value="-1"  class="form-control" >Select Position</option>
                                                    <option value="left"  class="form-control" >Left</option>
                                                    <option value="right"  class="form-control" >Right</option>
                                                </select>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                    <label for="firstName">First name</label>
                                                   <input type="text" id="firstName" class="form-control" name="fname" placeholder="First name" required="required" autofocus="autofocus">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <div class="form-row">
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                    <label for="lastName">Last name</label>
                                                     <input type="text" id="lastName" class="form-control" name="lname" placeholder="Last name" required="required">
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-label-group">                                                    
                                                    <label for="email">Email</label>
                                                   <input type="email" id="email" class="form-control" name="email" placeholder="First name" required="required" autofocus="autofocus">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                             <div class="form-group">
                                              <div class="form-row">
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                    <label for="mobile">Mobile</label>
                                                    <input type="text" id="mobile" class="form-control" name="mobile" placeholder="Last name" required="required">
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-label-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required="required">
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
<?php echo View::make('layout.footer'); ?>
