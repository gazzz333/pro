<?php
include "head.php";
if ( isset( $_POST['send'] ) ) {
	include 'connect.php';
	mysql_query( "INSERT INTO orders VALUES (NULL, '" . $_POST['name'] . " ', '" . $_POST['email'] . "', '" . $_POST['telefon'] . "', '" . $_POST['message'] . "', '" . $_GET['id'] . "')" ) or die( mysql_error() );
	echo '<script>window.location.href = "/"</script>';
}
?>
    <div class="container py-5" style="min-height: 90vh">
        <div class="texts">


			<?php
			include 'connect.php';

			$query = "SELECT * FROM strahovka WHERE id = '" . $_GET['id'] . "'";

			$result = mysql_query( $query );

			while ( $item = mysql_fetch_array( $result ) ) {
				echo '<div class="col-12">';
				echo '  <h1 id="name">' . $item['name'] . '</h1>';

				echo '  <p class="lead">' . $item['description'] . '</p>';
				echo '  <p class="lead font-weight-bold text-danger mb-4"> ' . $item['price'] . ' </p>';

				echo '</div>';
				if ( ! empty( $item['image'] ) ) {
					echo '<div class="col-12 mt-3">';
					echo '  <img class="strahov" src="' . $item['image'] . '" alt="" width="300" height="300">';
					echo '</div>';
				}
				if ( isset( $_SESSION['uid'] ) ) {
					echo '<div class="col-12 mt-4" style="border-top: 1px solid silver">';

					echo '</div>';
				}
			}
			include 'order.php';
			?>
        </div>
    </div>

<?php include "footer.php" ?>