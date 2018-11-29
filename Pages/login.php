<html>
<head>
    <?php
    require_once('../base.php');
    ?>
<link rel="stylesheet" type="text/css" href="../style.css">
<script src="jquery-3.3.1.min"></script>
<script src="jquery.lazyload.js"></script>
</head>
<body>
<div id="content">
	
	<img src="title.png" id="title" class="center">
	<div id="info" class="center">
	<p id='desc'>
	Hi. My name is Julia.<br>
Young and creative graphic designer and illustrator.
	</p>
	<div id="menuDiv" class="center">
	<nav id="links" class="center">
	<li><a href='#'>RANDOM</a></li>
	<li><a href='#'>ARCHIVE</a></li>
	<li><a href='#'>RANDOM</a></li>
	<li><a href='#'>MAIN PAGE</a></li>
	</nav>
	</div>
	</div>
	<div id='gallery' class="center">
	<div id = 'col_1' class='col'>
	
	</div>
	<div id = 'col_2' class='col'>
	
	</div>
	<div id = 'col_3' class='col'>
	
	</div>
	<div id = 'col_4' class='col'>
	
	</div>
	<div id = 'col_5' class='col'>
	
	</div>
	<div id = 'col_6' class='col'>
	
	</div>
	</div>
</div>



<?php

  require_once(__ROOT__ .'/connect.php');


$query = "SELECT Id, Name, Path, InputDate FROM Img";

if ($result = $pdo->query($query)) {
	$imgArr = array();
    /* fetch object array */
    while ($row = $result->fetch()) {
		
        $imgArr[$row['Id']]['Name'] = $row['Name'];
        $imgArr[$row['Id']]['Path'] = $row['Path'];
        $imgArr[$row['Id']]['InputDate'] = $row['InputDate'];
    }
} else {
	echo 'error';
}

?>

<script type="text/javascript">

var colId = 1;
$(function() {

	$('#title').delay(500).animate({opacity: "1"});
	$('#title').on('click',function(){
		if ( $(this).width() >= $(window).width()*80/100) {
			$( this ).animate({ width: '20%' }, 1000 );
		} else {
			$( this ).animate({ width: '90%' }, 1000 );
		}
		if($('.article').length === 0){
			setTimeout(loadGallery,600);
	}
		});
	
});

function loadGallery(){
	var imgArr = <?= json_encode($imgArr) ?>;
	
	$.each(imgArr,function(idx,obj){
		
		var article = '<div class="article">';
		var img = '<img src="'+obj['Path']+'" id="'+obj['Name']+'" class="colImg lazyload">';
		var buttons = '';
		buttons += '<div class="button button_name">'+obj['Name']+'</div>';
		//buttons += '<div class="button button_date">'+obj['InputDate']+'</div>';
		article += img+buttons+'</div>';
		$('#col_'+colId).append(article);
		
		if(colId === 6) {
			colId = 1;
		} else {
			colId++;
		}
	});
	$('.article').delay(500).animate({opacity: "1"});;
}





</script>
</body>
</html> 