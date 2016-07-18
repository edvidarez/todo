<!DOCTYPE html>
<html>
<head>
	<?php 
		include_once "head.php";
		include_once "data/connection.php";
	 ?>
</head>
<body>
	<?php 
		include "header.php";
	 ?>
<div class="container">
		<div class="col-xs-6 col-xs-push-3">
								<div class="main-box clearfix">
									
									<div class="tabs-wrapper">
										<div class="clearfix">
											<h2 class="pull-left">Recent updates</h2>
											<ul class="nav nav-tabs pull-right">
												<li class="active"><a href="#tab-todo" data-toggle="tab">Todo</a></li>
												<li><a href="#tab-users" data-toggle="tab">Users</a></li>
												<!-- <li><a href="#tab-products" data-toggle="tab">Products</a></li> -->
												<li><a href="#tab-products" data-toggle="tab" class="btn btn-success">Add new Task</a></li>
												
											</ul>
										</div>
										
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab-todo">
												<ul class="widget-todo">
												<?php 
												$rs=mysqli_query($link, "SELECT * from todo where id_usuario=1 or id_equipo=1") ;
													if ($rs) 
														while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC))
														{
															$id=$row['id_todo'];
															$titulo= $row['titulo'];
															$importancia=$row['importancia'];
															$status=$row['status'];

													        echo "<li class='clearfix'> <div class='name'> <div class='checkbox-nice'>";
													        $box="<input type='checkbox' id='todo-".$id."'\>";
													        echo $box;
													        echo "<label for='todo-".$id."'>".$titulo."  ";
													        switch ($importancia) {
													        	case 3:
													        		echo '<span class="label label-danger">High Priority</span>';
													        		break;
													        	case 2:
													        		echo '<span class="label label-warning">Medium Priority</span>';
													        		break;
													        	case 1:
													        		echo "<span class='label label-success'>Low Priority</span>";
													        		break;
													        	default:
													        		
													        		break;
													        }
													        
													        ?>
													        </label>
															</div>
														</div>
														<div class="actions">
															<a href="#" class="table-link">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="#" class="table-link danger">
																<i class="fa fa-trash-o"></i>
															</a>
															<a href="#" class="table-link badge">
																<i class="fa fa-cog"></i>
															</a>
														</div>
													</li>
													        <?php 


													    }
													    
												 ?>
												
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-1" />
																<label for="todo-1">
																	New products introduction <span class="label label-danger">High Priority</span>
																</label>
															</div>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-2" />
																<label for="todo-2">
																	Checking the stock <span class="label label-success">Low Priority</span>
																</label>
															</div>
														</div>
														<div class="actions">
															<a href="#" class="table-link">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="#" class="table-link danger">
																<i class="fa fa-trash-o"></i>
															</a>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-3" checked="checked" />
																<label for="todo-3">
																	Buying coffee <span class="label label-warning">Medium Priority</span>
																</label>
															</div>
														</div>
														<div class="actions">
															<a href="#" class="table-link">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="#" class="table-link danger">
																<i class="fa fa-trash-o"></i>
															</a>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-4" />
																<label for="todo-4">
																	New marketing campaign <span class="label label-success">Low Priority</span>
																</label>
															</div>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-5" />
																<label for="todo-5">
																	Calling Mom <span class="label label-warning">Medium Priority</span>
																</label>
															</div>
														</div>
														<div class="actions">
															<a href="#" class="table-link badge">
																<i class="fa fa-cog"></i>
															</a>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-6" />
																<label for="todo-6">
																	Ryan's birthday <span class="label label-danger">High Priority</span>
																</label>
															</div>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-7" />
																<label for="todo-7">
																	Printing new flyer <span class="label label-success">Low Priority</span>
																</label>
															</div>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-8" />
																<label for="todo-8">
																	Mila and Ryan wedding <span class="label label-danger">High Priority</span>
																</label>
															</div>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-9" />
																<label for="todo-9">
																	Checking the stock <span class="label label-success">Low Priority</span>
																</label>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<div class="tab-pane fade " id="tab-users">
												<ul class="widget-users row">
													<li class="col-md-6">
														<div class="img">
															<img src="img/samples/scarlet.png" alt=""/>
														</div>
														<div class="details">
															<div class="name">
																<a href="#">Scarlett Johansson</a>
															</div>
															<div class="time">
																<i class="fa fa-clock-o"></i> Last online: 5 minutes ago
															</div>
															<div class="type">
																<span class="label label-danger">Admin</span>
															</div>
														</div>
													</li>
													<li class="col-md-6">
														<div class="img">
															<img src="img/samples/kunis.png" alt=""/>
														</div>
														<div class="details">
															<div class="name">
																<a href="#">Mila Kunis</a>
															</div>
															<div class="time online">
																<i class="fa fa-check-circle"></i> Online
															</div>
															<div class="type">
																<span class="label label-warning">Pending</span>
															</div>
														</div>
													</li>
													<li class="col-md-6">
														<div class="img">
															<img src="img/samples/ryan.png" alt=""/>
														</div>
														<div class="details">
															<div class="name">
																<a href="#">Ryan Gossling</a>
															</div>
															<div class="time online">
																<i class="fa fa-check-circle"></i> Online
															</div>
														</div>
													</li>
													<li class="col-md-6">
														<div class="img">
															<img src="img/samples/robert.png" alt=""/>
														</div>
														<div class="details">
															<div class="name">
																<a href="#">Robert Downey Jr.</a>
															</div>
															<div class="time">
																<i class="fa fa-clock-o"></i> Last online: Thursday
															</div>
														</div>
													</li>
													<li class="col-md-6">
														<div class="img">
															<img src="img/samples/emma.png" alt=""/>
														</div>
														<div class="details">
															<div class="name">
																<a href="#">Emma Watson</a>
															</div>
															<div class="time">
																<i class="fa fa-clock-o"></i> Last online: 1 week ago
															</div>
														</div>
													</li>
													<li class="col-md-6">
														<div class="img">
															<img src="img/samples/george.png" alt=""/>
														</div>
														<div class="details">
															<div class="name">
																<a href="#">George Clooney</a>
															</div>
															<div class="time">
																<i class="fa fa-clock-o"></i> Last online: 1 month ago
															</div>
														</div>
													</li>
													<li class="col-md-6">
														<div class="img">
															<img src="img/samples/kunis.png" alt=""/>
														</div>
														<div class="details">
															<div class="name">
																<a href="#">Mila Kunis</a>
															</div>
															<div class="time online">
																<i class="fa fa-check-circle"></i> Online
															</div>
															<div class="type">
																<span class="label label-warning">Pending</span>
															</div>
														</div>
													</li>
													<li class="col-md-6">
														<div class="img">
															<img src="img/samples/ryan.png" alt=""/>
														</div>
														<div class="details">
															<div class="name">
																<a href="#">Ryan Gossling</a>
															</div>
															<div class="time online">
																<i class="fa fa-check-circle"></i> Online
															</div>
														</div>
													</li>
												</ul>
												<br/>
												<a href="#" class="btn btn-success pull-right">View all users</a>
											</div>
											
											<div class="tab-pane fade" id="tab-products">
												<ul class="widget-products">
													<li>
														<a href="#">
															<span class="img">
																<img src="img/samples/ipad.png" alt=""/>
															</span>
															
															<span class="product clearfix">
																<span class="name">
																	iPad mini 32GB WiFi Black&Slate
																</span>
																<span class="price">
																	<i class="fa fa-money"></i> &dollar;320,00
																</span>
																<span class="warranty">
																	<i class="fa fa-certificate"></i> Warranty: 2 years
																</span>
															</span>
														</a>
													</li>
													<li>
														<a href="#">
															<span class="img">
																<img src="img/samples/ipad.png" alt=""/>
															</span>
															
															<span class="product clearfix">
																<span class="name">
																	iPad mini 16GB WiFi Black&Slate
																</span>
																<span class="price">
																	<i class="fa fa-money"></i> &dollar;273,68
																</span>
																<span class="warranty">
																	<i class="fa fa-certificate"></i> Warranty: 2 years
																</span>
															</span>
														</a>
													</li>
													<li>
														<a href="#">
															<span class="img">
																<img src="img/samples/ipad.png" alt=""/>
															</span>
															
															<span class="product clearfix">
																<span class="name">
																	iPad mini 32GB WiFi Cellular Black&Slate
																</span>
																<span class="price">
																	<i class="fa fa-money"></i> &dollar;447,29
																</span>
																<span class="warranty">
																	<i class="fa fa-certificate"></i> Warranty: 4 years
																</span>
															</span>
														</a>
													</li>
													<li>
														<a href="#">
															<span class="img">
																<img src="img/samples/ipad.png" alt=""/>
															</span>
															
															<span class="product clearfix">
																<span class="name">
																	iPad mini 32GB WiFi Cellular Black&Slate
																</span>
																<span class="price">
																	<i class="fa fa-money"></i> &dollar;447,29
																</span>
																<span class="warranty">
																	<i class="fa fa-certificate"></i> Warranty: 4 years
																</span>
															</span>
														</a>
													</li>
												</ul>
												<br/>
												<a href="#" class="btn btn-success pull-right">View all users</a>
											</div>
											
											
											
										</div>
									</div>
								</div>
							</div>
							
	</div>

</body>
<?php 
	include "footer.php";
 ?>
 	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>


	<script src="js/jquery-ui.custom.min.js"></script>
	<script src="js/fullcalendar.min.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
	<script src="js/raphael-min.js"></script>
	<script src="js/morris.min.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-merc-en.js"></script>
	<script src="js/gdp-data.js"></script>
	<script src="js/flot/jquery.flot.js"></script>
	<script src="js/flot/jquery.flot.min.js"></script>
	<script src="js/flot/jquery.flot.pie.min.js"></script>
	<script src="js/flot/jquery.flot.stack.min.js"></script>
	<script src="js/flot/jquery.flot.resize.min.js"></script>
	<script src="js/flot/jquery.flot.time.min.js"></script>
	<script src="js/flot/jquery.flot.threshold.js"></script>
	
	<!-- theme scripts -->
	<script src="js/scripts.js"></script>
</html>