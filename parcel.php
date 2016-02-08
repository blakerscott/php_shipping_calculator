<?php
    class Parcel
    {
        private $length;
        private $width;
        private $height;
        private $weight;


    function __construct($curLength, $curWidth, $curHeight, $curWeight)
    {
          $this->length = $curLength;
          $this->width = $curWidth;
          $this->height = $curHeight;
          $this->weight = $curWeight;

    }

      function getLength ()
      {
        return $this->length;
      }
      function getWidth ()
      {
        return $this->width;
      }
      function getHeight ()
      {
        return $this->height;
      }
      function getWeight ()
      {
        return $this->weight;
      }

      function volume ()
      {
        return $this->length * $this->width * $this->height;

      }

      function costToShip ()
      {
        $curVolume = $this->volume();
        return ($curVolume * 1) + ($this->weight * 1);
      }
    }
    $parcel = new Parcel ($_GET["length"], $_GET["width"], $_GET["height"], $_GET["weight"]);


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="parcel.php">
      <label for="length">Length</label>
      <input id="length" name="length" type="number">
      <label for="width">Width</label>
      <input id="width" name="width" type="number">
      <label for="height">Height</label>
      <input id="height" name="height" type="number">
      <label for="weight">Weight</label>
      <input id="weight" name="weight" type="number">
      <button type="submit">Calculate Cost</button>
    </form>
    <div>
      <h3>Your Parcel:</h3>
      <ul><?php
            $curLength = $parcel->getLength();
            $curWidth = $parcel->getWidth();
            $curHeight = $parcel->getHeight();
            $curWeight = $parcel->getWeight();
            $curVolume = $parcel->volume();
            $curCost = $parcel->costToShip();

            if($curLength && $curWidth && $curHeight && $curWeight && $curVolume && $curCost)
            {
            echo "<li>Length: $curLength </li>";
            echo "<li>Width: $curWidth </li>";
            echo "<li>Height: $curHeight </li>";
            echo "<li>Weight: $curWeight </li>";
            echo "<li>Volume: $curVolume </li>";
            echo "<li>Total Cost: $curCost </li>";
          } else {
            echo "<p>Please enter a value for all fields</p>";
          }
       ?>
      </ul>
    </div>
    <script type='text/javascript' id="__bs_script__">//<![CDATA[
      document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
  </body>
</html>
