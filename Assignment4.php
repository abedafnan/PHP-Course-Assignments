<?php
	/**
	 * Create a class Section with 3 attributes. 
	 * Provide setter and getter functions
	 * Create an objet then set values to its attributes 
	 * finally print them in unordered list
	 */
	class Section {
		private $title;
		private $id;
		private $content;

		function setTitle($title) {
			$this->title = $title;
		}

		function setID($id) {
			$this->id = $id;
		}

		function setContent($content) {
			$this->content = $content;
		}

		function getTitle() {
			return $this->title;
		}

		function getID() {
			return $this->id;
		}

		function getContent() {
			return $this->content;
		}

	}

	$sec = new Section;
	$sec->setTitle("Section Title");
	$sec->setID("01234");
	$sec->setContent("Section Content");
?>

<!DOCTYPE html>
<html>
	<body>
		<ul>
			<li> <? echo $sec->getTitle(); ?> </li>
			<li> <? echo $sec->getID(); ?> </li>
			<li> <? echo $sec->getContent(); ?> </li>	
		</ul>
	</body>
</html>

 
