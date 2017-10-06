<div id = "footer" class="cf">
				
				<div class="column three">

					<strong>Phone</strong>
					888.529.3819
					
				</div><!-- column -->

				<div class="column three">
					<strong>Location</strong>
					123 Kapiolani Boulevard<br>
					Honolulu HI 012345
					
				</div><!-- column -->

				<div class="column three last">

					<strong>Hours</strong>
					<em>Tuesday - Thursday</em><br>
					1:00 PM - 9:00 PM <br><br>

					<em>Friday - Saturday</em><br>
					4:00 PM - 11:00 PM <br><br>

					<em>Sunday - Monday</em><br>
					Closed <br><br>

					<!-- PHP Script for Store hours Plugin -->

					<?php  include('includes/store-hours.php'); ?>
					
				</div><!-- column -->

				<small>&copy;<?php echo date('Y'); ?> <?php echo $companyName; ?></small>

			</div> <!-- footer -->

		</div><!-- content -->


	</div><!-- wrapper -->

	<div class="copyright-info">
		
		<?php include('../assets/includes/copyright.php'); ?>
	</div><!-- copyright-info -->

</body>

</html>