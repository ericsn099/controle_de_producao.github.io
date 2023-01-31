<?php
include './Views/partials/Header/header.php';
?>

	<!--HOME AREA-->
	<div class="home-area ">
		<div class="banner-area">
			<div class="banner-info">
			</div>
		</div>
	</div>
	

<!-- FOOTER-->
<?php
include 'Views/partials/Footer/footer.php';

if (isset($_GET['message'])){
    include 'Views/Feedback/feedbackDoacao.php';
}
?>