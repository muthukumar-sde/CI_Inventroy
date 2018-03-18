<?php include("include/header.php"); ?>

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php include("include/sidebar.php"); ?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Edit Customer</h4>
						</div>

						<!--<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>-->
					</div>
					
				</div> 
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
                
                		<!--start Form-->
                        <div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title"><i class="icon-add"></i>&nbsp;<strong>Edit Customer Details</strong></h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
                               <?php if($this->session->flashdata('failear_msg')){?>
                                    <div class="alert alert-danger alert-styled-left alert-bordered">
										<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
										<span class="text-semibold"><?php echo $this->session->flashdata('failear_msg'); ?></span>
                                    </div>
                                <?php } ?>
                                <?php if($this->session->flashdata('success_msg')){?>
                                   <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
										<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
										<span class="text-semibold"> <?php echo $this->session->flashdata('success_msg'); ?></span>
								    </div>
                                <?php } ?>
							 <?php echo form_open_multipart('customer_details/validate_edit_customer_details', array('class'=>''));
							 foreach ($customer_details_data->result() as $row)
                              { 
							  ?>
                             <span style="color:red; "><?php echo validation_errors(); ?></span> 
                             <div class="panel-body">
									<div class="tabbable">								

										<div class="tab-content">
											<div class="tab-pane active" id="justified-right-icon-tab1">
												<div class="row">
                                                <div class="row"> <div class="col-md-3"> </div>
                                                      <div class="col-md-6"> 
                                                         <div class="form-group ">
                                                             <span id="cus_type" class="InputGroup">
                                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                      <label >
											           <input type="radio" name="cus_type" id="Retailer" value="Retailer" 
													   <?php if($row->Customer_type=="Retailer"){ echo 'checked';} ?> >
												         Retailer
										            	</label>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label>
											           <input type="radio" name="cus_type" id="Customer"  value="Customer"
                                                       <?php if($row->Customer_type=="Customer"){ echo 'checked';} ?> >
												         Customer
										            	</label>
                                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                           <label>
											           <input type="radio" name="cus_type" id="Wholesaler"  value="Wholesaler" 
                                                       <?php if($row->Customer_type=="Wholesaler"){ echo 'checked';} ?>>
												         Wholesaler
										            	</label>
                                                         </span>
                                                            </div>
                                                          </div>
                                               
                                                       <div class="col-md-3"> </div>
                                                    </div>
                                                 <div class="row">
                                                      <div class="col-md-6"> 
                                                            <div class="form-group">
                                                                <label>Customer Name:</label>
                                                                <?php 
                                                                $data1 = array(
                                                                'name'   => 'cus_name',
                                                                'id'     => 'cus_name',
                                                                'value'  => $row->Customer_name,
                                                                'class'  => 'form-control',
                                                                'placeholder' => 'Enter a Name'														
                                                                );
                                                                echo form_input($data1);
                                                                ?> 
                                                                <input type="hidden" name="id" value="<?php echo $row->Customer_id ?>">                                                     
                                                            </div>
                                                        </div>
                                               
                                                       <div class="col-md-6"> 
                                                            <div class="form-group">
                                                                <label>Company Name:</label>
                                                                <?php 
                                                                $data2 = array(
                                                                'name'   => 'company',
                                                                'id'     => 'company',
                                                                'value'  => $row->Customer_comp,
                                                                'class'  => 'form-control',
                                                                'placeholder' => 'Enter a Company'														
                                                                );
                                                                echo form_input($data2);
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="row">
                                                        <div class="col-md-12"> 
                                                            <div class="form-group">
                                                                <label>Address:</label>
                                                                 <?php 
                                                                $data3 = array(
                                                                'name'   => 'address',
                                                                'id'     => 'address',
                                                                'value'  => $row->Customer_address,
                                                                'class'  => 'form-control',
                                                                'placeholder' => 'Enter a Address',
                                                                'rows'   => '3'														
                                                                );
                                                                echo form_textarea($data3);
                                                                ?>                                                       
                                                            </div>
                                                        </div>
													
                                                        
													</div>
                                                    <div class="row">
                                                        <div class="col-md-6"> 
                                                            <div class="form-group">
                                                                <label>Phone:</label>
                                                                 <?php 
                                                                $data6 = array(
                                                                'name'   => 'phone',
                                                                'id'     => 'phone',
                                                                'value'  => $row->Customer_phone,
                                                                'class'  => 'form-control',
                                                                'placeholder' => 'Enter a Phone No'														
                                                                );
                                                                echo form_input($data6);
                                                                ?>                                                      
                                                            </div>
                                                        </div>
													
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Email:</label>
                                                                <?php 
                                                                $data8 = array(
                                                                'name'   => 'email',
                                                                'id'     => 'email',
                                                                'value'  => $row->Customer_email,
                                                                'class'  => 'form-control',
                                                                'placeholder' => 'Enter a Email'														
                                                                );
                                                                echo form_input($data8);
                                                                ?>                                                       
                                                            </div>
                                                        </div>
                                                    </div>
														
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>City:</label>
                                                                 <?php 
                                                                $data10 = array(
                                                                'name'   => 'city',
                                                                'id'     => 'city',
                                                                'value'  => $row->Customer_city,
                                                                'class'  => 'form-control',
                                                                'placeholder' => 'Enter a City'														
                                                                );
                                                                echo form_input($data10);
                                                                ?> 
                                                             
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Pin Code:</label>
                                                                <?php 
                                                                $data12 = array(
                                                                'name'   => 'pincode',
                                                                'id'     => 'pincode',
                                                                'value'  => $row->Customer_pincode,
                                                                'class'  => 'form-control',
                                                                'placeholder' => 'Enter a Pin Code'														
                                                                );
                                                                echo form_input($data12);
                                                                ?> 
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>State:</label>
                                                                 <?php 
                                                                $data14 = array(
                                                                'name'   => 'state',
                                                                'id'     => 'state',
                                                                'value'  => $row->Customer_state,
                                                                'class'  => 'form-control',
                                                                'placeholder' => 'Enter a State'														
                                                                );
                                                                echo form_input($data14);
                                                                ?> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Country:</label>
                                                                <?php 
                                                                $data14 = array(
                                                                'name'   => 'country',
                                                                'id'     => 'country',
                                                                'value'  => $row->Customer_country,
                                                                'class'  => 'form-control',
                                                                'placeholder' => 'Enter a Country'														
                                                                );
                                                                echo form_input($data14);
                                                                ?> 
                                                            </div>
                                                        </div>
                                                    </div>												
													
													
                                                  </div>
                                    
                                                     
                                                 <div class="text-center">
											      <button type="submit" class="btn bg-teal-400">Save</button>
                                                  <input type="reset" class="btn btn-default" value="Cancel" onClick="javascript: document.location.href='customer_details_list'">
									            </div>
											</div>
										</div>
									</div>
								</div>
                                    <?php } ?>								
                                   
							</form>
						</div>
					</div>
					<!--End form-->
                    
<?php
include("include/main_js.php");
include("validation/add_customer_details.php"); 
include("include/footer.php");
?>
