  
</main>
<!-- end main -->

<!-- Required -->
<?= js('assets/js/webslides.js') ?>

<script>
 	window.ws = new WebSlides(); 

  	/* Open when someone clicks on the span element */
	function openNav() {
	    document.getElementById("myNav").style.width = "100%";
	}

	/* Close when someone clicks on the "x" symbol inside the overlay */
	function closeNav() {
	    document.getElementById("myNav").style.width = "0%";
	}

</script>

<!-- OPTIONAL - svg-icons.js (fontastic.me - Font Awesome as svg icons) -->
<?= js('assets/js/svg-icons.js') ?>

</body>
</html>