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
	 <script type="stylesheet/css">
	 	
	 </script>
<div class="container">
<div class="row">
		<div class="col-xs-6">
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
						
					<div class="col-xs-6">
						
						
						<div class="row">
							<div class="col-lg-12">
								<div class="main-box">
									
									<div id="nestable-menu">
										<button type="button" class="btn btn-primary" data-action="expand-all">Expand All</button>
										<button type="button" class="btn btn-danger" data-action="collapse-all">Collapse All</button>
										<label class="btn btn-primary"  id="nestable-switch">
											<input type="checkbox">Editar
										</label>
									</div>
										<button > editar</button>

									<div>
										
									</div>
									<div class="row cf nestable-lists">
								
										<div class="col-md-6 dd" id="nestable">
											<ol class="dd-list">
												<li class="dd-item" data-id="1">
													<div class="dd-handle">
														Item 1 
														<div class="nested-links">
															<span class="badge">14</span>
														</div>
													</div>
												</li>
												<li class="dd-item" data-id="2">
													<div class="dd-handle">
														Item 2
													</div>
													<ol class="dd-list">
														<li class="dd-item" data-id="3">
															<div class="dd-handle">
																Item 3
																
																<div class="nested-links">
																	<i class="fa fa-warning fa-lg"></i> 
																</div>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																Item 4
															</div>
														</li>
														<li class="dd-item" data-id="5">
															<div class="dd-handle">
																Item 5
																<div class="nested-links">
																	<a href="#" class="nested-link"><i class="fa fa-pencil"></i></a>
																	<a href="#" class="nested-link"><i class="fa fa-cog"></i></a>
																	<a href="#" class="nested-link"><i class="fa fa-trash"></i></a>
																</div>
															</div>
															<ol class="dd-list">
																<li class="dd-item" data-id="6">
																	<div class="dd-handle">
																		Item 6
																	</div>
																</li>
																<li class="dd-item" data-id="7">
																	<div class="dd-handle">
																		Item 7
																	</div>
																</li>
																<li class="dd-item" data-id="8">
																	<div class="dd-handle">
																		Item 8
																	</div>
																</li>
															</ol>
														</li>
														<li class="dd-item" data-id="9">
															<div class="dd-handle">
																Item 9
															</div>
														</li>
														<li class="dd-item" data-id="10">
															<div class="dd-handle">
																Item 10
															</div>
														</li>
													</ol>
												</li>
												<li class="dd-item" data-id="11">
													<div class="dd-handle">
														Item 11
													</div>
												</li>
												<li class="dd-item" data-id="12">
													<div class="dd-handle">
														Item 12
														<div class="nested-links">
															<a href="#" class="nested-link"><i class="fa fa-pencil"></i></a>
															<a href="#" class="nested-link"><i class="fa fa-cog"></i></a>
															<a href="#" class="nested-link"><i class="fa fa-trash"></i></a>
														</div>
													</div>
												</li>
											</ol>
										</div>
								
										<div class="col-md-6 dd" id="nestable2">
											<ol class="dd-list">
												<li class="dd-item dd-item-list" data-id="13">
													<div class="dd-handle-list"><i class="fa fa-bars"></i></div>
													<div class="dd-handle">Item 13</div>
												</li>
												<li class="dd-item dd-item-list" data-id="14">
													<div class="dd-handle-list"><i class="fa fa-bars"></i></div>
													<div class="dd-handle">
														Item 14
														<div class="nested-links">
															<span class="badge badge-danger"><i class="fa fa-envelope"></i></span>
														</div>
													</div>
												</li>
												<li class="dd-item dd-item-list" data-id="15">
													<div class="dd-handle-list"><i class="fa fa-bars"></i></div>
													<div class="dd-handle">Item 15</div>
													<ol class="dd-list">
														<li class="dd-item dd-item-list" data-id="16">
															<div class="dd-head dd-handle-list dd-handle"><i class="fa fa-bars"></i></div>
															<div class="dd-body red-bg txt-white-hover">Item 16</div>
														</li>
														<li class="dd-item dd-item-list" data-id="17">
															<div class="dd-head dd-handle-list dd-handle"><i class="fa fa-bars"></i></div>
															<div class="dd-body yellow-bg txt-white-hover">Item 17</div>
														</li>
														<li class="dd-item dd-item-list" data-id="18">
															<div class="dd-handle-list"><i class="fa fa-bars"></i></div>
															<div class="dd-handle green-bg txt-white-hover">Item 18</div>
														</li>
													</ol>
												</li>
												<li class="dd-item dd-item-list" data-id="19">
													<div class="dd-handle-list"><i class="fa fa-bars"></i></div>
													<div class="dd-handle">Item 19</div>
												</li>
												<li class="dd-item dd-item-list" data-id="20">
													<div class="dd-handle-list"><i class="fa fa-bars"></i></div>
													<div class="dd-handle">
														Item 20
														<div class="nested-links">
															<a href="#" class="nested-link"><i class="fa fa-pencil"></i></a>
															<a href="#" class="nested-link"><i class="fa fa-cog"></i></a>
															<a href="#" class="nested-link"><i class="fa fa-trash"></i></a>
														</div>
													</div>
												</li>
												<li class="dd-item dd-item-list" data-id="21">
													<div class="dd-handle-list"><i class="fa fa-bars"></i></div>
													<div class="dd-handle">Item 21</div>
													<ol class="dd-list">
														<li class="dd-item dd-item-list" data-id="22">
															<div class="dd-handle-list"><i class="fa fa-bars"></i></div>
															<div class="dd-handle">Item 22</div>
														</li>
														<li class="dd-item dd-item-list" data-id="23">
															<div class="dd-handle-list"><i class="fa fa-bars"></i></div>
															<div class="dd-handle">Item 23</div>
														</li>
													</ol>
												</li>
												<li class="dd-item dd-item-list" data-id="24">
													<div class="dd-handle-list"><i class="fa fa-bars"></i></div>
													<div class="dd-handle">Item 24</div>
												</li>
											</ol>
										</div>
								
									</div>
								
									<p><b>Serialised Output (per list)</b></p>
								
									<textarea id="nestable-output" class="form-control" rows="3"></textarea>
									<br/>
									<textarea id="nestable2-output" class="form-control" rows="3"></textarea>
	
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

	<script src="js/jquery.nestable.js"></script>

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
<!-- https://github.com/dbushell/Nestable -->
	<script>
	$(document).ready(function() {



		var updateOutput = function(e){
			var list   = e.length ? e : $(e.target),
				output = list.data('output');
			if (window.JSON) {
				output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
			} 
			else {
				output.val('JSON browser support required for this demo.');
			}
		};
		$('#nestable-switch').on('click',function(){

// activate Nestable for list 1
		$('#nestable').nestable({
			group: 1
		})
		.on('change', updateOutput);
		
		// activate Nestable for list 2
		$('#nestable2').nestable({
			group: 1
		})
		.on('change', updateOutput);
	
		// output initial serialised data
		updateOutput($('#nestable').data('output', $('#nestable-output')));
		updateOutput($('#nestable2').data('output', $('#nestable2-output')));
	
		$('#nestable-menu').on('click', function(e){
			var target = $(e.target),
				action = target.data('action');
			if (action === 'expand-all') {
				$('.dd').nestable('expandAll');
			}
			if (action === 'collapse-all') {
				$('.dd').nestable('collapseAll');
			}
		});

		});
		
	});
	</script>
</html>