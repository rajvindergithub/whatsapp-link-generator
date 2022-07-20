<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>Example Title</title>
	<meta name="author" content="Your Name">
	<meta name="description" content="Example description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="">
	<link rel="icon" type="image/x-icon" href=""/>
</head>

<body>
    
    <section id="waLinkGenerator">
        <div class="wpgeneratorField"><input type="tel" id="insertNumberWp" name="insertNumberWp"></div>
        <div class="wpgeneratorField"><textarea id="waLinkText"></textarea></div>
        <div class="wpgeneratorField"><button id="generateWpLink" onclick="generateWpLink();">Generate Link</button></div>
    </section>
	
</body>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
    
        function generateWpLink(){
            var getWaNumber = jQuery('#insertNumberWp').val();
            var getWaMessage = jQuery('#waLinkText').val();
            
            
            
        }
    
    </script>
    
    
    https://api.whatsapp.com/send?phone=9999845182&text=Hello%20friend%20how%20are%20you

    
    
</html>