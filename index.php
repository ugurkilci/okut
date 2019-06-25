<?php

$y = @$_GET["y"];

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <base href="<?php echo $base; ?>">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">    
    <title>Okut! - KILCI.XYZ</title>
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.min.css">
    <meta name="MobileOptimized" content="450">
	<style>
		body{
			background:#efefef;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
		}
    </style>
    <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>

    <header class="container">
        <div class="row">
            <div class="col-sm-12"><br />
                <a href="/okut/" title="Okut! Okumaya üşenenler için"><img src="/okut/okutlogo.png" alt="Okut!"></a>
                <h1 style="font-size:0px;display:none;">Okut!</h1>
                <p>Okumaya üşenenler için.<br /><small>İstediğin yazıyı okutabilirsin.</small></p>
                <a href="/" class="btn btn-dark">KILCI.XYZ</a>
                <br /><br />
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <strong>Yazıyı giriniz:</strong><br />
                <hidden id="sesver"></hidden>
                <textarea id="text" class="form-control" cols="30" rows="10"><?php echo $y; ?></textarea><br />
                <input type="button" onclick="responsiveVoice.speak($('#text').val(),'Turkish Female', {rate: 0.9});" class="btn btn-success" value="Şimdi Okut!">
                <input type="button" onclick="responsiveVoice.pause();" class="btn btn-warning" value="Durdur">
                <input type="button" onclick="responsiveVoice.resume();" class="btn btn-danger" value="Devam Ettir">
                <br /><br />
                <u>Not:</u> <a href="https://kilci.xyz/okut/?y=buraya ne yazarsanız yazı kutusuna da yazılır."><strong>https://kilci.xyz/okut/?y=</strong>buraya ne yazarsanız yazı kutusuna da yazılır.</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr><h2>Reklam</h2>
                <p>Bu sitenin ayakta durması için.. :)</p>
                <a href="https://ugurkilci.wordpress.com/iletisim/" target="_blank"><img src="/res/reklamver.jpg" alt="Reklam ver" title="Reklam ver"></a>
                <br /><br /><iframe width="270" height="90" src="https://www.youtube.com/embed/<?php echo $v1; ?>?autoplay=1&mute=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr><small>
                    Okut! &copy; <?php echo date("Y"); ?><br />
                </small>
                <br /><br />
            </div>
        </div>
    </div>

 
</body>
</html>