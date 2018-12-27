<?
	// Класс меню сайта
	class menu {
		// Свойства классов и id, по умолчанию пустые
		var $classes = '';
		public $id = '';

		// Функция выставления классов
		public function setClasses($classes) {
			$this->classes = $classes;
		}
		// Функция выставления id
		public function setId($id) {
			$this->id = $id;
		}

		public function createMenu($classes, $id) {
			$this->setClasses($classes);
			$this->setId($id);

			echo "<ul class='".$this->classes."' id='".$this->id."'></ul>";
		}
	}

	// Класс подменю
	class submenu extends menu {
		// Новое свойство родитель, id пункта меню кужа вкладывается
		public $parent = null;

		public function createMenu($classes) {
			$this->setClasses($classes);

			echo "<ul class='".$this->classes."'></ul>";
		}
	}

	$menu = new menu();
	$submenu = new submenu();

	$menu->createMenu('menu nav', 'menu');
	$submenu->createMenu('submenu');