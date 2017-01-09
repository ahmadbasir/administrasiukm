<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar') ?>
<div class="content-wrapper">
 <?php echo $this->session->flashdata('success_edit'); ?>
	<section class="content">
		<div class="row">
		<div class="col-xs-12 col-sm-offset-2 col-sm-8">
			<div class="box box-info">
				<div class="box-header with-border">
					<h2 class="box-title"><?php echo $profile->nama; ?></h2>
					<a href="<?php echo site_url('admin/edit') ?>" class="glyphicon glyphicon-pencil pull-right"></a>
				</div>
				<div class="box-body">
						<div class="panel-body">
							<div class="col-xs-12 col-md-5">
								<div class="box-body table-responsive">
									<table class="table table-bordered table-hover">
										<tr>
											<td>
												Nama
											</td>
											<td>
												<?php echo $profile->nama; ?>
											</td>
										</tr>
										<tr>
											<td>
												username
											</td>
											<td>
												<?php echo $profile->username; ?>
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
										<?php echo $profile->email; ?>
									</td>
								</tr>
								<tr>
									<td>
										Gender
									</td>
									<td>
										<?php echo $profile->gender; ?>
									</td>
								</tr>
								<tr>
									<td>
										Tanggal Lahir
									</td>
									<td>
										<?php echo $profile->born_date; ?>
									</td>
								</tr>
								<tr>
									<td>
										Bio
									</td>
									<td>
										<?php echo $profile->bio; ?>
									</td>
								</tr>
							</table>
						</div>
				</div>
			</div>
		</div>
		</div>
	</section>
</div>
<?php $this->load->view('templateadmin/footer'); ?>
