<script>
var slideimages = new Array() // create new array to preload images
slideimages[0] = new Image() // create new instance of image object
slideimages[0].src = "/miles4medals/assets/images/siteheader.jpg" // set image src property to image path, preloading image in the process
slideimages[1] = new Image()
slideimages[1].src = "/miles4medals/assets/images/becky.jpg"
slideimages[2] = new Image()
slideimages[2].src = "/miles4medals/assets/images/Tri.jpg"
slideimages[3] = new Image()
slideimages[3].src = "/miles4medals/assets/images/Header.png"


</script>
<div id="formData">
	<div id="content">

<!-- PUT THE CONTENT HERE!!! -->
	<?php echo $message;	?>

						<br>
						<h2><center>Thank you for Visiting Miles for Medals!</center></h2>
						<br>

						<div id="homeWelcoming">
						<p><b>Spread the word and invite your friends and families to get healthy all over the world!</b></p>

						<br>

						<p>
							We hope you will join us in creating a healthier YOU!  We are a women and veteran owned company whose
							main focus is to encourage YOU in creating a healthier lifestyle.  In addition, a portion of your entry fee goes to charity.
						</p>

						<br>

						<p>
							The beauty of the virtual event is that YOU get to choose where, when and how far you run or walk.
							You get to set your goals and create your own success board.  Walk or run on an inside
							track or treadmill, out in the elements, good or bad, or onboard your next cruise ship!
							It only matters that you get up and move!
						</p>
						<br>
						<br>

						<img src="/miles4medals/assets/images/siteheader.jpg" id="slide" width="40%" height="40%" style="float: right"/>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
	<script>
	//variable that will increment through the images
	var step=0

	function slideit(){
	 //if browser does not support the image object, exit.
	 if (!document.images)
	  return

	 document.getElementById('slide').src = slideimages[step].src
	 if (step < slideimages.length - 1){
			step++;
	}
	 else{
		step=0;
	}
	 //call function "slideit()" every 2.5 seconds
	 setTimeout("slideit()",5000)
	}
	slideit()
	</script>
							</div>
						</div>
	        </div>

	          <div class="col-sm-2"></div>

	          </div>

      	</div>




</div>
</body>
</html>
