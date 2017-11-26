<?php
  require_once ("./Image.php");
  $crop = new CropImage();

  $src = $_GET['src'];
  $width = $_GET['w'];
  $height = $_GET['h'];

  $src = preg_replace("/ /", "%20", $src);
  
  header('Content-Type: image/jpeg');
  $crop->initialize([
      'source_image' => $src,
      'width'        => $width,
      'height'       => $height,
  ]);
  $crop->crop();
