<?php
/**
 * Created by PhpStorm.
 * User: Afnan A. Abed
 * Date: 5/16/2019
 * Time: 12:46 AM
 */

/**
 * Question: Create an application that extracts the <to>, <from>,
 * and <body> elements from the XML document to produce the output
 */

$data = "
<note>
       <to>Tove</to> 
       <from>Jani</from> 
       <body>Don't forget me this weekend!</body> 
</note>
";

$xml = simplexml_load_string($data);
?>

<h4>MESSAGE</h4>
<span style="font-weight: bold;">To: </span> 
<?php echo $xml->to; ?> <br>
<span style="font-weight: bold;">From: </span> 
<?php echo $xml->from; ?> <br><br>
<?php echo $xml->body; ?>
