<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar') ?>
<div class="content-wrapper">
	<div class="content-header">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-info">
					<div class="box-header with-border">
						<h2 class="box-title"><strong><?php echo $nama; ?></strong></h2>
					</div>
					<div class="box-body">
						<div class="panel-body">
							<div class="col-xs-12 col-md-5">
								<div class="box-body table-responsive no-padding">
									<table class="table table-bordered table-hover">
										<tr>
											<td>
												Nama Lengkap
											</td>
											<td>
												<?php echo $nama ?>
											</td>
										</tr>
										<tr>
											<td>
												username
											</td>
											<td>
												<?php echo $username ?>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="box-body table-responsive no-padding">
							<table class="table table-hover">
								<tr>
									<td>
										Email
									</td>
									<td>
										<?php echo $email ?>
									</td>
								</tr>
								<tr>
									<td>
										gender
									</td>
									<td>
										<?php echo $gender ?>
									</td>
								</tr>
								<tr>
									<td>
									 Status
									</td>
									<td>
										<?php echo $role_id ?>
									</td>
								</tr>
								<tr>
									<td>
										Tanggal Lahir
									</td>
									<td>
										<?php echo $born_date ?>
									</td>
								</tr>
								<tr>
									<td>
										Bio
									</td>
									<td>
										<?php echo $bio ?>
									</td>
								</tr>
							</table>
						</div>
					<a href="<?php echo site_url('crud') ?>" class="btn btn-success pull-right">Back</a>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>


<?php $this->load->view('templateadmin/footer'); ?>
