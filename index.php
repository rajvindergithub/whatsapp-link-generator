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
        <div class="wpLabel">Type Number</div>
        <div class="wpgeneratorField"><input type="tel" id="insertNumberWp" name="insertNumberWp"></div>
        <div class="wpLabel">Type Message</div>
        <div class="wpgeneratorField"><textarea id="waLinkText"></textarea></div>
        <div class="wpgeneratorField"><button id="generateWpLink" onclick="generateWpLink();">Generate Link</button></div>
    </section>
    
    <section id="resultWaLinkGenerator">
        <div class="waLinkHeading">
            WhatsAppLink
        </div>
        <div id="finalWaLink"><textarea id="wpTextareaText" cols="100" rows="20"></textarea></div>
        <div id="copyWaLink"><button onclick="copyWpLink();">Copy WhatApp Link</button></div>
        <div class="testLinkButton" id="testLinkButton"><a href="javascript:void(0);" id="wpLinkHrefPath" target="_blank">Test WP Link</a></div>
    </section>
	
</body>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
    
        function generateWpLink(){
            var getWaNumber = jQuery('#insertNumberWp').val();
            var getWaMessage = jQuery('#waLinkText').val();
            var data = {number:getWaNumber, message:getWaMessage}
            
            $.ajax({
                url: 'submit.php', 
                type: 'POST',
                data: data, 
                success: function(response){
                  //  console.log(response);
                    
                    jQuery('#wpTextareaText').text(response);
                    jQuery('#wpLinkHrefPath').attr('href',response);
                    
                }
            });
            
        }
        
        function copyWpLink(){
              document.querySelector("#wpTextareaText").select();
              document.execCommand('copy');
        }
    
    </script>
    
   <!-- 
    https://api.whatsapp.com/send?phone=9999845182&text=Hello%20friend%20how%20are%20you
    
    
    https://api.whatsapp.com/send?phone=9999845182&text=Hello%20friend%20how%20are%20you%20dasdf%20adf%20asdf%20asdf%20asf%20asf%20asf%20asf%20asf%20asdf%20

    -->
    
</html>