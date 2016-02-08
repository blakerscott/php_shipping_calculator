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
      <input id="length" name="length">
      <label for="width">Width</label>
      <input id="width" name="width">
      <label for="height">Height</label>
      <input id="height" name="height">
      <label for="weight">Weight</label>
      <input id="weight" name="weight">
      <button type="submit">Calculate Cost</button>
    </form>
    <div>
      <h3>Your Parcel:</h3>
      <ul><?php
            $curLength = $parcel->getLength();
            $curWidth = $parcel->getWidth();
            $curHeight = $parcel->getHeight();
            $curWeight = $parcel->getWeight();

            echo "<li>Length: $curLength </li>";
            echo "<li>Width: $curWidth </li>";
            echo "<li>Height: $curHeight </li>";
            echo "<li>Weight: $curWeight </li>";
       ?>
      </ul>
    </div>
    <script type='text/javascript' id="__bs_script__">//<![CDATA[
      document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
  </body>
</html>
