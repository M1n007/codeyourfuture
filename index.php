
<?php
include 'header.php';

?>


<nav class="navbar navbar-default"><?php include("menu.php"); ?></nav>

        <article>

            <div class="container wrap">
                <div class="row">
                    <div class="col-md-12">
                        <?php
						    $quer4 = $sql->query("select * from tbl_artikel");
						     while ($t = mysqli_fetch_array($quer4)) {
						     	?>
								  <div class="artikel-kop">
								  	<div id="judul">
								  		<b><h2><?php echo $t['1']; ?></h2></b>
								  		<p class="artikel-penulis">Oleh <?php echo $t['3']; ?></p>
								  	</div>
								  </div>
								  <div class="artikel-isi">
								  	<?php echo substr($t['2'], 0, 50); ?>...[<a href="artikel.php?id=<?php echo $t['0']; ?>">Read More</a>]
								  </div>
								  <hr/>
						     	<?php
						     }
						    ?>

                    </div>
                </div>
            </div>
        </article>


<?php
include 'footer.php';
?>

